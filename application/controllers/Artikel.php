<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		
	}

	private function checkSession() {
		if(!$this->session->logged_in) {
			redirect('login');
		}
		if($this->session->id_divisi != SDM_ID) {
			redirect('dashboard');
		}
	}

}