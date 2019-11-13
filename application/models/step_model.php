<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Step_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertStep($data) {
		return $this->db->insert('step', $data);
	}

	public function updateStep($id, $data) {
		$this->db->where('id_step', $id);
		return $this->db->update('step', $data);
	}

	public function deleteStep($id) {
		$this->db->where('id_step', $id);
		return $this->db->delete('step');
	}

}

/* End of file step_model.php */
/* Location: ./application/models/step_model.php */