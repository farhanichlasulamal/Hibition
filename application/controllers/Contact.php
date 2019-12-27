<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('EMAIL_COMPANY', 'message.hibition@gmail.com');
define('PASS_EMAIL_COMPANY', 'farhan12345678');
define('EMAIL_CONTACT', 'contact.hibition@gmail.com');
define('PASS_EMAIL_CONTACT', 'farhan12345678');

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

	public function sendRequest(){
        $subject = $this->input->post('judul');
        $message = $this->input->post('isi');
        $recipient_name = $this->input->post('nama');
        $recipient = $this->input->post('email');

        $msg_to_contact_email = '<strong>'.$subject.'</strong><br><br>'.$message.'<br><br><small>Sender<br>'.$recipient_name.' - '.$recipient.'</small>';


        $this->sendEmail(EMAIL_CONTACT, 'Ads Request | '.$subject, $msg_to_contact_email);
        $this->sendEmail($recipient, 'no-reply | HIBITION', 'Hai '.$recipient_name.'!<br><br>Thank you for trusting Hibition website to advertise your product or service. We will immediately respond to your request.<br><br>Best regards<br>Hibition Team<br><br><br>This email is intended for '.$recipient);

        $this->session->set_flashdata('success', '<strong>Success!</strong> Pesan berhasil dikirim.');

        $this->load->library('user_agent');
        $refer =  $this->agent->referrer();
        redirect($refer);

	}

    public function sendEmail($recipient, $subject, $message){
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => EMAIL_COMPANY,  // Email gmail
            'smtp_pass'   => PASS_EMAIL_COMPANY,  // Password
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from(EMAIL_COMPANY, 'HIBITION no-reply');

        // Email penerima
        $this->email->to($recipient); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject($subject);

        // Isi email
        $this->email->message($message);

        $this->email->send();
    }
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */