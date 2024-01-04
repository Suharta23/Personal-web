<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Majors extends CI_Controller
{
    private $api;
    public function index()
    {
        $this->load->helper('api');
        $endPoint = envStrapi() . "/api/majors";
        $response = getData($endPoint);
        $data = [
            'title' => 'Majors',
            'base_url' => envStrapi(),
            'data' => $response
        ];
        $this->template->load('layouts/page_layout', 'majors', $data);
    }

    public function detail($id)
    {
        $this->load->helper('api');
        $endPoint = envStrapi() . "/api/majors/" . $id;
        $response = getData($endPoint);
        $data = [
            'title' => 'Majors',
            'base_url' => envStrapi(),
            'data' => $response
        ];
        $this->template->load('layouts/page_layout', 'major', $data);
    }
}
