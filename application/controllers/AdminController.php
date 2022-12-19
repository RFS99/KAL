<?php defined('BASEPATH') OR exit("No direct script access allowed");

class AdminController extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->result['status'] 	= "failed";
		$this->result['message'] 	= "";
		$this->result['data']	 	= [];
		$this->load->model("AdminModel", "mod");
	}

	function hasLogin(){
		return $this->session->userdata("pish-session");
	}

	function index()
    {
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
			redirect("/");
		}

        /** JS **/
        $data['js'] = [
            base_url("assets/js/admin/list-user")
        ];

        $data['title'] = "Dashboard";
		$data['page'] = "admin/dashboard";
		$this->load->view("admin/main-content", $data);
    }

	function index_user()
    {
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
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
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
			redirect("/");
		}

		$user_id = 0;
		if ( $_GET ){
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
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
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

	function save_user(){
		$fullname   	= $this->input->post("fullname") ?? '';
		$email 			= $this->input->post("email") ?? '';
		$user_type 		= $this->input->post("user_type") ?? '';

		if( empty($fullname) ){
			$this->result['message'] = "Nama user tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}
		if( empty($email) ){
			$this->result['message'] = "Email tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}

		if( empty($user_type) ){
			$this->result['message'] = "Tipe user tidak boleh kosong.";
            echo json_encode($this->result);
            exit;
		}

		/* Check email has been used or not */
		$check_email = $this->mod->check_userExist($email);
		if($check_email){
			if($check_email[0]->user_status == 0){
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

	function delete_account(){
		$user_id = $this->input->post("user_id");

        if( empty($user_id) ){
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
		$this->mod->update("admin", $data, ["id"=>$user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function reset_password(){
		$user_id = $this->input->post("user_id");

        if( empty($user_id) ){
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
		$this->mod->update("admin", $data, ["id"=>$user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function activation_account(){
		$user_id = $this->input->post("user_id");

        if( empty($user_id) ){
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
		$this->mod->update("admin", $data, ["id"=>$user_id]);

		$this->result['status']  = "done";
		$this->result['data'] = [];
		echo json_encode($this->result);
		exit;
	}

	function index_message()
    {
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
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
		if ( !$this->hasLogin() )redirect("login");
		$user_type = @$this->hasLogin()->user_type;
		if($user_type != 1){ /* jika yang login bukan admin*/
			redirect("/");
		}

		$msg_id = 0;
		if ( $_GET ){
            $msg_id    = $this->input->get("id");
        }
		$pesan = $this->mod->render_message($msg_id);

		/* jika pesan belum pernah dibaca */
		if(@$pesan[0]->read_at == null){
			/* rubah is_read menjadi 1 yang artinya sudah dibaca */
			$data = [
				"is_read"	=> 1,
				"read_at"   => date("Y-m-d H:i:s")
			];
			$this->mod->update("messages", $data, ["id"=>$msg_id]);
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
}