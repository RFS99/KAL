<?php defined('BASEPATH') or exit("No direct script access allowed");

class AuthModel extends CI_Model
{
	function check_userExist($email = "")
	{
		$this->db->select("
			id,
			avatar,
			fullname,
			email,
			password,
			user_type,
			user_status
		");
		$this->db->where("email", $email);
		$this->db->from("admin");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function verify_user($user_id = "", $token = "")
	{
		$this->db->select("
			id,
			avatar,
			fullname,
			email,
			password,
			user_type,
			user_status,
			valid_until
		");
		$this->db->where("user_id", $user_id);
		$this->db->where("token", $token);
		$this->db->from("user_activations a");
		$this->db->join("admin b", "a.user_id = b.id", "left");
		$this->db->limit(1);
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function search_user($user_id = "")
	{
		$this->db->select("
			id,
			avatar,
			fullname,
			email,
			password,
			user_type,
			user_status
		");
		$this->db->where("is_active", "0");
		$this->db->where("id", $user_id);
		$this->db->from("admin");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function search_user_byEmail($email = "")
	{
		$this->db->select("
			id,
			avatar,
			fullname,
			email,
			password,
			user_type,
			user_status
		");
		$this->db->where("is_active", "0");
		$this->db->where("email", $email);
		$this->db->from("admin");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function insertid($table, $data)
	{
		$this->db->insert($table, $data);
		$id = $this->db->insert_id();
		return $id;
	}

	function insert($table, $data)
	{
		$this->db->insert($table, $data);
	}

	function update($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
