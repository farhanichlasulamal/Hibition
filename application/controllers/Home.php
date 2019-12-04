<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("artikel_model");
		$this->load->model("tips_model");
		$this->load->model("kategori_model");
	}

	public function index()
	{
		$data['artikel'] = $this->artikel_model->getNewestArtikelandCategory(6);
		$data['tips'] = $this->tips_model->getRecentTips(5);
		$this->load->view('home',$data);
	}
}
