<?php defined('BASEPATH') OR exit("No direct script access allowed");

class UserModel extends CI_Model{
	function search_user($user_id="")
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
        $this->db->from("users");
        $q = $this->db->get();
        return ($q->num_rows() == 0 ? FALSE : $q->result());
    }
	

	function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

	function update($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
