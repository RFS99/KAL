<?php defined('BASEPATH') or exit("No direct script access allowed");


class DashModel extends CI_Model
{


    #Toko Ikan
    public function getAnime()
    {

        return $this->db->get('anime')->result_array();
    }
}
