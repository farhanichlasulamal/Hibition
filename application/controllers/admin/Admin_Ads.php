<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Ads extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ads_model");
		$this->load->helper(array('form', 'url'));
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

	public function updateAds(){
		$config['upload_path'] = './assets/images/ads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar') ){
			$data = array(
				'prioritas' => $this->input->post('prioritas'),
			    'link_ads' => $this->input->post('link')
			);
			$this->kategori_model->updateKategori($this->input->post('id'),$data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Prioritas dan link berhasil diperbarui. ");
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
			    'prioritas' => $this->input->post('prioritas'),
			    'link_ads' => $this->input->post('link'),
			    'gambar_ads' => $img
			);
			$this->ads_model->updateAds($this->input->post('id'),$data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil diperbarui.");
		}
	    
	    $this->load->library('user_agent');
	    $refer =  $this->agent->referrer();
	    redirect($refer);	
	}

	public function insertAds(){
		$config['upload_path'] = './assets/images/ads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar') ){
			$this->session->set_flashdata('error', "<strong>Failed!</strong> Data tidak berhasil dimasukkan. ".$this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
			    'prioritas' => $this->input->post('prioritas'),
			    'link_ads' => $this->input->post('link'),
			    'gambar_ads' => $img
			);
			$this->ads_model->insertAds($data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil dimasukkan.");
		}
	    
	    $this->load->library('user_agent');
	    $refer =  $this->agent->referrer();
	    redirect($refer);
	}

}

/* End of file Ads.php */
/* Location: ./application/controllers/admin/Ads.php */