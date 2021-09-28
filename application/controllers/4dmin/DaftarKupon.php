<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarKupon extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kupon_model', "kupon");
        $this->load->library('form_validation');
        $role = $this->session->userdata("role");

        if ($role == NULL) {
            redirect('4dmin/');
        }
    }

    public function index()
    {
        $data['title'] = "D'Youth Fest";
        $data['kupon'] = $this->kupon->getAllKupon();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebar');
        $this->load->view('templates2/navbar');
        $this->load->view('admin/kupon/index', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }

    public function addKupon()
    {

        $data['title'] = "D'Youth Fest - Halaman Login";

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('tatacara', 'tatacara', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'callback_file_check');


        $target_path = '././assets/img/kupon/';
        $config['upload_path'] = $target_path;
        $this->load->library('upload', $config);


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebar');
            $this->load->view('templates2/navbar');
            $this->load->view('admin/kupon/addkupon', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {
            $gambar     = $_FILES["gambar"];
            $namagambar = $gambar["name"];
            $tmpgambar  = $gambar["tmp_name"];

            $target_path = '././assets/img/kupon/';

            $ekstensigambar = explode('.', $namagambar);
            $ekstensigambar = strtolower(end($ekstensigambar));
            $namafileBaru = uniqid();
            $r = $namafileBaru . "." . $ekstensigambar;
            move_uploaded_file($tmpgambar, $target_path . $r);
            $y = $namafileBaru . "." . $ekstensigambar;

            $this->kupon->addKupon($y);
            $this->session->set_flashdata('flash', 'ditambahkan');
            $this->session->set_flashdata('color', 'success');
            redirect('4dmin/daftarkupon');
        }
    }


    public function updateKupon($id)
    {

        $data['title'] = "D'Youth Fest - Halaman Login";
        $data['kupon'] = $this->kupon->getKuponById($id);
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('tatacara', 'tatacara', 'required');
        if ($data["kupon"]["gambar"] == "") {
            $this->form_validation->set_rules('gambar', 'gambar', 'callback_file_check');
        }

        $target_path = '././assets/img/kupon/';
        $config['upload_path'] = $target_path;
        $this->load->library('upload', $config);


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebar');
            $this->load->view('templates2/navbar');
            $this->load->view('admin/kupon/updatekupon', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {

            if ($_FILES["gambar"]["name"] == null) {
                $y = $data["kupon"]["gambar"];
                // var_dump($y);
                // die;
                $this->kupon->addKupon($y);
                $this->session->set_flashdata('flash', 'ditambahkan');
                $this->session->set_flashdata('color', 'success');
                redirect('4dmin/daftarkupon');
            } else {
                $gambar     = $_FILES["gambar"];
                $namagambar = $gambar["name"];
                $tmpgambar  = $gambar["tmp_name"];

                unlink('assets/img/kupon/' . $data["kupon"]["gambar"]);

                $target_path = '././assets/img/kupon/';

                $ekstensigambar = explode('.', $namagambar);
                $ekstensigambar = strtolower(end($ekstensigambar));
                $namafileBaru = uniqid();
                $r = $namafileBaru . "." . $ekstensigambar;
                move_uploaded_file($tmpgambar, $target_path . $r);
                $y = $namafileBaru . "." . $ekstensigambar;

                $this->kupon->updateKupon($y);
                $this->session->set_flashdata('flash', 'ditambahkan');
                $this->session->set_flashdata('color', 'success');
                redirect('4dmin/daftarkupon');
            }
        }
    }



    public function deleteKupon($id)
    {
        $data['kupon'] = $this->kupon->getKuponById($id);
        unlink('assets/img/kupon/' . $data["kupon"]["gambar"]);
        $delete = $this->db->delete('admin_kupon', ['id_kupon' => $id]);

        if ($delete) {

            $this->session->set_flashdata('flash', 'deleted');
            $this->session->set_flashdata('color', 'danger');
            redirect('4dmin/daftarkupon');
        }
    }








    public function file_check()
    {

        $tipe = array('jpg', 'png');
        $namafile = $_FILES['gambar']['name'];
        $tipegambar = explode('.', $namafile);
        $ukuran = $_FILES['gambar']['size'];
        $tipegambar = strtolower(end($tipegambar));


        if ($_FILES['gambar']['name'] != '') {
            if ($ukuran > 2000000) {
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
