<?php


class Admin_lomba_model extends CI_Model
{


    public function addlomba()
    {
        $data = [
            "acara" => $this->input->post("acara", true),
            "deksripsi" => $this->input->post("deskripsi", true),
            "pendaftaran" => $this->input->post("pendaftaran", true),
            "technicalmeeting" => $this->input->post("technicalmeeting", true),
            "pelaksanaan_lomba" => $this->input->post("pelaksanaan", true),
            "link_daftar" => $this->input->post("link1", true),
            "link_lengkap" => $this->input->post("link2", true),
        ];

        return $this->db->insert('admin_lomba', $data);
    }

    public function getAllLomba()
    {
        $this->db->select('*');
        $this->db->from('admin_lomba');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
