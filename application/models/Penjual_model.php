<?php


class Penjual_model extends CI_Model
{


    public function getSaldo()
    {
        $this->db->select('*');
        $this->db->from('admin_saldo_kepeng');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function keranjang()
    {
        $this->db->select('*');
        $this->db->join('tenant_produk', 'tenant_produk.id_produk=tenant_keranjang.id_produk');
        $this->db->from('tenant_keranjang');
        $this->db->where('is_checkout', 0);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function list_checkout()
    {
        $this->db->select('*');
        $this->db->from('tenant_checkout');
        $query = $this->db->get()->result_array();
        return $query;
    }

    function createRandomPassword()
    {


        $pass = "Dyouth-Tenant-Checkout-" . uniqid();

        return $pass;
    }

    public function checkout()
    {
        $data = [
            "kode_transaksi" => $this->input->post("kode", true),
            "total" => $this->input->post("total", true),
            "checkout_qr" => $this->input->post("kode", true),
        ];

        $this->qr_tenant($this->input->post('kode', TRUE));

        $this->db->insert('tenant_checkout', $data);

        $dataa = $this->keranjang();

        for ($i = 0; $i < count($dataa); $i++) {
            $data2 = [
                "kode_transaksi" => $this->input->post("kode", true),
                "is_checkout" => 1,
            ];


            $this->db->where('id_keranjang', $dataa[$i]["id_keranjang"]);
            $this->db->update('tenant_keranjang', $data2);
        }

        return 1;
    }



    function qr_tenant($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'qr/checkout-tenant/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'qr/checkout-tenant/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }
}
