<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getKategori($id){
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		return $this->db->get()->row();
	}

	public function insertKategori($data) {
		return $this->db->insert('kategori', $data);
	}

	public function updateKategori($id, $data) {
		$this->db->where('id_kategori', $id);
		return $this->db->update('kategori', $data);
	}

	public function deleteKategori($id) {
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori');
	}

}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */