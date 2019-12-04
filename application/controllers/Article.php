<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("artikel_model");
		$this->load->model("step_model");
		$this->load->model("kategori_model");
	}

	public function index()
	{
		
	}

	public function show_article($id){
		$data['artikel'] = $this->artikel_model->getArtikel($id);
		$data['step'] = $this->step_model->getStep($id);
		$data['category'] = $this->kategori_model->getKategoriAndAmount();
		$data['recent_artikel'] = $this->artikel_model->getNewestArtikel(4);
		$this->load->view('article', $data);
	}

}