<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->view('welcome');
        // var_dump($_POST);
        // die;
        $data['title'] = "D'Youth Fest";
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates2/auth_footer');
        // $this->load->view('templates/auth_footer');
    }

    public function login()
    {
        // $this->load->view('welcome');

        $data['title'] = "D'Youth Fest - Halaman Login";

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates2/auth_footer');
        } else {

            // var_dump($_POST);
            // die;
            $this->_login();
        }
    }

    public function _login()
    {
        // var_dump($_POST);
        // die;
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $user = $this->db->get_where('admin_table', ['username' => $username])->row_array();

        // var_dump($_POST);
        // die;

        if ($user) {
            if ($password == $user['password']) {

                echo "ada disini";
                die;
            } else {
                echo "tidak ada disini";
                die;
            }
        } else {
            echo "tidak ada admin disini";
            die;
        }
    }
}
