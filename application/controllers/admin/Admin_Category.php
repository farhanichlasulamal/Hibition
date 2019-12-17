<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("kategori_model");
	}

	public function index(){
		$data['item'] = $this->kategori_model->getKategoriForAdmin();
		$this->load->view('admin/category', $data);
	}

	public function deleteCategory(){
		$id = $this->input->post('id');
	    $found = $this->kategori_model->getDivisionAccount($id);
	    $data = "";
	    if(isset($found)){
	      $this->session->set_flashdata('error', "<strong>Failed!</strong> Data tidak berhasil dihapus, terdapat karyawan yang bekerja pada divisi tersebut.");
	    } else {
	      $data = $this->kategori_model->delete($id);
	      $this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil dihapus.");
	    }
	    echo json_encode($data);
	}

	public function updateCategory(){
	    $data = array(
	      'id_divisi' => $this->input->post('id');
	      'nama_divisi' => $this->input->post('nama'),
	      'gambar_kategori'
	    );

	    $this->kategori_model->update($id, $data);
	    $this->session->set_flashdata('success', "<strong>Success!</strong> Data berhasil diperbarui.");
	    $this->load->library('user_agent');
	    $refer =  $this->agent->referrer();
	    redirect($refer);



	    $config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1500';
		$config['max_height']  = '1500';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "<script>alert('upload berhasil!');</script>";
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
				'namamenu' => $this->input->post('NamaMenu'),
				'harga' => $this->input->post('Harga'),
				'jenis' => $this->input->post('JenisMenu'),
				'gambar' => $img
			);
			$this->toko_model->insertMenu($this->session->tenantid,$data);
		}
	}

	public function getCategory(){
		$id = $this->input->post('id');
	    $data = $this->kategori_model->getKategoriByIdArray($id);
	    echo json_encode($data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */