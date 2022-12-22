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

	public function search(){
		$search = $this->input->post("search") ?? '';
		$genre = $this->input->post("genre") ?? '';

		/*** Proses case folding (merubah kata-kata menjadi lowercase) ***/
		$text_tolowercase = strtolower($search);
		$genre_tolowercase = strtolower($genre);

		/*** tokenizing (pemotongan string) ***/
		/* 1. hapus special character */
		$clean_text = $this->clean($text_tolowercase);
		$clean_genre = $this->clean($genre_tolowercase);

		/* 2. memotong text menjadi string */
		$text_arr = explode(" ",$clean_text);
		$genre_arr = explode(" ",$clean_genre);

		/*** filtering (stopword removal) ***/
		/* 1. mengambil text stopword */
		$stopwords = array_column($this->mod->get_stopword(),'word');

		/* 2. menghapus stopword text pada inputan dan mereset index array menjadi ke 0 */
		$text_diff = array_values(array_diff($text_arr,$stopwords));
		$genre_diff = array_values(array_diff($genre_arr,$stopwords));

		/* 3. hapus duplikat text dan menggabungkan genre dengan inputan text */
		$text_diff = array_unique(array_merge($text_diff, $genre_diff));
		
		/*** Stemming ***/
		/* 1. stemming kata */
		$stemmer_factory = new Wamania\Snowball\StemmerFactory;
		$stemmer = $stemmer_factory->create ('english');
		$text_arr = [];
		for($i = 0; $i < count($text_diff); $i++){
			if(!empty($text_diff[$i])){
				$text = $stemmer->stem($text_diff[$i]);
				array_push($text_arr, $text);
			}
		}
		return false;
		$data_anime = [];
		$anime_combine = [];
		foreach($data_anime as $anime) {
			$score[$anime['title']] = $this->calculate_cosine($text_arr, $anime_combine[$anime['title']]);
		}

		echo "Sorted result similarity:\n";
		print_r($score);
	}

	function clean($string) {
		$replace_dot = str_replace('.', '', $string);
		return preg_replace('/[^a-zA-Z ]/s', '', $replace_dot); // Removes special chars.
	}

	public function calculate_cosine($target, $data){
		$count_target = count($target);
		$count_data = count($data);

		$count_same_array = count(array_intersect($target,$data));

		return $count_same_array / (sqrt($count_target * $count_data));
	}

	public function scraping(){
		$dom = new PHPHtmlParser\Dom;
		$html = new Sunra\PhpSimple\HtmlDomParser;
	}
}
