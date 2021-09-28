<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'User');
        $this->load->library('form_validation');

        $role = $this->session->userdata("id");

        if ($role == NULL) {
            redirect('Auth');
        }
    }

    public function index()
    {
        // $this->load->view('welcome');

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "Pengaturan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/scan/index', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }
}
