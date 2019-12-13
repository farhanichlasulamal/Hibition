<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Article extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/article');
	}

}

/* End of file Admin_Article.php */
/* Location: ./application/controllers/admin/Admin_Article.php */