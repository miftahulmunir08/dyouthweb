<?php


class Auth_model extends CI_Model
{

    public function addUser($datagambar)
    {

        $otp   = rand(1000, 2000);
        $phone = $this->input->post('phone', TRUE);
        $convert = $this->hp($phone);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sender.helinium.net/api/wa/kirim',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'type=text&nomor=' . $convert . '&pesan=D`YouthFest- JANGAN MEMBERITAHU KODE RAHASIA INI KE SIAPAPUN termasuk pihak D`Youth. WASPADA TERHADAP KASUS PENIPUAN! KODE RAHASIA untuk masuk ' . "*" . $otp . "*",
            CURLOPT_HTTPHEADER => array(
                'token: 319839b0-5d8b-4a33-a8f6-cce269a06435',
                'Content-Type: application/x-www-form-urlencoded',
                'Accept-Charset: '
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        $response_status = $response->code;
        // var_dump($response_status);
        // die;

        $this->qr($this->input->post('email', TRUE));
        $kode_qr = $this->input->post('email', true) . ".png";



        if ($response_status == 200) {
            $data =
                [
                    "customer_gelang" => $kode_qr,
                    "customer_name" => $this->input->post('name',  TRUE),
                    "customer_password"    => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                    "customer_gender"      => $this->input->post('sex',   TRUE),
                    "customer_otp"         => $otp,
                    "customer_user_pin"    => "",
                    "customer_born"        => $this->input->post('date',  TRUE),
                    "customer_category"    => $this->input->post('type',   TRUE),
                    "customer_cell"        => $phone,
                    "customer_email"       => $this->input->post('email', TRUE),
                    "customer_saldo"       => 0,
                    "customer_status"      => "OUT",
                    "customer_address"     => "Indonesia",
                    "kode_qr"              => $kode_qr,
                    "is_active"            => 0,
                    "photo_id"             => $datagambar["img"],
                    "photo_profile"        => "",
                ];

            // var_dump($data);
            // die;

            date_default_timezone_set('Asia/Makassar');
            $startTime = date("Y-m-d H:i:s");
            $cenvertedTime = date('M d, Y H:i:s', strtotime('+5 minutes', strtotime($startTime)));

            $this->db->insert('customers', $data);
            $insert_id = $this->db->insert_id();

            $sementara = [
                "date" => $cenvertedTime,
                "id" => $insert_id
            ];


            $this->session->set_flashdata('flash', 'Kode telah terkirim ,Silahkan cek Kode Otp diWhatsapp anda');
            $this->session->set_flashdata('color', 'success');

            $this->session->set_userdata($sementara);
            return 1;
        } else {
            $this->session->set_flashdata('flash', 'Maaf Saat ini layanan OTP tidak tersedia');
            $this->session->set_flashdata('color', 'danger');
            return 0;
        }
    }


    public function verifOtp()
    {
        $id = $this->session->userdata('id');
        $otp = $this->input->post('satu', TRUE);
        $unity = implode("", $otp);
        // var_dump($id);
        // $unity = 1600;

        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('customer_id', $id);
        $this->db->where('customer_otp', $unity);
        $result = $this->db->get()->row_array();

        // var_dump($result);
        // die;

        $data_user = [
            "user" => $result["customer_name"],
        ];

        // var_dump($id);
        // die;
        if ($result) {
            $this->session->set_userdata($data_user);
            $data =
                [
                    "is_active"         => 1,
                ];

            $this->db->where('customer_id', $id);
            $this->db->update('customers', $data);
            return 1;
        } else {
            return 0;
        }

        // var_dump($query);
        // die;

    }

    public function resendOtp($id)
    {

        $data_user = $this->db->get_where('customers', ['customer_id' => $id])->row_array();
        $telpon_user = $data_user["customer_cell"];
        $convert = $this->hp($telpon_user);
        $otp   = rand(1000, 2000);
        $status = $this->sendMessage($convert, $otp);
        $status = json_decode($status);

        // var_dump($data_user);
        // die;

        if ($status->code == 200) {

            $data =
                [
                    "customer_otp"         => $otp,
                ];

            $this->db->where('customer_id', $id);
            $this->db->update('customers', $data);

            date_default_timezone_set('Asia/Makassar');
            $startTime = date("Y-m-d H:i:s");
            $cenvertedTime = date('M d, Y H:i:s', strtotime('+5 minutes', strtotime($startTime)));

            $sementara = [
                "date" => $cenvertedTime,
                "id" => $id
            ];


            // var_dump($sementara);
            // die;
            $this->session->set_flashdata('flash', 'Kode telah terkirim ,Silahkan cek Kode Otp diWhatsapp anda');
            $this->session->set_flashdata('color', 'success');
            $this->session->set_userdata($sementara);
            return 1;
        } else {
            $this->session->set_flashdata('flash', 'Maaf Saat ini layanan OTP tidak tersedia');
            $this->session->set_flashdata('color', 'danger');
            return 0;
        }
    }

    public function hp($nohp)
    {
        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")", "", $nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".", "", $nohp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nohp), 0, 3) == '62') {
                $hp = trim($nohp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($nohp), 0, 1) == '0') {
                $hp = '62' . substr(trim($nohp), 1);
            }
        }
        return $hp;
    }

    public function sendMessage($nohp, $otp)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sender.helinium.net/api/wa/kirim',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'type=text&nomor=' . $nohp . '&pesan=D`YouthFest- JANGAN MEMBERITAHU KODE RAHASIA INI KE SIAPAPUN termasuk pihak D`Youth. WASPADA TERHADAP KASUS PENIPUAN! KODE RAHASIA untuk masuk ' . "*" . $otp . "*",
            CURLOPT_HTTPHEADER => array(
                'token: 319839b0-5d8b-4a33-a8f6-cce269a06435',
                'Content-Type: application/x-www-form-urlencoded',
                'Accept-Charset: '
            ),
        ));



        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }


    function qr($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'qr/user/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'qr/user/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }



    function qr_user($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'qr/user/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'qr/user/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }
}
