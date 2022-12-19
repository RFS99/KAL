<?php defined('BASEPATH') or exit("No direct script access allowed");

class AdminModel extends CI_Model
{

	function render_user($id = "")
	{
		$this->db->select("
			id,
			avatar,
			fullname,
			email,
			password,
			user_type,
			user_status,
			is_active
		");
		if (!empty($id))
			$this->db->where('id', $id);
		$this->db->from("admin");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function render_message($id = "")
	{
		$this->db->select("
			id,
			name,
			email,
			subject,
			message,
			is_read,
			created_at,
			read_at
		");
		if (!empty($id))
			$this->db->where('id', $id);
		$this->db->from("messages");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

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
