<?php


class User_model extends CI_Model
{


    public function getDataHome($id)
    {

        $data_user = $this->db->get_where('users', ['id' => $id])->row_array();
        // var_dump($data_user);
        // die;
        return $data_user;
    }

    public function getDataKuponUser($id)
    {
        date_default_timezone_set('Asia/Makassar');
        $datakupon = $this->db->get_where('admin_daftar_kupon', ['id_user' => $id])->result_array();

        // var_dump($datakupon);
        // die;


        for ($i = 0; $i < count($datakupon); $i++) {
            $data[] = [
                "id_user" => $datakupon[$i]["id_user"],
                "id_kupon" => $datakupon[$i]["id_daftar_kupon"],
                "kode_kupon" => $datakupon[$i]["kode_kupon"],
                "tenant"    => $datakupon[$i]["tenant"],
                "nama_tenant" => $datakupon[$i]["nama_tenant"],
                "nominal" => $datakupon[$i]["nominal"],
                "waktu" => $this->timeAgo($datakupon[$i]["created_at"]),
            ];
        }


        if ($data == NULL) {
            $data = [];
        }

        // var_dump($data);
        // die;

        return $data;
    }


    public function getDetailKupon($id)
    {
        $datakupon = $this->db->get_where('admin_daftar_kupon', ['id_daftar_kupon' => $id])->row_array();

        $data = [
            "id_user" => $datakupon["id_user"],
            "kode_kupon" => $datakupon["kode_kupon"],
            "tenant"    => $datakupon["tenant"],
            "jumlah" => $this->rupiah($datakupon["nominal"]),
            "tanggal" => $datakupon["created_at"],
            "status" => "Menunggu hasil undian"
        ];
        return $data;
    }



    public function JoinKupon($gambar)
    {

        $data = [
            "id_user" => $this->session->userdata("id"),
            "kode_kupon" => $this->input->post("kodekupon", true),
            "tenant"    => $this->input->post("jenis", true),
            "nama_tenant" => $this->input->post("tenant", true),
            "nominal" => $this->input->post("nominal", true),
            "foto" => $gambar,

        ];

        return $this->db->insert('admin_daftar_kupon', $data);
    }


    public function autokode()
    {
        $sql = "SELECT max(id_daftar_kupon) as kodeTerbesar FROM admin_daftar_kupon";
        $querycat = $this->db->query($sql);
        $cattranslate = $querycat->row_array();

        $kodeKupon = $cattranslate['kodeTerbesar'];

        $urutan = (int) substr($kodeKupon, 3, 3);

        $urutan++;


        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $huruf = "#Youth-" . substr(str_shuffle($permitted_chars), 0, 4);
        $kodeagen = $huruf . "-" . sprintf("%03s", $urutan);
        return $kodeagen;
    }


    public function getAllLomba()
    {
        $this->db->select('*');
        $this->db->from('admin_lomba');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getLombaById($id)
    {
        $datalomba = $this->db->get_where('admin_lomba', ['id_lomba' => $id])->row_array();
        return $datalomba;
    }


    public function updateProfile1()
    {
        $id = $this->session->userdata("id");
        $data =
            [
                "name"        => $this->input->post('nama',  TRUE),
                "gender"      => $this->input->post('sex', TRUE),
                "born"        => $this->input->post('born', TRUE),
                "category"   => $this->input->post('category', TRUE),
            ];

        // var_dump($data);
        // die;

        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);

        if ($result != NULL) {
            $this->session->set_flashdata('flash', 'Data Identitas Berhasil Di Update');
            $this->session->set_flashdata('color', 'success');
        } else {
            $this->session->set_flashdata('flash', 'Data Identitas Gagal Di Update');
            $this->session->set_flashdata('color', 'danger');
        }
    }

    public function updateProfile2()
    {
        $id = $this->session->userdata("id");
        $data =
            [
                "email"        => $this->input->post('email',  TRUE),
                "password"      => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            ];

        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);

        if ($result != NULL) {
            $this->session->set_flashdata('flash', 'Data Akun Berhasil Di Update');
            $this->session->set_flashdata('color', 'success');
        } else {
            $this->session->set_flashdata('flash', 'Data Akun Gagal Di Update');
            $this->session->set_flashdata('color', 'danger');
        }
    }


    public function getDataTiketUser($id)
    {
        return $this->db->get_where('users_ticket', ['id_user' => $id])->result_array();
    }



    public function Entrance()
    {
        $data = ["entrance" => "aktive", "tanggal" => $this->input->post('tanggal', true)];
        // var_dump($data);
        // die;
        return $this->session->set_userdata($data);
    }

    public function Verif_ticket()
    {
        $id = $this->session->userdata("id");
        $data = $this->getDataHome($id);
        if ($data != NULL) {
            if (password_verify($this->input->post('password', true), $data["password"])) {
                // var_dump($this->session->userdata());
                // die;
                $bar = substr(uniqid(), 7, 10);
                // var_dump($bar);
                // die;

                $this->qr_ticket("ET" . "-" . $bar);
                $kode_qr = $bar . ".png";


                $data = [
                    "tanggal" => $this->session->userdata('tanggal'),
                    "id_user" => $this->session->userdata('id'),
                    "barcode" => $kode_qr,
                    "status_ticket" => 0
                ];

                $this->session->set_userdata("barcode_tiket", $kode_qr);

                return $this->db->insert('users_ticket', $data);
            } else {
                $this->session->set_flashdata('flash', 'Harap Masukkan Password Dengan Benar');
                $this->session->set_flashdata('color', 'danger');
                redirect('akses/Verif_Entrance');
            }
        } else {
            echo "data tidak ada";
            die;
        }
    }


    public function Aktivasi_tiket()
    {
        $data = ["status" => 1];
        return $this->db->update('users_ticket', $data);
    }


    public function getTicketById($id)
    {
        return $this->db->get_where('users_ticket', ['id_ticket' => $id])->row_array();
    }





    //helper




    public function timeAgo($timeAgo)
    {

        $selisih = time() - strtotime($timeAgo);
        $detik = $selisih;
        $menit = round($selisih / 60);
        $jam = round($selisih / 3600);
        $hari = round($selisih / 86400);
        $minggu = round($selisih / 604800);
        $bulan = round($selisih / 2419200);
        $tahun = round($selisih / 29030400);
        if ($detik <= 60) {
            $waktu = $detik . ' detik yang lalu';
        } else if ($menit <= 60) {
            $waktu = $menit . ' menit yang lalu';
        } else if ($jam <= 24) {
            $waktu = $jam . ' jam yang lalu';
        } else if ($hari <= 7) {
            $waktu = $hari . ' hari yang lalu';
        } else if ($minggu <= 4) {
            $waktu = $minggu . ' minggu yang lalu';
        } else if ($bulan <= 12) {
            $waktu = $bulan . ' bulan yang lalu';
        } else {
            $waktu = $tahun . ' tahun yang lalu';
        }
        return $waktu;
    }

    public function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }

    public function tanggal()
    {

        $days = [1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", 7 => "Sunday"];
        $days = [1 => "Senin", 2 => "Selasa", 3 => "Rabu", 4 => "Kamis", 5 => "Jumat", 6 => "Sabtu", 7 => "Minggu"];
        $month = [1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "Nopember", 12 => "Desember"];

        $bulan = str_replace("0", "", date("m"));
        $hari = date("N");


        $tanggal = date("N M, d Y H:iA");
        $hari = $days[$hari];
        $bulan = $month[$bulan];
        $format = $hari . "<br>" . " " . date("d") . " " . $bulan . " " . date("Y");
        return $format;
    }


    function qr_ticket($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'qr/ticket/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'qr/ticket/' . $kodeqr . ".png";
                // $params['name'] = $kodeqr . ".png";

                return  $this->ciqrcode->generate($params);
            }
        }
    }
}
