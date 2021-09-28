<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjual_model', "penjual");
        $this->load->library('form_validation');

        $role = $this->session->userdata("role");

        if ($role == NULL) {
            redirect('4dmin/');
        }
    }

    public function index()
    {
        // $this->load->view('welcome');
        // var_dump($_POST);
        // die;

        $data['title'] = "D'Youth Fest";
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebartenant');
        $this->load->view('templates2/navbar');
        $this->load->view('penjual/produk', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }


    public function keranjang()
    {
        $data['title'] = "D'Youth Fest";
        $data["data_keranjang"] = $this->penjual->keranjang();
        $data["kode"] = $this->penjual->createRandomPassword();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebartenant');
        $this->load->view('templates2/navbar');
        $this->load->view('penjual/keranjang', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }

    public function tambahkeranjang()
    {
        $data = [
            "id_produk" => $this->input->post("id", true),
            "harga" => $this->input->post("harga", true),
        ];

        $this->db->insert('tenant_keranjang', $data);

        $this->session->set_flashdata('flash', 'Produk Berhasil masuk dikeranjang');
        $this->session->set_flashdata('color', 'success');
        redirect('penjual/dashboard');
    }

    public function list_checkout()
    {
        $data['title'] = "D'Youth Fest";
        $data["data_checkout"] = $this->penjual->list_checkout();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebartenant');
        $this->load->view('templates2/navbar');
        $this->load->view('penjual/checkout', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }


    public function checkout()
    {
        $this->penjual->checkout();
        $this->session->set_flashdata('flash', 'Produk Berhasil masuk dicheckout Silahkan meunjukkan QRcode');
        $this->session->set_flashdata('color', 'success');
        redirect('penjual/dashboard');
    }
}
