<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Account extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/account');
	}

}

/* End of file Admin_Account.php */
/* Location: ./application/controllers/admin/Admin_Account.php */