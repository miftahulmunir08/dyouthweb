<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Forgot_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "D'Youth Fest";
        $this->load->library('phpmailer_lib');

        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('forgot_password/index', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footerauth');
        } else {
            $result = $this->Forgot_model->check_email();
            // var_dump($result);
            // // die;
            if ($result == Null) {
                $this->session->set_flashdata('flash', 'Maaf Email tidak terdaftar');
                $this->session->set_flashdata('color', 'danger');
                redirect('forgot_password');
                // echo "tidak ada";
            } else {

                // echo "ada";
                $email = $this->input->post('email', true);
                $token = base64_encode(random_bytes(32));

                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];


                $this->db->insert('user_token', $user_token);



                // $token = $this->Forgot_model->make_Token();

                if ($token == Null) {
                    $this->session->set_flashdata('flash', 'Maaf Token Gagal Dibuat , Coba beberapa saat lagi');
                    $this->session->set_flashdata('color', 'danger');
                    redirect('forgot_password');
                }

                $this->load->library('phpmailer_lib');
                $mail = $this->phpmailer_lib->load();

                $mail->isSMTP();

                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'munirrmiftahul94@gmail.com';
                $mail->Password = 'cmhvvwlqbobeulvy';
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;

                $mail->setFrom('munirrmiftahul94@gmail.com', 'D`Youth Fest');

                $mail->addReplyTo($email, 'duniawi');

                $mail->addAddress($email);

                $mail->Subject = 'Konfirmasi Email Dan Reset Password';

                $mail->isHTML(true);

                $mailContent = 'Click this link to change your account password : <a href="' . base_url() . 'forgot_password/create_New?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>';

                $mail->Body = $mailContent;

                if (!$mail->send()) {
                    $this->session->set_flashdata('flash', 'Maaf Email Gagal Dikirim , Coba beberapa saat lagi');
                    $this->session->set_flashdata('color', 'danger');
                } else {
                    $this->session->set_flashdata('flash', 'Konfirmasi Ganti Password Berhasil dikirim , Silahkan Cek email');
                    $this->session->set_flashdata('color', 'success');
                }
                redirect('forgot_password');
            }
        }
    }


    public function create_New()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $data  = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($data) {
            $user_token  = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('flash', 'Reset Password Gagal , Token Salah/Expired');
                $this->session->set_flashdata('color', 'danger');
                redirect('forgot_password');
            }
        } else {
            $this->session->set_flashdata('flash', 'Reset Password Gagal , Email Salah');
            $this->session->set_flashdata('color', 'danger');
            redirect('forgot_password');
        }
    }

    public function changePassword()
    {

        if (!$this->session->userdata('reset_email')) {
            redirect('Auth');
        }


        $data['title'] = "D'Youth Fest";

        $this->form_validation->set_rules('password1', 'password1', 'trim|required|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'password2', 'trim|required|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('forgot_password/changePassword', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/footerauth');
        } else {
            // echo "sudah sampai disini";
            // die;
            $password1 = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password1);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('flash', 'Reset Password Berhasil');
            $this->session->set_flashdata('color', 'success');
            redirect('forgot_password');
        }
    }
}
