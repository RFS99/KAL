<?php defined('BASEPATH') or exit("No direct script access allowed");

class HomeModel extends CI_Model
{

	public function data_animegenre()
	{
		$this->db->select('*');
		$this->db->from('anime_genre_details');
		$this->db->join('genres', ' genres.id = anime_genre_details.genre_id');
		$query = $this->db->get();
		return $query;
	}

	public function data_animestudio()
	{
		$this->db->select('*');
		$this->db->from('anime_studio_details');
		$this->db->join('studios', ' studios.id = anime_studio_details.studio_id');
		$query = $this->db->get();
		return $query;
	}



	public function data_anime()
	{
		$this->db->select('*');
		$this->db->from('animes');
		$this->db->join(
			'anime_studio_details',
			' anime_studio_details.anime_id = animes.id',
		);
		$this->db->join(
			'anime_genre_details',
			' anime_genre_details.anime_id = animes.id',
			'LEFT'
		);
		$this->db->join(
			'genres',
			'genres.id = anime_genre_details.genre_id',
			'LEFT'
		);
		$this->db->join(
			'studios',
			' studios.id = anime_studio_details.studio_id',
			'LEFT'
		);
		$data_animes = $this->db->get();
		return $data_animes->result_array();
	}

	public function data_genre()
	{
		$this->db->select('*');
		$this->db->from('genres');
		$query = $this->db->get();
		return $query;
	}

	public function data_studio()
	{
		$this->db->select('*');
		$this->db->from('studios');
		$query = $this->db->get();
		return $query;
	}

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

	function anime_list()
	{
		$this->db->select("*");
		$this->db->from("animes");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function genre_list()
	{
		$this->db->select("*");
		$this->db->from("genres");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function studio_list()
	{
		$this->db->select("*");
		$this->db->from("studios");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}
}