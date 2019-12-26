<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertMessage($data) {
		return $this->db->insert('pesan', $data);
	}
}

/* End of file message_model.php */
/* Location: ./application/models/message_model.php */