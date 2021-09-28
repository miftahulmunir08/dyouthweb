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
        $data["saldo"] = $this->User->saldo($id);
        $data["riwayat"] = $this->User->riwayat($id);

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

        if ($_GET['id']) {
            $id = $_GET['id'];
            $data['title'] = "Buy";
            $data['keranjang'] = $this->User->getKeranjang($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/dompet/buy', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        } else {

            $data['title'] = "Buy";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/dompet/buy', $data);
            $this->load->view('templates/navbottom');
            $this->load->view('templates/footer');
        }
    }


    public function konfirmasi_order()
    {

        $id = $this->session->userdata('id');
        $data["data_user"] = $this->User->getDataHome($id);
        $user = $this->User->getDataHome($id);
        $data['title'] = "D'Youth Fest";
        $data['jml'] = $this->input->post('jumlah');
        $this->session->set_userdata('jml', $this->input->post('jumlah'));

        $this->form_validation->set_rules('kode[]', 'kode', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/headerauth', $data);
            $this->load->view('templates/notification', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/dompet/konfirmasi_pin', $data);
            $this->load->view('templates/navbottom');
            // $this->load->view('templates/footerauth');
            $this->load->view('templates/footer');
        } else {


            $result = $this->User->cek_pin();

            if ($result["status_pin"] == 0) {
                $this->session->set_flashdata('flash', 'Pin Salah');
                $this->session->set_flashdata('color', 'danger');
                redirect('Dompet/konfirmasi_order');
            } else {
                if ($result["saldo"] < 0) {
                    $this->session->set_flashdata('flash', 'Saldo Tidak Cukup');
                    $this->session->set_flashdata('color', 'danger');
                    redirect('Dompet/konfirmasi_order');
                } else {



                    $data = [
                        "id_gelang" => $user["customer_gelang"],
                        "jumlah" => $this->input->post('jml'),
                        "nama_pelanggan"  => $user["customer_name"],
                        "wallet_type" => "Buy",
                    ];
                    // $user[""];

                    // var_dump($data);
                    // die;

                    $this->db->insert('wallet', $data);


                    $data['saldo'] = $result["saldo"];
                    $this->load->view('templates/headerauth', $data);
                    $this->load->view('templates/notification', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('user/dompet/konfirmasi_ok', $data);
                    $this->load->view('templates/navbottom');
                    // $this->load->view('templates/footerauth');
                    $this->load->view('templates/footer');
                }
            }

            // var_dump($result);
            // die;
        }
    }

    public function DaftarTransaksi()
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["riwayat"] = $this->User->riwayat($id);

        $data['title'] = "Daftar Transaksi";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/notification', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dompet/daftartransaksi', $data);
        $this->load->view('templates/navbottom');
        $this->load->view('templates/footer');
    }

    public function DetailTransaksi($idtrans)
    {

        $id = $this->session->userdata("id");
        $data["data_user"] = $this->User->getDataHome($id);
        $data["detail"] = $this->User->detailtransaksi($idtrans);

        $data['title'] = "Detail Transaksi";
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
        $this->load->view('templates/headerauth', $data);
        $this->load->view('user/dompet/scan', $data);
        $this->load->view('templates/navbottom');
    }

    public function Scan1()
    {
        $email = $this->input->post('id', TRUE);
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        echo json_encode($user);
    }

    public function bayar()
    {
        $transaksi = $this->input->post('id', TRUE);
        $belanja = $this->db->get_where('order_details', ['invoice_id' => $transaksi])->row_array();
        echo json_encode($belanja);
    }

    public function cek_pin()
    {
        $pin = $this->User->cek_pin();

        if ($pin != NULL) {
            var_dump($pin);
            die;
            // $data['title'] = "Detail Transaksi";
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/notification', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('user/dompet/detailtransaksi', $data);
            // $this->load->view('templates/navbottom');
            // $this->load->view('templates/footer');
        } else {
            echo "sudah disini gagal";
            die;
        }


        // var_dump($this->input->post('kode'));
        // die;
    }
}
