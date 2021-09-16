<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalAcara2 extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_acara_model', "acara");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "D'Youth Fest";
        $data['lomba'] = $this->acara->getAllAcara();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebar');
        $this->load->view('templates2/navbar');
        $this->load->view('admin/acara2/index', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }

    public function addacara()
    {
        $data['title'] = "D'Youth Fest - Halaman Acara";
        $this->form_validation->set_rules('acara', 'acara', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebar');
            $this->load->view('templates2/navbar');
            $this->load->view('admin/acara2/addacara', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {
            $this->acara->addAcara();
            $this->session->set_flashdata('flash', 'ditambahkan');
            $this->session->set_flashdata('color', 'success');
            redirect('4dmin/DaftarAcara');
        }
    }

    // public function updateacara()
    // {
    //     $data['title'] = "D'Youth Fest";
    //     // $data['kupon'] = $this->acara->getAllKupon();
    //     $this->load->view('templates2/auth_header', $data);
    //     $this->load->view('templates2/sidebar');
    //     $this->load->view('templates2/navbar');
    //     $this->load->view('admin/acara/updateacara', $data);
    //     $this->load->view('templates2/footer');
    //     $this->load->view('templates2/auth_footer');
    // }

    // public function deleteacara()
    // {
    //     $data['title'] = "D'Youth Fest";
    //     // $data['kupon'] = $this->acara->getAllKupon();
    //     $this->load->view('templates2/auth_header', $data);
    //     $this->load->view('templates2/sidebar');
    //     $this->load->view('templates2/navbar');
    //     $this->load->view('admin/acara/updateacara', $data);
    //     $this->load->view('templates2/footer');
    //     $this->load->view('templates2/auth_footer');
    // }
}
