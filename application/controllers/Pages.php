<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    private $api;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('api');
        $this->load->library('email');
    }
    public function index($id)
    {
        $response = getData(envstrapi() . '/api/pages/' . $id);
        if ($response['data'] == null) {
            return $this->load->view('404');
        }
        $data = [
            'title' => "Pages",
            'base_url' => envstrapi(),
            'data' => $response
        ];
        return $this->template->load('layouts/page_layout', 'pages', $data);
    }

    //------------------------------------//
    // GALLERY                           //
    //------------------------------------//
    public function gallery()
    {
        $page = $this->input->get('page') ?? 1;
        $response = getData(envstrapi() . '/api/galeries?pagination[page]=' . $page . '&pagination[pageSize]=6&populate=*');
        if ($response['data'] == null) {
            return $this->load->view('404');
        }
        $data = [
            'title' => "Gallery",
            'base_url' => envstrapi(),
            'data' => $response
        ];
        return $this->template->load('layouts/page_layout', 'galeries', $data);
    }

    //------------------------------------//
    // TEACHER                            //
    //------------------------------------//
    public function teachers()
    {
        $page     = $this->input->get('page') ?? 1;
        $response = getData(envstrapi() . '/api/teachers?pagination[page]=' . $page . '&pagination[pageSize]=6&populate=*');
        if ($response['data'] == null) {
            return $this->load->view('404');
        }
        $data = [
            'title' => "Teacher",
            'base_url' => envstrapi(),
            'data' => $response
        ];
        return $this->template->load('layouts/page_layout', 'teachers', $data);
    }

    //------------------------------------//
    // CONTACT                            //
    //------------------------------------//
    public function contact()
    {
        $response = getData(envstrapi() . '/api/contact');
        if ($response['data'] == null) {
            return $this->load->view('404');
        }
        $data = [
            'title' => "Contact",
            'base_url' => envstrapi(),
            'data' => $response
        ];
        return $this->template->load('layouts/page_layout', 'contact', $data);
    }

    public function verifyRecaptcha()
    {
        $recaptchaResponse = $this->input->post('token'); // Assuming 'token' is the name of the form field.
        $secretKey = getenv('6LexOx4jAAAAADazu5P2gE5HJ7Ybngg4lSTp6ekA');

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaResponse);
        $responseData = json_decode($verifyResponse);

        if ($responseData->success) {
            $this->sendEmail();
        } else {
            $this->output->set_status_header(400);
            $this->output->set_output(json_encode([
                'message' => 'Recaptcha verification failed. Please try again.'
            ]));
        }
    }

    public function sendEmail()
    {
        $name = $this->input->post('name');
        $from = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'topannamikaze@gmail.com';
        $config['smtp_pass'] = 'axpgdezgcnizjklp';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        // Set email content
        $this->email->from('topannamikaze@gmail.com', $name);
        $this->email->to('topanmeuren@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);


        // Send email
        if (!$this->email->send()) {
            $data = $this->email->print_debugger(['headers']);
            print_r($data);
        }
        $this->email->send();
        // Send success message
        $this->session->set_flashdata('message', 'Email berhasil dikirim');
        redirect('/kontak');
    }

    function error404()
    {
        $this->load->view('404');
    }
}
