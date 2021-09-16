<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akses extends CI_Controller
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
        $data["data_tiket"] = $this->User->getDataTiketUser($id);
        $data["tanggal"] = $this->User->tanggal();

        $data['title'] = "Akses";


        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/akses/index', $data);
        $this->load->view('templates/navbottom');
        // $this->load->view('templates/footer');
    }

    public function Entrance()
    {
        // $this->load->view('welcome');

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);
        $data["tanggal"] = $this->User->tanggal();

        $data['title'] = "Akses";

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/entrance_ticket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {
            $this->User->Entrance();
            redirect('Akses/Entrance2');
        }
    }

    public function Entrance2()
    {
        // $this->load->view('welcome');

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["data_kupon"] = $this->User->getDataKuponUser($id);


        $data['title'] = "Akses";

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/booking_ticket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {
            echo "sudah disini";
            die;
            // $this->User->Entrance();
            // redirect('forgot_password');
        }
    }

    public function Verif_Entrance()
    {
        // $this->load->view('welcome');

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);

        $data['title'] = "Akses";

        $this->form_validation->set_rules('password', 'password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/verif_ticket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {
            // echo "sudah disini";
            // die;
            $result = $this->User->Verif_ticket();
            if ($result !== NULL) {
                redirect('akses/Verif_Ok');
            } else {
                $this->session->set_flashdata('flash', 'Maaf Sedang Mengalami Gangguan Tunggu beberapa saat lagi');
                $this->session->set_flashdata('color', 'danger');
                redirect('akses/Verif_Entrance');
            }
        }
    }

    public function Verif_Ok()
    {
        $data['title'] = "Akses";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/akses/verif_ok', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function Activating_ticket()
    {

        $this->form_validation->set_rules('ok1', 'ok', 'required');
        $this->form_validation->set_rules('ok2', 'ok', 'required');
        $data['title'] = "Akses";

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/aktivasi_tiket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {
            $this->User->Aktivasi_tiket();
            redirect('akses/Lihat_ticket');
        }
    }

    public function Lihat_ticket()
    {
        $data['title'] = "Akses";

        $id = $this->input->get('id');

        if ($id == NULL) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/lihat_tiket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {
            $data['ticket'] = $this->User->getTicketById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/akses/lihat_tiket', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        }
    }
}
