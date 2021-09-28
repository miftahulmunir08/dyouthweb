<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Engine extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'User');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->db->select('*');
        $this->db->from('users');
        $result = $this->db->get()->result_array();

        $hitung = count($result);

        for ($i = 0; $i < $hitung; $i++) {
            $result2 = [
                "customer_gelang" => $result[$i]["kode_qr"],
                "customer_name" => $result[$i]["name"],
                "customer_password" => $result[$i]["password"],
                "customer_gender" => $result[$i]["gender"],
                "customer_otp" => $result[$i]["otp"],
                "customer_user_pin" => $result[$i]["gender"],
                "customer_born" => $result[$i]["born"],
                "customer_category" => $result[$i]["category"],
                "customer_cell" => $result[$i]["cell"],
                "customer_email" => $result[$i]["email"],
                "customer_saldo" => 0,
                "customer_status" => "OUT",
                "customer_address" => "Indonesia",
                "kode_qr" => $result[$i]["kode_qr"],
                "is_active" => $result[$i]["is_active"],
                "photo_id" => $result[$i]["photo"],
                "photo_profile" => $result[$i]["photo_profile"],
            ];
            $this->db->insert('customers', $result2);
        }
        redirect('Auth/');
    }
}
