<?php defined('BASEPATH') or exit("No direct script access allowed");


class DashModel extends CI_Model
{

    #Ranking TOPSIS
    public function getTopsisRank()
    {
        $this->db->order_by("nilai_topsis", "desc");

        return $this->db->get('topsis_rank')->result_array();
    }

    #Toko Ikan
    public function getToko()
    {

        return $this->db->get('toko_ikan')->result_array();
    }


    public function getDefault()
    {

        return $this->db->get('default_ikan')->result_array();
    }

    public function getInputCS()
    {

        return $this->db->get('input_ikan_cs')->result_array();
    }
}
