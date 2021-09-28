<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', "admin");
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
        $data['admin'] = $this->admin->getAllAdmin();
        $this->load->view('templates2/auth_header', $data);
        $this->load->view('templates2/sidebar');
        $this->load->view('templates2/navbar');
        $this->load->view('admin/admin/index', $data);
        $this->load->view('templates2/footer');
        $this->load->view('templates2/auth_footer');
    }


    public function addAdmin()
    {
        $data['title'] = "D'Youth Fest - Halaman Login";

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebar');
            $this->load->view('templates2/navbar');
            $this->load->view('admin/admin/addadmin', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {

            $this->admin->addAdmin();
            $this->session->set_flashdata('flash', 'ditambahkan');
            $this->session->set_flashdata('color', 'success');
            redirect('4dmin/Admin');
        }
    }


    public function updateAdmin($id)
    {
        $data['title'] = "D'Youth Fest - Halaman Login";
        $data['admin'] = $this->admin->getAdminById($id);

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "D'Youth Fest";
            $this->load->view('templates2/auth_header', $data);
            $this->load->view('templates2/sidebar');
            $this->load->view('templates2/navbar');
            $this->load->view('admin/admin/updateadmin', $data);
            $this->load->view('templates2/footer');
            $this->load->view('templates2/auth_footer');
        } else {
            $this->admin->updateAdmin();
            $this->session->set_flashdata('flash', 'diubah');
            $this->session->set_flashdata('color', 'success');
            redirect('4dmin/Admin');
        }
    }


    public function deleteAdmin($id)
    {


        $delete = $this->db->delete('admin_table', ['id_admin' => $id]);

        if ($delete) {
            $this->session->set_flashdata('flash', 'dihapus');
            $this->session->set_flashdata('color', 'success');
            redirect('4dmin/Admin');
        }
    }
}
