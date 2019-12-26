<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('account_model');
	}

	public function index() {
		if(!$this->session->hibition_logged_in){
			$this->load->view('login_page');
		} else {
			redirect('admin/Dashboard');
		}
	}

	public function checkAccount() {
		$id = $this->security->xss_clean($this->input->post('IdKaryawan'));
  		$pass = $this->security->xss_clean($this->input->post('PasswordKaryawan'));
		$result = $this->account_model->getAccount($id,$pass);

		if (isset($result)) {
			$sess = array (
				'hibition_id_karyawan' => $result->id_karyawan,
				'hibition_nama' => $result->nama,
				'hibition_prioritas' => $result->prioritas,
				'hibition_logged_in' => true
			);
			$this->session->set_userdata($sess);
			redirect('admin/Dashboard');
		} else {
			$this->session->set_flashdata("error", "Login tidak berhasil.");
	  		$this->load->library('user_agent');
			$refer =  $this->agent->referrer();
	    	redirect($refer);
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}

}
