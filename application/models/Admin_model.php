<?php


class Admin_model extends CI_Model
{


    public function login()
    {
        echo "sudah sampai disini";
        die;
    }

    public function getAllAdmin()
    {
        $this->db->select('*');
        $this->db->from('admin_table');
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function getAdminById($id)
    {

        return $this->db->get_where('admin_table', ['id_admin' => $id])->row_array();
    }

    public function addAdmin()
    {

        $data = [
            "username" => $this->input->post("username", true),
            "password" => $this->input->post("password", true),
        ];

        return $this->db->insert('admin_table', $data);
    }

    public function updateAdmin()
    {

        $data = [
            "username" => $this->input->post("username", true),
            "password" => $this->input->post("password", true),
        ];

        $this->db->where('id_admin', $this->input->post('id_admin', true));
        return $this->db->update('admin_table', $data);
    }

}
