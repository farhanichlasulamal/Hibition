<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Ads extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ads_model");
	}

	public function index(){
		$data['item'] = $this->ads_model->getAds();
		$this->load->view('admin/ads', $data);
	}

	public function getAds(){
		$id = $this->input->post('id');
	    $data = $this->ads_model->getAdsById($id);
	    echo json_encode($data);
	}

	public function deleteAds(){
		$id = $this->input->post('id');
	    $data = $this->ads_model->deleteAds($id);
	    $this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil dihapus.");
	    echo json_encode($data);
	}
}

/* End of file Ads.php */
/* Location: ./application/controllers/admin/Ads.php */