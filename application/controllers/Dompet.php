<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dompet extends CI_Controller
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

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "Dompet";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/index', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function Topup()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "TopUp";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/topup', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function Withdraw()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "WithDraw";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/withdraw', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function Buy()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "Buy";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/buy', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function DaftarTransaksi()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "Buy";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/daftartransaksi', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function DetailTransaksi()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);

        $data['title'] = "Buy";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/detailtransaksi', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }


    public function Scan()
    {
        $data['title'] = "TopUp";
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/scan', $data);
        $this->load->view('templates/navbottom');
    }

    public function Scan1()
    {
        $email = $this->input->post('id', TRUE);
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        echo json_encode($user);
    }
}
