<?php


class Kupon_model extends CI_Model
{


    public function getAllKupon()
    {
        $this->db->select('*');
        $this->db->from('admin_kupon');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getKuponById($id)
    {

        return $this->db->get_where('admin_kupon', ['id_kupon' => $id])->row_array();
    }

    public function addKupon($y)
    {

        $data = [
            "judul" => $this->input->post("judul", true),
            "sub_arti" => $this->input->post("keterangan", true),
            "tata_cara" => $this->input->post("tatacara", true),
            "gambar" => $y,
        ];

        return $this->db->insert('admin_kupon', $data);
    }

    public function updateKupon($y)
    {

        $data = [
            "judul" => $this->input->post("judul", true),
            "sub_arti" => $this->input->post("keterangan", true),
            "tata_cara" => $this->input->post("tatacara", true),
            "gambar" => $y,
        ];

        $this->db->where('id_kupon', $this->input->post('id_kupon', true));
        return $this->db->update('admin_daftar_kupon', $data);
    }

    public function getAllMember()
    {
        $this->db->select('*');
        $this->db->from('admin_daftar_kupon');
        $query = $this->db->get()->result_array();
        return $query;
    }




}
