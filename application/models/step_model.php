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

	public function getStep($id){
		$this->db->from('step');
		$this->db->where('id_artikel_step', $id);
		$this->db->order_by('nomor_urut', 'ASC');
		$this->db->join('tips', 'tips.id_step_tips = step.id_step', 'left outer');
		return $this->db->get()->result();
	}

}

/* End of file step_model.php */
/* Location: ./application/models/step_model.php */