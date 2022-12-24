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
		$this->load->helper('url');
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

		$genre = $this->mod->genre_list();
		$studio = $this->mod->studio_list();

		$data['genre_list'] = (!$genre) ? [] : array_chunk($genre, 9);
		$data['studio_list'] = (!$studio) ? [] : array_chunk($studio, 9);
		$data['is_session']	= $is_session;
		$data['user_type']	= $user_type;
		$data['animerec'] = $this->mod->data_anime();


		$this->load->view('Home', $data);
	}


	public function animerec()
	{
		$data['animes'] = $this->mod->data_anime()->result();

		$this->load->view('Home', $data);
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

	public function search()
	{
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
		$text_arr = explode(" ", $clean_text);
		$genre_arr = explode(" ", $clean_genre);

		/*** filtering (stopword removal) ***/
		/* 1. mengambil text stopword */
		$stopwords = array_column($this->mod->get_stopword(), 'word');

		/* 2. menghapus stopword text pada inputan dan mereset index array menjadi ke 0 */
		$text_diff = array_values(array_diff($text_arr, $stopwords));
		$genre_diff = array_values(array_diff($genre_arr, $stopwords));

		/* 3. hapus duplikat text dan menggabungkan genre dengan inputan text */
		$text_diff = array_unique(array_merge($text_diff, $genre_diff));

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
		return false;
		$data_anime = [];
		$anime_combine = [];
		foreach ($data_anime as $anime) {
			$score[$anime['title']] = $this->calculate_cosine($text_arr, $anime_combine[$anime['title']]);
		}

		echo "Sorted result similarity:\n";
		print_r($score);
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

	public function scraping()
	{
		/* Jika List Anime Sudah Ada */
		$list = $this->mod->anime_list();
		if ($list) {
			$this->result['status']  = "done";
			$this->result['message'] = "Berhasil memuat data.";
			echo json_encode($this->result);
			exit;
		}

		$domClass = new PHPHtmlParser\Dom;
		$domClass->loadFromFile(FCPATH . 'assets/Summer 2022 - Anime - MyAnimeList.net.html');

		$contents = $domClass->find('body');

		$data = [];
		/* Scraping Data dan masukkan ke dalam array */
		foreach ($contents->find('div.js-anime-category-producer') as $val) {
			$domClass->loadStr($val);
			/* Judul */
			$en = $domClass->find('div.title-text h3.h3_anime_subtitle')[0];
			$jp = $domClass->find('div.title-text h2.h2_anime_title a')[0];

			$title = "";
			if (!empty($en)) {
				$title = @$en->text;
			} else {
				$title = @$jp->text;
			}

			/* Deskripsi / Sinopsis */
			$detailDom = $domClass->find('div.synopsis.js-synopsis');
			$descDom = $detailDom->find('p.preline')[0];
			$description = @$descDom->text;

			/* Release Date */
			$releaseDom = $domClass->find('div.info span.item')[0];
			$release = @$releaseDom->text;

			/* Genre */
			$genreArr = [];
			$studioArr = [];
			$genreDom = $domClass->find('div.genres.js-genre');
			foreach ($genreDom->find('.genres-inner.js-genre-inner span.genre') as $gnr) {
				$domClass->loadStr($gnr);
				if (!empty($gnr)) {
					$g = $domClass->find('a');
					$genreText = $g->text;
					array_push($genreArr, $genreText);
				}
			}
			/* Theme */
			$propDom = $detailDom->find('.properties');
			foreach ($propDom->find('div.property') as $detail) {
				$domClass->loadStr($detail);
				$captioDom = $domClass->find('div.property span.caption');
				$captionText = @$captioDom->text;

				if (!empty($captionText)) {
					/* Studio */
					if (strtolower($captionText) == 'studio' || strtolower($captionText) == 'studios') {
						foreach ($domClass->find('div.property span.item') as $std) {
							$domClass->loadStr($std);
							$studioEmpty = @$std->text;

							$studio = "";
							if (empty($studioEmpty)) {
								$studioDom = $domClass->find('a');
								$studioText = @$studioDom->text;
								$studio = $studioText;
							} else {
								$studio = $studioEmpty;
							}
							array_push($studioArr, $studio);
						}
					} else if (strtolower($captionText) == 'theme' || strtolower($captionText) == 'themes') {
						foreach ($domClass->find('div.property span.item') as $thm) {
							$domClass->loadStr($thm);
							$themeEmpty = @$thm->text;

							$theme = "";
							if (empty($themeEmpty)) {
								$themeDom = $domClass->find('a');
								$themeText = @$themeDom->text;
								$theme = $themeText;
							}
							array_push($genreArr, $theme);
						}
					}
				}
			}

			/* Insert ke dalam array */
			$anime = [
				"title" => $title,
				"description" => $description,
				"release_date" => $release,
				"studio" => $studioArr,
				"genre" => $genreArr
			];
			array_push($data, $anime);
		}

		/* Masukkan ke Dalam Database */
		for ($i = 0; $i < count($data); $i++) {
			$data_anime = [
				"title" => @$data[$i]["title"],
				"description" => @$data[$i]["description"],
				"realesed_date" => @$data[$i]["release_date"],
				"created_at" => date("Y-m-d H:i:s")
			];

			$id = $this->mod->insertid("animes", $data_anime);

			$genre = @$data[$i]["genre"] ?? [];
			$studio = @$data[$i]["studio"] ?? [];

			/* Insert Genre */
			for ($g = 0; $g < count($genre); $g++) {
				$genre_id = $this->mod->check_genre_id($genre[$g]);
				$detail_genre["anime_id"] = $id;
				if ($genre_id) {
					$detail_genre["genre_id"] = @$genre_id[0]->id;
				} else {
					$insert_genre = [
						"title" => $genre[$g],
						"created_at" => date("Y-m-d H:i:s")
					];
					$genre_id = $this->mod->insertid("genres", $insert_genre);
					$detail_genre["genre_id"] = $genre_id;
				}
				$this->mod->insert("anime_genre_details", $detail_genre);
			}

			/* Insert Studio */
			for ($s = 0; $s < count($studio); $s++) {
				$studio_id = $this->mod->check_studio_id($studio[$s]);
				$detail_studio["anime_id"] = $id;
				if ($studio_id) {
					$detail_studio["studio_id"] = @$studio_id[0]->id;
				} else {
					$insert_studio = [
						"title" => $studio[$s],
						"created_at" => date("Y-m-d H:i:s")
					];
					$studio_id = $this->mod->insertid("studios", $insert_studio);
					$detail_studio["studio_id"] = $studio_id;
				}
				$this->mod->insert("anime_studio_details", $detail_studio);
			}
		}

		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil memuat data.";
		echo json_encode($this->result);
		exit;
	}
}
