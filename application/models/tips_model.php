<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getRecentTips($limit){
		$this->db->from('tips');
		$this->db->limit($limit);
		$this->db->group_by('step.id_artikel_step'); 
		$this->db->join('step', 'step.id_step = tips.id_step_tips');
		$this->db->order_by("step.id_artikel_step", "desc");
		return $this->db->get()->result();
	}

}

/* End of file tips_model.php */
/* Location: ./application/models/tips_model.php */