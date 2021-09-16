<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lomba extends CI_Controller
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
        $data["data_lomba"] = $this->User->getAllLomba($id);

        $data['title'] = "Pendaftaran Lomba";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/lomba/index', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }


    public function detailomba($id)
    {
        // $this->load->view('welcome');
        $data["data_lomba"] = $this->User->getLombaById($id);
        $data['title'] = "Lomba";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/lomba/detailomba', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }
}
