<?php


class Forgot_model extends CI_Model
{


    public function check_email()
    {
        $email = $this->input->post('email', true);
        $data  = $this->db->get_where('users', ['email' => $email])->row_array();
        return $data;
        // var_dump($data);
        // die;
    }


    public function make_Token()
    {
        $token = base64_encode(random_bytes(32));
        $email = $this->input->post('email', true);

        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        return $this->db->insert('user_token', $user_token);
    }
}
