<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("artikel_model");
		$this->load->model("tips_model");
		$this->load->model("kategori_model");
		$this->load->model("ads_model");
	}

	public function index(){
		if(!$this->session->hibition_logged_in){
            $data['artikel'] = $this->artikel_model->getNewestArtikelandCategory(6);
			$data['tips'] = $this->tips_model->getRecentTips(5);
			$data['ads1'] = $this->ads_model->getAdsByPriority(1);
			$data['ads2'] = $this->ads_model->getAdsByPriority(2);
			$this->load->view('home',$data);
        } else {
            redirect('admin/Dashboard');
        }
	}

	public function search(){
		$word = $this->input->post('SearchBar');
		$data['word'] = $word;
		$data['artikel'] = $this->artikel_model->getArtikelByWord($word);
		$data['ads2'] = $this->ads_model->getAdsByPriority(2);
		$this->load->view('search',$data);
	}
}
