<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ads_model");
	}

	public function index(){
		$data['ads2'] = $this->ads_model->getAdsByPriority(2);
		$this->load->view('about', $data);
	}

}