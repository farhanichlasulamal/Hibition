<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("kategori_model");
		$this->load->model("artikel_model");
		$this->load->model("ads_model");
	}

	public function index()
	{
		if(!$this->session->hibition_logged_in){
			$this->show_categories();
		} else {
			redirect('admin/Dashboard');
		}
	}

	public function show_categories(){
		$data['item'] = $this->kategori_model->getKategori();
		$data['ads2'] = $this->ads_model->getAdsByPriority(2);
		$this->load->view('category', $data);
	}

	public function show_categories_item($id){
		$this->load->library('pagination');

		//konfigurasi pagination
		$config['base_url'] = base_url().'Category/show_categories_item/'.$id.'/';
		$config['total_rows'] = $this->artikel_model->countArticleInCategory($id);
		$config['per_page'] = 9;
		$config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //style pagination
        $config['first_link']       = '&gt;&gt;';
        $config['last_link']        = '&lt;&lt;';
        $config['next_link']        = '&gt;';
        $config['prev_link']        = '&lt;';
        $config['full_tag_open']    = '<div class="block-27"><ul>';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><span>';
        $config['cur_tag_close']    = '</span></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '<</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '</li>';


		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['item'] = $this->artikel_model->getArtikelByKategori($id,$config['per_page'],$from);
		$data['category'] = $this->kategori_model->getKategoriById($id);
		$data['pagination'] = $this->pagination->create_links();
		$data['ads2'] = $this->ads_model->getAdsByPriority(2);
		$this->load->view('category_item', $data);
	}

	public function show_categories_item_all(){
		$this->load->library('pagination');

		//konfigurasi pagination
		$config['base_url'] = base_url().'Category/show_categories_item/';
		$config['total_rows'] = $this->artikel_model->countArticle();
		$config['per_page'] = 9;
		$config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //style pagination
        $config['first_link']       = '&gt;&gt;';
        $config['last_link']        = '&lt;&lt;';
        $config['next_link']        = '&gt;';
        $config['prev_link']        = '&lt;';
        $config['full_tag_open']    = '<div class="block-27"><ul>';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><span>';
        $config['cur_tag_close']    = '</span></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '<</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '</li>';


		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['item'] = $this->artikel_model->getAllArtikel($config['per_page'],$from);
		$data['category'] = (object) array(
			'nama_kategori' => 'All Categories',
		    'gambar_kategori' => 'all.jpg',
		);
		$data['pagination'] = $this->pagination->create_links();
		$data['ads2'] = $this->ads_model->getAdsByPriority(2);
		$this->load->view('category_item', $data);
	}
	
}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */