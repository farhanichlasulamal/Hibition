<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAds(){
		$this->db->from('ads');
		return $this->db->get()->result();
	}

	public function insertAds($data) {
		return $this->db->insert('ads', $data);
	}

	public function updateAds($id, $data) {
		$this->db->where('id_ads', $id);
		return $this->db->update('ads', $data);
	}

	public function deleteAds($id) {
		$this->db->where('id_ads', $id);
		return $this->db->delete('ads');
	}

	public function getAdsByPriority($prio){
		$this->db->from('ads');
		$this->db->where('prioritas', $prio);
		return $this->db->get()->row();
	}

	public function getAdsById($id){
		$this->db->from('ads');
		$this->db->where('id_ads', $id);
		return $this->db->get()->row_array();
	}
}

/* End of file ads_model.php */
/* Location: ./application/models/ads_model.php */