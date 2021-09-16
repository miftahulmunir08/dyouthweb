<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coming_soon extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $role = $this->session->userdata("id");

        if ($role == NULL) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['title'] = "D'Youth Fest";
        $this->load->view('templates/header', $data);
        $this->load->view('coming_soon/index', $data);
        $this->load->view('templates/footer');
    }
}
