<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('account_model');
	}

	public function index()
	{
		
	}

	public function checkAccount() {
		$id = $this->security->xss_clean($this->input->post('id_karyawan'));
  		$pass = $this->security->xss_clean($this->input->post('password'));
		$result = $this->account_model->getAccount($id,$pass);

		if (isset($result)) {
			$sess = array (
				'id_karyawan' => $result->id_karyawan,
				'nama' => $result->nama,
				'prioritas' => $result->prioritas,
				'logged_in' => true
			);
			$this->session->set_userdata($sess);
			redirect('Dashboard');
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
