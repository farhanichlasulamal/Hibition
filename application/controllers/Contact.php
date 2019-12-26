<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("ads_model");
        $this->load->model("message_model");
	}

	public function index(){
        if(!$this->session->hibition_logged_in){
            $data['ads1'] = $this->ads_model->getAdsByPriority(1);
            $data['ads2'] = $this->ads_model->getAdsByPriority(2);
            $this->load->view('contact',$data);
        } else {
            redirect('admin/Dashboard');
        }
	}

	public function sendRequest()
	{
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'judul_pesan' => $this->input->post('judul'),
            'tanggal_pesan' => date('Y-m-d H:i:s'),
            'isi_pesan' => $this->input->post('isi'),
            'nama_pengirim' => $this->input->post('nama'),
            'email_pengirim' => $this->input->post('email')
        );
        $this->message_model->insertMessage($data);
        $this->session->set_flashdata('success', "<strong>Success!</strong> Pesan berhasil terkirim.");

		$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'email@gmail.com',  // Email gmail
            'smtp_pass'   => 'passwordgmail',  // Password
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com');

        // Email penerima
        $this->email->to('penerima@domain.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */