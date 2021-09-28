<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Changer_model', "changer");
        $this->load->library('form_validation');

        $role = $this->session->userdata("role");

        // if ($role == NULL) {
        //     redirect('4dmin/');
        // }
    }

    public function index()
    {
        // $this->load->view('welcome');
        // var_dump($_POST);
        // die;

        $data['title'] = "D'Youth Fest";
        $data['saldo'] = $this->changer->getSaldo();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebarchanger');
        $this->load->view('templates2/navbar');
        $this->load->view('changer/saldo', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }

    public function topup()
    {
        // $this->load->view('welcome');
        // var_dump($_POST);
        // die;

        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        $this->form_validation->set_rules('nominal', 'nominal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebarchanger');
            $this->load->view('templates2/navbar');
            $this->load->view('changer/topup', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {
            $this->changer->topup();
            $this->session->set_flashdata('flash', 'berhasil Masuk');
            $this->session->set_flashdata('color', 'success');
            redirect('Changer/Dashboard/topup');
        }
    }

    public function withdraw()
    {
        // $this->load->view('welcome');
        // var_dump($_POST);
        // die;

        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        $this->form_validation->set_rules('nominal', 'nominal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebarchanger');
            $this->load->view('templates2/navbar');
            $this->load->view('changer/withdraw', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {
            $this->changer->withdraw();
            $this->session->set_flashdata('flash', 'berhasil diwithdraw');
            $this->session->set_flashdata('color', 'success');
            redirect('Changer/Dashboard/withdraw');
        }
    }

    public function riwayat()
    {
        $data['title'] = "D'Youth Fest";
        $data['riwayat'] = $this->changer->riwayat();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebarchanger');
        $this->load->view('templates2/navbar');
        $this->load->view('changer/riwayat', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }
}
