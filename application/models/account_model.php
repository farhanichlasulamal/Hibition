<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAccount($id,$pass){
		$this->db->from('account');
		$this->db->where('id_karyawan', $id);
		$this->db->where('password', md5($pass));
		return $this->db->get()->row();
	}

	public function insertAccount($data) {
		return $this->db->insert('account', $data);
	}

	public function updateAccount($id, $data) {
		$this->db->where('id_karyawan', $id);
		return $this->db->update('account', $data);
	}

	public function deleteAccount($id) {
		$this->db->where('id_karyawan', $id);
		return $this->db->delete('account');
	}

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */