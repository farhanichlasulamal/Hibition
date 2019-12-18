<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$data['item'] = $this->kategori_model->getKategoriForAdmin();
		$this->load->view('admin/category', $data);
	}

	public function getCategory(){
		$id = $this->input->post('id');
	    $data = $this->kategori_model->getKategoriByIdArray($id);
	    echo json_encode($data);
	}

	public function deleteCategory(){
		$id = $this->input->post('id');
      	$data = $this->kategori_model->deleteKategori($id);
      	$this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil dihapus.");
	    echo json_encode($data);
	}

	public function updateCategory(){
		$config['upload_path'] = './assets/images/category/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar') ){
			$data = array(
				'nama_kategori' => $this->input->post('nama')
			);
			$this->kategori_model->updateKategori($this->input->post('id'),$data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Nama berhasil diperbarui. ");
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
			    'nama_kategori' => $this->input->post('nama'),
			    'gambar_kategori' => $img
			);
			$this->kategori_model->updateKategori($this->input->post('id'),$data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Nama dan gambar berhasil diperbarui.");
		}
	    
	    $this->load->library('user_agent');
	    $refer =  $this->agent->referrer();
	    redirect($refer);	
	}

	public function insertCategory(){
		$config['upload_path'] = './assets/images/category/';
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
			    'nama_kategori' => $this->input->post('nama'),
			    'gambar_kategori' => $img
			);
			$this->kategori_model->insertKategori($data);
			$this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil dimasukkan.");
		}
	    
	    $this->load->library('user_agent');
	    $refer =  $this->agent->referrer();
	    redirect($refer);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */