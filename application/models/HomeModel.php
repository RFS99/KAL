<?php defined('BASEPATH') OR exit("No direct script access allowed");

class HomeModel extends CI_Model{
	function check_genre_id($genre)
    {
        $this->db->select("id");
		$this->db->where("title", $genre);
		$this->db->from("genres");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
    }
	function check_studio_id($genre)
    {
        $this->db->select("id");
		$this->db->where("title", $genre);
		$this->db->from("studios");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
    }
	function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }
	function insertid($table, $data)
	{
		$this->db->insert($table, $data);
		$id = $this->db->insert_id();
		return $id;
	}
	function anime_list(){
		$this->db->select("*");
		$this->db->from("animes");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}
	function genre_list(){
		$this->db->select("*");
		$this->db->from("genres");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}
	function studio_list(){
		$this->db->select("*");
		$this->db->from("studios");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}
}
