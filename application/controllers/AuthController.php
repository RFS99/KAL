<?php defined('BASEPATH') or exit("No direct script access allowed");

class AuthController extends CI_Controller
{
	protected $result = [];
	function __construct()
	{
		parent::__construct();
		$this->result['status'] 	= "failed";
		$this->result['message'] 	= "";
		$this->result['data']	 	= [];
		$this->load->model("AuthModel", "mod");
		$this->load->helper(array('email'));
		$this->load->library(array('email'));
	}

	function hasLogin()
	{
		return $this->session->userdata("pish-session");
	}

	function index()
	{
		if ($this->hasLogin()) redirect("home");

		$this->load->view("auth/login");
	}

	function index_register()
	{
		if ($this->hasLogin()) redirect("home");

		$this->load->view("auth/register");
	}

	function index_activation()
	{
		if ($this->hasLogin()) redirect("home");

		$this->load->view("auth/activation");
	}

	function login()
	{
		$email 		= $this->input->post("email") ?? '';
		$password 	= $this->input->post("password") ?? '';

		if (empty($email)) {
			$this->result['message'] = "Email tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($password)) {
			$this->result['message'] = "Password tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		/* Check email has been used or not */
		$check_email = $this->mod->check_userExist($email);
		if (!$check_email) {
			$this->result['message'] = "Email tidak ditemukan.";
			echo json_encode($this->result);
			exit;
		}

		$user_avatar		= $check_email[0]->avatar;
		$user_fullname		= $check_email[0]->fullname;
		$user_email			= $check_email[0]->email;
		$user_password		= $check_email[0]->password;
		$user_type			= $check_email[0]->user_type;
		$user_status		= $check_email[0]->user_status;

		/* check verivication */
		if ($user_status == 0) {
			$this->result['message'] = "Akun belum diverifikasi.";
			echo json_encode($this->result);
			exit;
		}

		/* check password */
		if (!password_verify($password, $user_password)) {
			$this->result['message'] = "Username / password salah.";
			echo json_encode($this->result);
			exit;
		}

		$data = [
			"avatar"		=> $user_avatar,
			"fullname"		=> $user_fullname,
			"email"			=> $user_email,
			"password"		=> $user_password,
			"user_type"		=> $user_type,
			"user_status"   => $user_status,
		];

		$this->session->set_userdata("pish-session", (object)$data);

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil login.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function register()
	{
		/* Valdiator */
		$title   		= $this->input->post("title") ?? '';
		$description	= $this->input->post("description") ?? '';
		$genre 			= $this->input->post("genres") ?? '';
		$studio			= $this->input->post("studios") ?? '';

		if (empty($title)) {
			$this->result['message'] = "Judul user tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($description)) {
			$this->result['message'] = "Deskripsi tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if ($genre == 0) {
			$this->result['message'] = "Genre tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if ($studio == 0) {
			$this->result['message'] = "Studio tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		/* Input Anime */
		$data = [
			"title"			=> $title,
			"description"	=> $description
		];
		$anime_id = $this->mod->insertid('animes', $data);

		/* Input Studio */
		for ($i = 0; $i < count($studio); $i++) {
			$data = [
				"anime_id"	=> $anime_id,
				"studio_id"	=> $studio[$i]
			];
			$this->mod->insert('anime_studio_details', $data);
		}

		/* Input Genre */
		for ($i = 0; $i < count($genre); $i++) {
			$data = [
				"anime_id"	=> $anime_id,
				"genre_id"	=> $genre[$i]
			];
			$this->mod->insert('anime_genre_details', $data);
		}

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil memasukkan data.";
		echo json_encode($this->result);
		exit;
	}

	function delete()
	{
		/* Valdiator */
		$anime_id = $this->input->post("anime_id") ?? '';

		if (!empty($anime_id)) {
			$this->mod->delete('animes', $anime_id);
		}

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil menghapus data.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function verification()
	{
		$token 		= $this->input->get('token');
		$user_id 	= $this->input->get('user_id');
		$message 	= "";

		$check 	= $this->mod->verify_user($user_id, $token);
		if (!$check) {
			$message = "Token atau User tidak valid.";
		} else if (date("Y-m-d H:i:s") > @$check[0]->valid_until) {
			$message = "Token sudah kadaluarsa.";
		} else {
			/* Verifikasi akun */
			$user_data = [
				"user_status"   => 1,
				"updated_at"	=> date("Y-m-d H:i:s")
			];
			$this->mod->update('admin', $user_data, ["id" => $user_id]);


			$data = [
				"id"		=> $check[0]->id,
				"avatar"	=> $check[0]->avatar,
				"fullname"	=> $check[0]->fullname,
				"email"		=> $check[0]->email,
				"user_type"	=> $check[0]->user_type,
			];

			$this->session->set_userdata("pish-session", (object)$data);
			redirect("/");
		}

		$data['message'] = $message;
		$data['user_id'] = $user_id;
		$this->load->view("layouts/error-link", $data);
	}

	function generate_newToken()
	{
		$user_id 	= $this->input->post('user_id');
		$search 	= $this->mod->search_user($user_id);
		$email 		= @$search[0]->email;

		if (@$search[0]->user_status == 1) {
			$this->result['message'] = "Gagal membuat token baru. Akun user sudah terverifikasi.";
			echo json_encode($this->result);
			exit;
		}

		$token = md5(date("Y-m-d H:i:s") . $email);
		/* insert token */
		$data_token = [
			"user_id" 		=> $user_id,
			"token"			=> $token,
			"valid_until"	=> date('Y-m-d H:i:s', strtotime('+10 minutes')),
			"created_at"	=> date("Y-m-d H:i:s")
		];
		$this->mod->insert('user_activations', $data_token);
		$url_verif = base_url('verification?token=' . $token . '&user_id=' . $user_id);

		$this->email_task($url_verif, $email);

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil membuat token baru. Cek email untuk aktivasi akun.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function generate_newToken_withEmail()
	{
		$email 	= $this->input->post('email');
		$search = $this->mod->search_user_byEmail($email);
		$user_id = @$search[0]->id;

		if (empty($email)) {
			$this->result['message'] = "Email tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		if (@$search[0]->user_status == 1) {
			$this->result['message'] = "Gagal membuat token baru. Akun user sudah terverifikasi.";
			echo json_encode($this->result);
			exit;
		}

		$token = md5(date("Y-m-d H:i:s") . $email);
		/* insert token */
		$data_token = [
			"user_id" 		=> $user_id,
			"token"			=> $token,
			"valid_until"	=> date('Y-m-d H:i:s', strtotime('+10 minutes')),
			"created_at"	=> date("Y-m-d H:i:s")
		];
		$this->mod->insert('user_activations', $data_token);
		$url_verif = base_url('verification?token=' . $token . '&user_id=' . $user_id);

		$this->email_task($url_verif, $email);

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil membuat token baru. Cek email untuk aktivasi akun.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function logout()
	{
		if (!$this->hasLogin()) redirect("/");
		$this->session->sess_destroy();
		redirect("/");
	}

	/*** SEND EMAIL ***/
	function email_task($url, $email)
	{
		$subject = 'Verifikasi email PISH';
		$data['email'] = $email;
		$data['token'] = $url;
		$content = $this->load->view('layouts/email', $data, true);
		$isEmailSent = $this->sendMail($email, $subject, $content);
		return $isEmailSent;
	}

	function sendMail($email, $subject, $content)
	{
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.googlemail.com',
			'smtp_port' => '587',
			'smtp_user' => 'situs.pish@gmail.com',
			'smtp_pass' => '@PISHproject00',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from('situs.pish@gmail.com');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($content);
		if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		}
	}
}