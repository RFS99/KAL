<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->result['status'] 	= "failed";
		$this->result['message'] 	= "";
		$this->result['data']	 	= [];
		$this->load->model("HomeModel", "mod");
	}

	function hasLogin()
	{
		return $this->session->userdata("pish-session");
	}

	public function index()
	{
		$is_session = false;
		$user_type = "";
		if ($this->hasLogin()) {
			$is_session = true;
			$user_type = @$this->hasLogin()->user_type;
		}

		$data['is_session']	= $is_session;
		$data['user_type']	= $user_type;
		$this->load->view('Home', $data);
	}

	public function accountCutomer()
	{
		$this->load->view('/application/views/account.php');
	}

	function contact_save()
	{
		$name   	= $this->input->post("name") ?? '';
		$email 		= $this->input->post("email") ?? '';
		$subject 	= $this->input->post("subject") ?? '';
		$message 	= $this->input->post("message") ?? '';

		if (empty($name)) {
			$this->result['message'] = "Nama tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($email)) {
			$this->result['message'] = "Email tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($subject)) {
			$this->result['message'] = "Subject tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($message)) {
			$this->result['message'] = "Isi Pesan tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		$data = [
			"name"			=> $name,
			"email"			=> $email,
			"subject"		=> $subject,
			"message"		=> $message,
			"is_read"		=> 0,
			"created_at"   	=> date("Y-m-d H:i:s")
		];

		$this->mod->insert('messages', $data);

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil mengirim pesan. Pesan anda akan dibalas oleh kami ke email yang anda isi.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}
}