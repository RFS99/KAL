<?php defined('BASEPATH') or exit("No direct script access allowed");

class UserController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->result['status'] 	= "failed";
		$this->result['message'] 	= "";
		$this->result['data']	 	= [];
		$this->load->model("UserModel", "mod");
		$this->load->model('DashModel');
	}

	function hasLogin()
	{
		return $this->session->userdata("pish-session");
	}

	#Halaman Dashboard user
	function index()
	{
		if (!$this->hasLogin()) redirect("login");

		 /** JS **/
		 $data['js'] = [
            base_url("assets/js/list-ikan")
        ];
		$user_id = @$this->hasLogin()->id;

		$data['title'] = "Dashboard";
		$data['page'] = "user/dashboard";
		$data['topsis_rank'] = $this->DashModel->getTopsisRank();
		$data['toko_ikan'] = $this->DashModel->getToko();
		$data['input_ikan_cs'] = $this->DashModel->getInputCS($user_id);

		$this->load->view("user/main-content", $data);
	}

	#Halaman List Ikan
	function index_ikan()
	{
		if (!$this->hasLogin()) redirect("login");

		$user_id = @$this->hasLogin()->id;
		$data['title'] = "List Ikan";
		$data['page'] = "user/list-ikan";
		$data['list_ikan'] = $this->DashModel->getInputCS($user_id);

		$this->load->view("user/main-content", $data);
	}

	#Halaman Detail List Ikan
	function index_detail_ikan()
	{
		if (!$this->hasLogin()) redirect("login");

		$input_cs_id = 0;
		if ( $_GET ){
            $input_cs_id    = $this->input->get("id");
        }

		$data['title'] = "Detail Rekomendasi";
		$data['page'] = "user/detail-ikan";
		$data['input_ikan_cs'] = $this->DashModel->getDetailInputCS($input_cs_id);
		$data['rekomendasi_ikan'] = $this->DashModel->getRekomendasiCs($input_cs_id);

		$this->load->view("user/main-content", $data);
	}


	function index_profile()
	{
		if (!$this->hasLogin()) redirect("login");

		/** CSS **/
		$data['css'] = [
			base_url("assets/css/profile.css")
		];

		$user_id = @$this->hasLogin()->id;

		$data['user']	= $this->mod->search_user($user_id);
		$data['title'] 	= "Profile";
		$data['page'] 	= "user/profile";

		$this->load->view("user/main-content", $data);
	}

	function inputCS()
	{
		$keterangan  	= $this->input->post("keterangan") ?? '';
		$suhu  	= $this->input->post("suhu") ?? '';
		$ph 	= $this->input->post("ph") ?? '';
		$do 	= $this->input->post("do") ?? '';

		$data_ikan = $this->DashModel->getDefault();

		if( empty($keterangan) ){
			$this->result['message'] = "Keterangan tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}
		if( empty($suhu) ){
			$this->result['message'] = "Temperatur tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}
		if( empty($ph) ){
			$this->result['message'] = "Tingkat PH Air tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}
		if( empty($do) ){
			$this->result['message'] = "Kadar Oksigen Air tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}

		$perbandingan_suhuAir 	= [];
		$perbandingan_ph		= [];
		$perbandingan_do		= [];

		/* Menghitung perbandingan suhu, ph, do */
		foreach ($data_ikan as $row) {
			/* Menghitung perbandingan suhu */
			$hasil_bagi_suhu = 0;
			$selish_akhir_suhu = 0;
			
			$hasil_bagi_suhu = @$row['suhuAir'] / $suhu;
			if ($hasil_bagi_suhu < 1) {
				$selish_akhir_suhu = 1 - $hasil_bagi_suhu;
			}
			if ($hasil_bagi_suhu > 1) {
				$selish_akhir_suhu = $hasil_bagi_suhu - 1;
			}

			array_push($perbandingan_suhuAir, [
				"id"			=> @$row['id'],
				"nama_ikan"		=> @$row['nama_ikan'],
				"hasil_bagi"	=> $selish_akhir_suhu,
				"jenis"			=> 'suhu'
			]);

			/* Menghitung perbandingan Tingkat PH */
			$hasil_bagi_ph = 0;
			$selish_akhir_ph = 0;

			$hasil_bagi_ph = @$row['tingkatPH'] / $ph;
			if ($hasil_bagi_ph < 1) {
				$selish_akhir_ph = 1 - $hasil_bagi_ph;
			}
			if ($hasil_bagi_ph > 1) {
				$selish_akhir_ph = $hasil_bagi_ph - 1;
			}

			array_push($perbandingan_ph, [
				"id"			=> @$row['id'],
				"nama_ikan"		=> @$row['nama_ikan'],
				"hasil_bagi"	=> $selish_akhir_ph,
				"jenis"			=> 'ph'
			]);

			/* Menghitung perbandingan Kadar Oksigen */
			$hasil_bagi_do = 0;
			$selish_akhir_do = 0;

			$hasil_bagi_do = @$row['kadarOksigen'] / $do;
			if ($hasil_bagi_do < 1) {
				$selish_akhir_do = 1 - $hasil_bagi_do;
			}
			if ($hasil_bagi_do > 1) {
				$selish_akhir_do = $hasil_bagi_do - 1;
			}

			array_push($perbandingan_do, [
				"id"			=> @$row['id'],
				"nama_ikan"		=> @$row['nama_ikan'],
				"hasil_bagi"	=> $selish_akhir_do,
				"jenis"			=> 'do'
			]);
		}

		/* Sorting hasil perbandingan Suhu Air dari terkecil ke terbesar */
		usort($perbandingan_suhuAir, function ($one, $two) {
			if ($one['hasil_bagi'] === $two['hasil_bagi']) {
				return 0;
			}
			return $one['hasil_bagi'] < $two['hasil_bagi'] ? -1 : 1;
		});

		/* Sorting hasil perbandingan PH dari terkecil ke terbesar */
		usort($perbandingan_ph, function ($one, $two) {
			if ($one['hasil_bagi'] === $two['hasil_bagi']) {
				return 0;
			}
			return $one['hasil_bagi'] < $two['hasil_bagi'] ? -1 : 1;
		});

		/* Sorting hasil perbandingan DO dari terkecil ke terbesar */
		usort($perbandingan_do, function ($one, $two) {
			if ($one['hasil_bagi'] === $two['hasil_bagi']) {
				return 0;
			}
			return $one['hasil_bagi'] < $two['hasil_bagi'] ? -1 : 1;
		});


		/* memberi nilai perbandingan suhu sesuai urutan */
		foreach ($perbandingan_suhuAir as $key => $value) {
			$perbandingan_suhuAir[$key]['nilai'] = $key;
		}

		/* memberi nilai perbandingan ph sesuai urutan */
		foreach ($perbandingan_ph as $key => $value) {
			$perbandingan_ph[$key]['nilai'] = $key;
		}

		/* memberi nilai perbandingan do sesuai urutan */
		foreach ($perbandingan_do as $key => $value) {
			$perbandingan_do[$key]['nilai'] = $key;
		}

		/* menggabungkan semua array untuk mencari ranking */
		$data_ikan = [];

		foreach ($perbandingan_suhuAir as $row){
			$temp_array = [];
			$total_nilai = 0;
			$nilai_suhu = 0;
			$nilai_ph 	= 0;
			$nilai_do	= 0;

			$temp_array = [
				"id"				=> @$row['id'],
				"nama_ikan"			=> @$row['nama_ikan'],
				"hasil_bagi_suhu"	=> @$row['hasil_bagi'],
				"nilai_suhu"		=> @$row['nilai']
			];
			$nilai_suhu = @$row['nilai'];

			/* cari nilai PH */
			foreach ($perbandingan_ph as $row_ph){
				if($row['id'] === $row_ph['id']){
					$temp_array['hasil_bagi_ph'] = @$row_ph['hasil_bagi'];
					$temp_array['nilai_ph']	= @$row_ph['nilai'];

					$nilai_ph = @$row_ph['nilai'];
				}
			}

			/* cari nilai DO */
			foreach ($perbandingan_do as $row_do){
				if($row['id'] === $row_do['id']){
					$temp_array['hasil_bagi_do'] = @$row_do['hasil_bagi'];
					$temp_array['nilai_do']	= @$row_do['nilai'];

					$nilai_do = @$row_do['nilai'];
				}
			}

			/* Menjumlahkan nilai suhu, ph, do */
			$total_nilai = $nilai_suhu + $nilai_ph + $nilai_do;
			$temp_array['total_nilai']	= $total_nilai;

			array_push($data_ikan, $temp_array);

		}

		/* Sorting hasil penjumlahan nilai dari terbesar ke terkecil */
		usort($data_ikan, function ($one, $two) {
			if ($one['total_nilai'] === $two['total_nilai']) {
				return 0;
			}
			return $one['total_nilai'] > $two['total_nilai'] ? -1 : 1;
		});

		$data_input_cs = [
			"keterangan"		=> $keterangan,
			"suhu_air"			=> $suhu,
			"tingkat_ph"		=> $ph,
			"kadar_oksigen"		=> $do,
			"user_id"			=> @$this->hasLogin()->id
		];
		$input_cs_id = $this->mod->insertid('input_ikan_cs', $data_input_cs);

		/* Insert data ke input_get_rekomendasi */
		$data_input_rekomendasi = [];
		foreach ($data_ikan as $row){
			$temp = [];
			$temp = [
				"default_ikan_id"				=> @$row['id'],
				"input_ikan_cs_id"				=> @$input_cs_id,
				"hasil_perbandingan_suhuair"	=> @$row['hasil_bagi_suhu'],
				"nilai_ranking_suhu"			=> @$row['nilai_suhu'],
				"hasil_perbandingan_tingkatph"	=> @$row['hasil_bagi_ph'],
				"nilai_ranking_ph"				=> @$row['nilai_ph'],
				"hasil_perbandingan_kadaroksigen"	=> @$row['hasil_bagi_do'],
				"nilai_ranking_kadaroksigen"	=> @$row['nilai_do'],
				"total_nilai"					=> @$row['total_nilai']
			];

			$this->mod->insert('input_get_rekomendasi', $temp);
		}
		
		$this->result['status']  = "done";
		$this->result['message'] = "Berhasil menyimpan data.";
        $this->result['input_cs_id'] = $input_cs_id;
        echo json_encode($this->result);
        exit;
	}
}