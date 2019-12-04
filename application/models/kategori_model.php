<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getKategori(){
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		return $this->db->get()->result();
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

	public function getKategoriById($id){
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		return $this->db->get()->row();
	}

	public function getKategoriAndAmount(){
		$this->db->select('kategori.*, COUNT(artikel.id_kategori_artikel) as jumlah');
		$this->db->from('kategori');
		$this->db->group_by('id_kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		$this->db->join('artikel', 'artikel.id_kategori_artikel = kategori.id_kategori', 'left outer');
		return $this->db->get()->result();
	}
}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */