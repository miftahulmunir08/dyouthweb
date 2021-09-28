<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kupon extends CI_Controller
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
        // var_dump($data["data_kupon"]);
        // die;

        $data['title'] = "kupon";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/kupon/index', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }


    public function tampilKuponUser()
    {
        $data['title'] = "kupon";
        $id = $this->session->userdata("id");
        $data["data_kupon"] = $this->User->getDataKupon($id);
        $this->load->view('templates/header', $data);
        $this->load->view('user/kupon/detailkupon', $data);
        $this->load->view('templates/footer');
    }


    public function detailKupon()
    {
        $data['title'] = "kupon";
        $this->load->view('templates/header', $data);
        $this->load->view('user/kupon/detailkupon', $data);
        $this->load->view('templates/footer');
    }


    public function detailKuponById($id)
    {
        $data['title'] = "kupon";
        $data["detail_kupon"] = $this->User->getDetailKupon($id);
        $this->load->view('templates/header', $data);
        $this->load->view('user/kupon/detailkuponn', $data);
        $this->load->view('templates/footer');
    }



    public function joinKupon()
    {

        $this->form_validation->set_rules('tenant', 'tenant', 'required');
        $this->form_validation->set_rules('nominal', 'nominal', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'tgl', 'required');
        $this->form_validation->set_rules('img', 'Gambar', 'callback_file_check');

        $target_path = '././assets/img/member_kupon/';
        $config['upload_path'] = $target_path;
        $this->load->library('upload', $config);


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "kupon";
            $data['kodekupon'] = $this->User->autokode();
            $this->load->view('templates/headerauth', $data);
            $this->load->view('user/kupon/joinkupon', $data);
            $this->load->view('templates/footer');
        } else {


            $nominal = $this->input->post('nominal');

            if ((int)$nominal < 15000) {
                $this->session->set_flashdata('flash', 'Kupon Kurang dari nominal yang telah ditentukan');
                $this->session->set_flashdata('color', 'danger');
                redirect('Kupon/joinkupon');
            }


            $gambar     = $_FILES["img"];
            $namagambar = $gambar["name"];
            $tmpgambar  = $gambar["tmp_name"];

            $target_path = '././assets/img/member_kupon/';

            $ekstensigambar = explode('.', $namagambar);
            $ekstensigambar = strtolower(end($ekstensigambar));
            $namafileBaru = uniqid();
            $r = $namafileBaru . "." . $ekstensigambar;
            move_uploaded_file($tmpgambar, $target_path . $r);
            $y = $namafileBaru . "." . $ekstensigambar;

            $this->User->JoinKupon($y);
            $this->session->set_flashdata('flash', 'ditambahkan');
            $this->session->set_flashdata('color', 'success');
            redirect('kupon/kupon_ok');
        }
    }


    public function kupon_ok()
    {
        $data['title'] = "kupon";
        $this->load->view('templates/header', $data);
        $this->load->view('user/kupon/kupon_ok', $data);
        $this->load->view('templates/footer');
    }



    public function file_check()
    {

        $tipe = array('jpg', 'png');
        $namafile = $_FILES['img']['name'];
        $tipegambar = explode('.', $namafile);
        $ukuran = $_FILES['img']['size'];
        $tipegambar = strtolower(end($tipegambar));


        if ($_FILES['img']['name'] != '') {
            if ($ukuran > 5000000) {
                $this->form_validation->set_message('file_check', 'Pilih Ukuran file max 2 mb');
                return false;
            } else {
                if (in_array($tipegambar, $tipe)) {
                    return true;
                } else {
                    $this->form_validation->set_message('file_check', 'Pilih File jpg/png');
                    return false;
                }
            }
        } else {
            $this->form_validation->set_message('file_check', 'Pilih  file untuk upload');
            return false;
        }
    }
}
