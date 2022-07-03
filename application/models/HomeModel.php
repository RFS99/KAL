<?php defined('BASEPATH') OR exit("No direct script access allowed");

class HomeModel extends CI_Model{
	function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
