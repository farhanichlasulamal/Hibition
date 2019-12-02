<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getArtikel($id){
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id);
		$this->db->join('account', 'account.id_karyawan = artikel.id_penulis');
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

	public function getArtikelByKategori($id_cat,$number,$offset){
		$this->db->where('id_kategori_artikel', $id_cat);
		$this->db->join('account', 'account.id_karyawan = artikel.id_penulis');
		return $this->db->get('artikel',$number,$offset)->result();
	}

	public function countArticle(){
		return $this->db->get('artikel')->num_rows();
	}

}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */