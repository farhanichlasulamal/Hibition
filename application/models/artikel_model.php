<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getArtikel($id){
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id);
		return $this->db->get()->row();
	}

	public function insertArtikel($data) {
		return $this->db->insert('artikel', $data);
	}

	public function updateArtikel($id, $data) {
		$this->db->where('id_artikel', $id);
		return $this->db->update('artikel', $data);
	}

	public function deleteArtikel($id) {
		$this->db->where('id_artikel', $id);
		return $this->db->delete('artikel');
	}

}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */