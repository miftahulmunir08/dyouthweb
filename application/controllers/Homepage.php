<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'User');

        $user = $this->session->userdata("id");

        if ($user == NULL) {
            redirect('Auth');
        } else {
            $data_user = $this->User->getDataHome($user);
            if ($data_user == NULL) {
                redirect('Auth');
            }
        }
    }

    public function index()
    {
        // $this->load->view('welcome');
        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_lomba"] = $this->User->getAllLomba();
        // var_dump($id);
        // die;
        $data['title'] = "beranda";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }
}
