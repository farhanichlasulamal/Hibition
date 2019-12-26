<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		
	}

	public function updatePassword() {
		if($this->input->post('change_pass')) {
			$id = $this->session->userdata('hibition_id_karyawan');

			$current_pass = $this->account_model->getCurrentPassword($id);
			$old_pass = $this->input->post('old_pass');

			$new_pass = $this->input->post('new_pass');
			$confirm_pass = $this->input->post('confirm_pass');

			//clean from white space
			$new_pass = str_replace(' ', '', $new_pass);
			$confirm_pass = str_replace(' ', '', $confirm_pass);

			if(strlen($new_pass) < 6) {
				$msg = "Password Minimal Terdiri dari 6 Karakter!";
				$this->session->set_flashdata('msg', $msg);
				redirect(base_url('account'));
			}

			//Hash password
			$old_pass = md5($old_pass);
			$new_pass = md5($new_pass);
			$confirm_pass = md5($confirm_pass);
			if($new_pass != $confirm_pass) {
				$msg = "Password Baru dan Konfirmasi Password Tidak Sama!";
				$this->session->set_flashdata('msg', $msg);
				redirect(base_url('account'));
			}
			if($old_pass != $current_pass){
				$msg = "Password Salah!";
				$this->session->set_flashdata('msg', $msg);
				redirect(base_url('account'));
			} else {
				$this->account_model->setPassword($nip, $new_pass);
				$msg = "Password Berhasil Diganti!";
				$this->session->set_flashdata('msg', $msg);
				redirect(base_url('account'));
			}
		} else {
			redirect('account');
		}
	}

}