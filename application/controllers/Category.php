<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("kategori_model");
	}

	public function index()
	{
		$this->show_categories();
	}

	public function show_categories(){
		$data['item'] = $this->kategori_model->getKategori();
		$this->load->view('category', $data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */