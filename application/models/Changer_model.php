<?php


class Changer_model extends CI_Model
{


    public function getSaldo()
    {
        $this->db->select('*');
        $this->db->from('admin_saldo_kepeng');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function riwayat()
    {
        $this->db->select('*');
        $this->db->from('users_transaksi');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function topup()
    {
        $data = [
            "jumlah" => $this->input->post("nominal", true),
            "id_user" => $this->input->post("id_user", true),
            "status"  => "Sukses",
            "tanggal" => date("d-m-y h:i:s"),
            "kategori" => "Top Up"
        ];

        return $this->db->insert('users_transaksi', $data);
    }

    public function withdraw()
    {
        $data = [
            "jumlah" => $this->input->post("nominal", true),
            "id_user" => $this->input->post("id_user", true),
            "status"  => "Sukses",
            "tanggal" => date("d-m-y h:i:s"),
            "kategori" => "Withdraw"
        ];

        return $this->db->insert('users_transaksi', $data);
    }
}
