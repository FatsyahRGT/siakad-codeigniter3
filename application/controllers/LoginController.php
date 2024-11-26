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

        // Validasi input
        if (empty($email) || empty($password)) {
            $this->session->set_flashdata('error', 'Email dan Password tidak boleh kosong.');
            redirect('login');
        }

        // Memanggil model untuk memeriksa login berdasarkan email
        $user = $this->M_Login->cek_login_by_email($email);

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user->password)) {
                // Simpan data session
                $this->session->set_userdata('id', $user->id);
                $this->session->set_userdata('email', $user->email);

                // Redirect ke dashboard
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password salah.');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Email tidak ditemukan.');
            redirect('login');
        }
    }

    public function logout()
    {
        // Hapus semua session dan redirect ke login
        $this->session->sess_destroy();
        redirect('login');
    }
}
