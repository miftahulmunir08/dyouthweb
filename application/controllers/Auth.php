<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');

        // $user = $this->session->userdata("id");
        // if ($user != NULL) {
        //     redirect('Homepage');
        // }

    }

    public function index()
    {
        // $this->load->view('welcome');
        $data['title'] = "D'Youth Fest";
        $this->load->view('templates/headerauth', $data);
        $this->load->view('templates/sidebar2');
        $this->load->view('templates/floatingbutton');
        $this->load->view('auth/index', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        // $this->load->view('welcome');

        $data['title'] = "D'Youth Fest - Halaman Login";

        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/headerauth', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footerauth');
        } else {
            // echo "sudah disini";
            // die;
            $this->_login();
        }
    }

    public function _login()
    {
        // var_dump($_POST);
        // die;
        $username = $this->input->post("email");
        $password = $this->input->post("password");
        $user = $this->db->get_where('customers', ['customer_email' => $username])->row_array();

        // var_dump($user);
        // die;

        if ($user) {

            if (password_verify($password, $user['customer_password'])) {


                if ($user['is_active'] == 0) {
                    $data = [
                        'name' => $user['customer_name'],
                        'id' => $user['customer_id'],
                    ];

                    $this->session->set_userdata($data);

                    $this->resend();
                    redirect('Auth/otp');
                } else {

                    if ($user['customer_user_pin'] == "") {
                        $data = [
                            'name' => $user['customer_name'],
                            'id' => $user['customer_id'],
                        ];

                        $this->session->set_userdata($data);
                        redirect('Auth/setting_pin');
                    }

                    $data = [
                        'name' => $user['customer_name'],
                        'id' => $user['customer_id'],
                    ];

                    $this->session->set_userdata($data);
                    redirect('Homepage');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Is not valid</div>');
                redirect('Auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar</div>');
            redirect('Auth/login');
        }
    }


    public function register()
    {
        // $this->load->view('welcome');

        $data['title'] = "D'Youth Fest - Halaman register";

        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('phone', 'telepon', 'required');
        $this->form_validation->set_rules('sex', 'Gender', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.customer_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        $date = $this->input->post('date');
        // $date = str_replace("world", "Peter", "Hello world!");
        if ($this->input->post()) {
            $date = str_replace("-", "", $date);
            if (preg_match("/[a-z]/i", $date)) {
                $this->form_validation->set_rules('date', 'Tanggal', 'required|numeric');
            } else {
                $this->form_validation->set_rules('date', 'Tanggal', 'required');
            }
        }


        $this->form_validation->set_rules('id', 'No ID', 'required|min_length[8]');
        $this->form_validation->set_rules('img', 'Gambar', 'callback_file_check');
        $data["sex"] = ["Laki", "Perempuan"];
        $data["category"] = ["Umum", "Siswa", "Mahasiswa"];


        $target_path = '././assets/img/user/';
        $config['upload_path'] = $target_path;
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/headerauth', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('templates/footerauth');
            $this->load->view('templates/footer');
        } else {
            // echo "sudah sampai disini";
            // die;
            // var_dump($_POST);
            // var_dump($_FILES);
            // die;

            $gambar         = $_FILES["img"];
            $namagambar     = $gambar["name"];
            $tmpgambar      = $gambar["tmp_name"];

            $ekstensigambar = explode('.', $namagambar);
            $ekstensigambar = strtolower(end($ekstensigambar));
            $namafileBaru   = uniqid();
            $newname        = $namafileBaru . "." . $ekstensigambar;
            move_uploaded_file($tmpgambar, $target_path . $newname);
            $namabarufinal  = $namafileBaru . "." . $ekstensigambar;

            $datagambar = [
                'img' => $namabarufinal,
            ];
            // var_dump($datagambar);
            // die;
            $add = $this->Auth_model->addUser($datagambar);

            if ($add == 1) {
                redirect('auth/otp');
            } else {
                $this->session->flashdata('error');
                redirect('auth/register');
            }
        }
    }


    public function otp()
    {
        // $this->load->view('welcome');

        // $this->session->flashdata('date');
        $date = $this->session->userdata('date');
        $id = $this->session->userdata('id');
        // var_dump($date);
        // var_dump($id);
        $data['title'] = "D'Youth Fest";
        $this->form_validation->set_rules('satu[]', 'OTP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/otp', $data);
            $this->load->view('templates/footerauth');
        } else {
            $result = $this->Auth_model->verifOtp();

            if ($result > 0) {
                redirect('Auth/otp_ok');
            } else {
                $this->session->set_flashdata('flash', 'Maaf Kode OTP Salah !! Mohon Isi Dengan Benar');
                $this->session->set_flashdata('color', 'danger');
                redirect('auth/otp');
            }
        }
    }

    public function otp_ok()
    {
        $data['title'] = "D'Youth Fest";
        $this->load->view('templates/headerauth', $data);
        $this->load->view('auth/otp_congratulation', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footerauth');
    }


    public function resend()
    {

        $id = $this->session->userdata('id');
        $this->Auth_model->resendOtp($id);
        redirect('auth/otp');
    }

    public function setting_pin()
    {
        $this->form_validation->set_rules('kode[]', 'kode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates/headerauth', $data);
            $this->load->view('auth/setting_pin', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footerauth');
        } else {
            $gabung = implode($this->input->post('kode', true));
            $this->session->set_userdata('kode', $gabung);
            redirect('auth/setting_pin2');
        }
    }

    public function setting_pin2()
    {
        $this->form_validation->set_rules('kode[]', 'kode', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates/headerauth', $data);
            $this->load->view('auth/setting_pin2', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footerauth');
        } else {
            $kode1 = $this->session->userdata('kode');
            $kode2 = implode("", $this->input->post('kode'));

            if ($kode1 == $kode2) {

                $id = $this->session->userdata('id');

                $this->db->set('customer_user_pin', $kode2);
                $this->db->where('customer_id', $id);
                $this->db->update('customers');

                redirect('auth/setting_pinok');
            } else {
                $this->session->set_flashdata('flash', 'Maaf Kode PIN Tidak Sama !! Mohon Isi Dengan Benar');
                $this->session->set_flashdata('color', 'danger');
                redirect('auth/setting_pin2');
            }
            // var_dump($kode2);
            // die;
        }
    }


    public function setting_pinok()
    {
        $data['title'] = "D'Youth Fest";
        $this->load->view('templates/headerauth', $data);
        $this->load->view('auth/setting_pin_ok', $data);
        $this->load->view('templates/footer');
    }

    public function welcome()
    {
        $data['title'] = "D'Youth Fest - Selamat Datang";
        $this->load->view('templates/headerauth', $data);
        $this->load->view('templates/sidebar2', $data);
        $this->load->view('auth/welcome', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footerauth');
    }


    public function file_check()
    {

        $tipe = array('jpg', 'png', 'jpeg',);
        $namafile = $_FILES['img']['name'];
        $tipegambar = explode('.', $namafile);
        $ukuran = $_FILES['img']['size'];
        $tipegambar = strtolower(end($tipegambar));


        if ($_FILES['img']['name'] != '') {
            if ($ukuran > 10000000) {
                $this->form_validation->set_message('file_check', 'Pilih Ukuran file max 10 mb');
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

    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been logged out </div>');
        redirect('Auth');
    }
}
