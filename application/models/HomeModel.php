<?php defined('BASEPATH') or exit("No direct script access allowed");

class HomeModel extends CI_Model
{
	public function data_anime($anime_id)
	{
<<<<<<< HEAD
		$this->db->select($select = '*');
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

=======
		$sql = "
		SELECT 
			anm.id as anime_id,
			anm.title as anime_title,
			description,
			GROUP_CONCAT(DISTINCT gnr.title ORDER BY gnr.title) as genre_title,
			GROUP_CONCAT(DISTINCT std.title ORDER BY std.title) as studio_title
		FROM
			animes as anm
		JOIN
			anime_genre_details as gd ON FIND_IN_SET(anm.id, gd.anime_id) != 0
		JOIN
			genres as gnr ON FIND_IN_SET(gnr.id, gd.genre_id) != 0
		JOIN
			anime_studio_details as sd ON FIND_IN_SET(anm.id, sd.anime_id) != 0
		JOIN
			studios as std ON FIND_IN_SET(std.id, sd.studio_id) != 0
		WHERE
			anm.id = {$anime_id}
		";
		$sql .= "GROUP BY anm.id";

		$q = $this->db->query($sql);
		return ($q->num_rows() == 0 ? [] : $q->result());
	}
>>>>>>> d6a8f9332bac91b53d770e5d126ed70cab7a715a
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

	function check_anime_list(){
		$this->db->select("*");
		$this->db->from("animes");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}

	function anime_list($search,$genre,$studio)
	{
		$sql = "
		SELECT 
			anm.id as anime_id,
			anm.title as anime_title,
			description,
			GROUP_CONCAT(DISTINCT gnr.title ORDER BY gnr.title) as genre_title,
			GROUP_CONCAT(DISTINCT std.title ORDER BY std.title) as studio_title
		FROM
			animes as anm
		JOIN
			anime_genre_details as gd ON FIND_IN_SET(anm.id, gd.anime_id) != 0
		JOIN
			genres as gnr ON FIND_IN_SET(gnr.id, gd.genre_id) != 0
		JOIN
			anime_studio_details as sd ON FIND_IN_SET(anm.id, sd.anime_id) != 0
		JOIN
			studios as std ON FIND_IN_SET(std.id, sd.studio_id) != 0
		WHERE
			anm.title LIKE 	'%{$search}%'
		OR
			anm.description LIKE '%{$search}%'
		";
		/* GENRE */
		if(!empty($genre)){
			$genres = "'" . join("','", $genre) . "'";
			$sql .= "
				AND
					gnr.title IN ({$genres})
			";
		}

		/* STUDIO */
		if(!empty($studio)){
			$studios = "'" . join("','", $studio) . "'";
			$sql .= "
				OR
					std.title IN ({$studios})
			";
		}

		$sql .= "GROUP BY anm.id";

		$q = $this->db->query($sql);
		return ($q->num_rows() == 0 ? [] : $q->result());
	}
	function genre_detail($anime_Id){
		$this->db->select("title");
		$this->db->from("anime_genre_details gd");
		$this->db->join("genres gnr", "gnr.id = gd.genre_id");
		$this->db->where("anime_id", $anime_Id);
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? [] : $q->result());
	}
	function studio_detail($anime_Id){
		$this->db->select("title");
		$this->db->from("anime_studio_details sd");
		$this->db->join("studios sdt", "sdt.id = sd.studio_id");
		$this->db->where("anime_id", $anime_Id);
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? [] : $q->result());
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
	function get_stopword()
	{
		$this->db->select("*");
		$this->db->from("stopwords");
		$q = $this->db->get();
		return ($q->num_rows() == 0 ? FALSE : $q->result());
	}
}