<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Category extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/category');
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */