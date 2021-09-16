<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_Kami extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', "User");
    }

    public function index()
    {
        $data['title'] = "D'Youth Fest - Tentang Kami";
        $data['subtitle'] = "Tentang Kami";

        $this->load->view('templates/header', $data);
        if ($this->session->userdata('id')) {
            $id = $this->session->userdata("id");
            $data["data_user"] = $this->User->getDataHome($id);
            $this->load->view('templates/sidebar', $data);
        }
        $this->load->view('templates/sidebar2');
        $this->load->view('auth/tentang-kami', $data);
        $this->load->view('templates/footer');
    }
}
