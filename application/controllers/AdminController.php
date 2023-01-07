<?php defined('BASEPATH') or exit("No direct script access allowed");

class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->result['status'] 	= "failed";
		$this->result['message'] 	= "";
		$this->result['data']	 	= [];
		$this->load->model("AdminModel", "mod");
		$this->load->model("HomeModel", "mod1");
	}

	function hasLogin()
	{
		return $this->session->userdata("pish-session");
	}


	function index()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];
		$genre = $this->mod1->genre_list();
		$studio = $this->mod1->studio_list();

		$data['genre_list'] = (!$genre) ? [] : array_chunk($genre, 7);
		$data['studio_list'] = (!$studio) ? [] : array_chunk($studio, 7);
		$data['title'] = "Dashboard";
		$data['page'] = "admin/dashboard";
		$this->load->view("admin/main-content", $data);
	}

	function addanime()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];

		$studio = $this->mod1->studio_list();
		$genre = $this->mod1->genre_list();
		$data['studio_list'] = $studio;
		$data['genre_list'] = $genre;

		$data['title'] = "Add Anime";
		$data['page'] = "admin/addanime";
		$this->load->view("admin/main-content", $data);
	}

	function deleteanime()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		$genre = $this->mod1->genre_list();
		$studio = $this->mod1->studio_list();
		$detail_anime = $this->mod1->all_anime();
		$data['genre_list'] = $genre;
		$data['studio_list'] = $studio;
		$data['all_anime']	= $detail_anime;


		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];
		$data['title'] = "Delete Anime";
		$data['page'] = "admin/deleteanime";
		$this->load->view("admin/main-content", $data);
	}

	function index_user()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];
		$data['title'] = "User";
		$data['data']	= $this->mod->render_user();
		$data['page'] = "admin/list-user/index";
		$this->load->view("admin/main-content", $data);
	}

	function index_detail_user()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		$user_id = 0;
		if ($_GET) {
			$user_id    = $this->input->get("id");
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];
		$data['title'] = "Detail User";
		$data['data']	= $this->mod->render_user($user_id);
		$data['page'] = "admin/list-user/detail-user";
		$this->load->view("admin/main-content", $data);
	}

	function index_add_user()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}
		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-user")
		];

		$data['title'] = "Add New User";
		$data['page'] = "admin/list-user/add-user";
		$this->load->view("admin/main-content", $data);
	}

	function save_user()
	{
		$fullname   	= $this->input->post("fullname") ?? '';
		$email 			= $this->input->post("email") ?? '';
		$user_type 		= $this->input->post("user_type") ?? '';

		if (empty($fullname)) {
			$this->result['message'] = "Nama user tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}
		if (empty($email)) {
			$this->result['message'] = "Email tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		if (empty($user_type)) {
			$this->result['message'] = "Tipe user tidak boleh kosong.";
			echo json_encode($this->result);
			exit;
		}

		/* Check email has been used or not */
		$check_email = $this->mod->check_userExist($email);
		if ($check_email) {
			if ($check_email[0]->user_status == 0) {
				$this->result['message'] = "Email sudah digunakan dan belum terverifikasi.";
				echo json_encode($this->result);
				exit;
			}
			$this->result['message'] = "Email sudah digunakan.";
			echo json_encode($this->result);
			exit;
		}

		/* Default Password*/
		$password = password_hash('123456', PASSWORD_DEFAULT);

		$data = [
			"fullname"		=> $fullname,
			"email"			=> $email,
			"password"		=> $password,
			"user_type"		=> $user_type,
			"is_active"		=> 0,
			"user_status"   => 1,
			"created_at"   	=> date("Y-m-d H:i:s")
		];

		/* insert user */
		$this->mod->insert('admin', $data);
		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil menambahkan user.";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function delete_account()
	{
		$user_id = $this->input->post("user_id");

		if (empty($user_id)) {
			$this->result['message'] = "User tidak ditemukan.";
			echo json_encode($this->result);
			exit;
		}

		$data = [
			"is_active"		=> 1,
			"updated_at"   	=> date("Y-m-d H:i:s"),
			"deleted_at"   	=> date("Y-m-d H:i:s")
		];

		/* update user */
		$this->mod->update("admin", $data, ["id" => $user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function reset_password()
	{
		$user_id = $this->input->post("user_id");

		if (empty($user_id)) {
			$this->result['message'] = "User tidak ditemukan.";
			echo json_encode($this->result);
			exit;
		}

		$password = password_hash("123456", PASSWORD_DEFAULT);

		$data = [
			"password"		=> $password,
			"updated_at"   	=> date("Y-m-d H:i:s")
		];

		/* update user */
		$this->mod->update("admin", $data, ["id" => $user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function activation_account()
	{
		$user_id = $this->input->post("user_id");

		if (empty($user_id)) {
			$this->result['message'] = "User tidak ditemukan.";
			echo json_encode($this->result);
			exit;
		}

		$data = [
			"is_active"		=> 0,
			"user_status"	=> 1,
			"updated_at"   	=> date("Y-m-d H:i:s")
		];

		/* update user */
		$this->mod->update("admin", $data, ["id" => $user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function index_message()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-message")
		];
		$data['title'] 	= "Message";
		$data['data']	= $this->mod->render_message();
		$data['page']	= "admin/list-message/index";
		$this->load->view("admin/main-content", $data);
	}

	function index_detail_message()
	{
		if (!$this->hasLogin()) redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if ($user_type != 1) { /* jika yang login bukan admin*/
			redirect("/");
		}

		$msg_id = 0;
		if ($_GET) {
			$msg_id    = $this->input->get("id");
		}
		$pesan = $this->mod->render_message($msg_id);

		/* jika pesan belum pernah dibaca */
		if (@$pesan[0]->read_at == null) {
			/* rubah is_read menjadi 1 yang artinya sudah dibaca */
			$data = [
				"is_read"	=> 1,
				"read_at"   => date("Y-m-d H:i:s")
			];
			$this->mod->update("messages", $data, ["id" => $msg_id]);
		}

		/** JS **/
		$data['js'] = [
			base_url("assets/js/admin/list-message")
		];

		$data['title'] 	= "Detail Message";
		$data['data']	= $pesan;
		$data['page']	= "admin/list-message/detail-message";
		$this->load->view("admin/main-content", $data);
	}


	public function search()
	{
		$search = $this->input->post("keyword") ?? '';
		$genre = $this->input->post("genres") ?? [];
		$studio = $this->input->post("studios") ?? [];

		/*** Membuat genre dan studio menjadi string ***/
		$genre_string = implode(" ", $genre);
		$studio_string = implode(" ", $studio);

		/*** Proses case folding (merubah kata-kata menjadi lowercase) ***/
		$text_tolowercase = strtolower($search);
		$genre_tolowercase = strtolower($genre_string);
		$studio_tolowercase = strtolower($studio_string);

		/*** tokenizing (pemotongan string) ***/
		/* 1. hapus special character */
		$clean_text = $this->clean($text_tolowercase);
		$clean_genre = $this->clean($genre_tolowercase);
		$clean_studio = $this->clean($studio_tolowercase);

		/* 2. memotong text menjadi array */
		$text_arr = explode(" ", $clean_text);
		$genre_arr = explode(" ", $clean_genre);
		$studio_arr = explode(" ", $clean_studio);

		/*** filtering (stopword removal) ***/
		/* 1. mengambil text stopword */
		$stopwords = array_column($this->mod1->get_stopword(), 'word');

		/* 2. menghapus stopword text pada inputan search dan genre dan mereset index array menjadi ke 0 */
		$text_diff = array_values(array_diff($text_arr, $stopwords));
		$genre_diff = array_values(array_diff($genre_arr, $stopwords));

		/* 3. hapus duplikat text dan menggabungkan genre, studio dengan inputan text */
		$array_diff = array_unique(array_merge($text_diff, $genre_diff));
		$text_diff = array_unique(array_merge($array_diff, $studio_arr));

		/*** Stemming ***/
		/* 1. stemming kata */
		$stemmer_factory = new Wamania\Snowball\StemmerFactory;
		$stemmer = $stemmer_factory->create('english');
		$text_arr = [];
		for ($i = 0; $i < count($text_diff); $i++) {
			if (!empty($text_diff[$i])) {
				$text = $stemmer->stem($text_diff[$i]);
				array_push($text_arr, $text);
			}
		}


		$data_anime = $this->do_anime_in_database($search, $genre, $studio);
		foreach ($data_anime as $anime) {
			$score[$anime['anime_id']] = $this->calculate_cosine($text_arr, $anime['text']);
		}

		/* Sorting Descending */
		arsort($score);

		/* Get detail anime */
		$recommendation = [];
		$index = 0;
		foreach ($score as $key => $val) {
			$index++;
			/* Maximal mengambil 15 data saja */
			if ($index <= 15) {
				$detail_anime = $this->mod1->data_anime($key);
				$detail = [
					"anime" => $detail_anime,
					"score" => $val
				];
				array_push($recommendation, $detail);
			}
		}

		/* RENDER REKOMENDASI KE VIEW */
		$is_session = false;
		$user_type = "";
		if ($this->hasLogin()) {
			$is_session = true;
			$user_type = @$this->hasLogin()->user_type;
		}

		$genre = $this->mod1->genre_list();
		$studio = $this->mod1->studio_list();

		$data['genre_list'] = (!$genre) ? [] : array_chunk($genre, 7);
		$data['studio_list'] = (!$studio) ? [] : array_chunk($studio, 7);
		$data['is_session']	= $is_session;
		$data['user_type']	= $user_type;
		$data['anime_rec']	= $recommendation;

		$this->load->view('Home', $data);
	}

	public function do_anime_in_database($search, $genre, $studio)
	{
		$data = [];
		$genre = $genre;
		$studio = $studio;
		$animes = $this->mod1->anime_list($search, $genre, $studio);

		foreach ($animes as $anime) {
			$data_anime = [];

			/*** Ubah tanda koma di genre dan studio menjadi spasi ***/
			$genre_str = str_replace(',', ' ', @$anime->genre_title);
			$studio_str = str_replace(',', ' ', @$anime->studio_title);

			/*** Proses case folding (merubah kata-kata menjadi lowercase) ***/
			$title_lower = strtolower(@$anime->title);
			$desc_lower = strtolower(@$anime->description);
			$genre_lower = strtolower($genre_str);
			$studio_lower = strtolower($studio_str);

			/*** Menggabungkan semua string ***/
			$text = $title_lower . " " . $desc_lower . " " . $genre_lower . " " . $studio_lower;

			/*** tokenizing (pemotongan string) ***/
			/* 1. hapus special character */
			$clean_text = $this->clean($text);
			/* 2. memotong text menjadi array */
			$text_arr = explode(" ", $clean_text);

			/*** filtering (stopword removal) ***/
			/* 1. mengambil text stopword */
			$stopwords = array_column($this->mod1->get_stopword(), 'word');

			/* 2. menghapus stopword text pada string */
			$text_diff = array_diff($text_arr, $stopwords);

			/* 3. hapus duplikat array dan mereset index array menjadi ke 0 */
			$array_unique = array_values(array_unique($text_diff));

			/*** Stemming ***/
			/* 1. stemming kata */
			$stemmer_factory = new Wamania\Snowball\StemmerFactory;
			$stemmer = $stemmer_factory->create('english');
			$text_arr = [];
			for ($i = 0; $i < count($array_unique); $i++) {
				if (!empty($array_unique[$i])) {
					$text = $stemmer->stem($array_unique[$i]);
					array_push($text_arr, $text);
				}
			}

			$data_anime = [
				"anime_id" => $anime->anime_id,
				"text" => $text_arr
			];
			array_push($data, $data_anime);
		}

		return $data;
	}

	function clean($string)
	{
		$replace_dot = str_replace('.', '', $string);
		return preg_replace('/[^a-zA-Z ]/s', '', $replace_dot); // Removes special chars.
	}

	public function calculate_cosine($target, $data)
	{
		$count_target = count($target);
		$count_data = count($data);

		$count_same_array = count(array_intersect($target, $data));

		return $count_same_array / (sqrt($count_target * $count_data));
	}
}