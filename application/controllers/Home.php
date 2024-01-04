<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $api;
    public function index()
    {
        $this->load->helper('api');
        $endPoint = envStrapi() . "/api/home-page";
        $response = getData($endPoint);
        $data = [
            'title' => 'Home',
            'base_url' => envStrapi(),
            'data' => $response
        ];
        $this->template->load('layouts/page_layout', 'home', $data);
    }
}
