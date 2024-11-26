<?php

class LoginController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login'); // Memuat model login
    }

    public function index()
    {
        // Menampilkan halaman login
        $this->load->view('auth/login');
    }

    public function login_aksi()
    {
        // Mendapatkan data dari input form
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Memvalidasi inputan email dan password
        if (empty($email) || empty($password)) {
            $this->session->set_flashdata('error', 'Email dan Password tidak boleh kosong.');
            redirect('login');
        }

        // Memanggil model untuk memeriksa login berdasarkan email
        $user = $this->M_Login->cek_login_by_email($email);

        // Jika pengguna ditemukan
        if ($user) {
            // Memeriksa apakah password yang dimasukkan sesuai dengan yang ada di database
            if (password_verify($password, $user->password)) {
                // Cek apakah akun diblokir
                if ($user->blokir == 1) {
                    $this->session->set_flashdata('error', 'Akun Anda diblokir!');
                    redirect('login');
                }

                // Menyimpan data pengguna ke dalam session
                $this->session->set_userdata('id', $user->id);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('email', $user->email);
                $this->session->set_userdata('level', $user->level);
                $this->session->set_userdata('password', $user->password);

                // Redirect ke halaman dashboard atau halaman lainnya
                redirect('dashboard');
            } else {
                // Jika password salah
                $this->session->set_flashdata('error', 'Password salah.');
                redirect('login');
            }
        } else {
            // Jika email tidak ditemukan
            $this->session->set_flashdata('error', 'Email tidak ditemukan.');
            redirect('login');
        }
    }

    public function logout()
    {
        // Menghapus session ketika logout
        $this->session->sess_destroy();
        redirect('login');
    }
}
