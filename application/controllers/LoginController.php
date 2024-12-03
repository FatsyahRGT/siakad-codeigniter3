<?php

// LoginController adalah controller yang mengatur proses login pengguna.
class LoginController extends CI_Controller {

    // Konstruktor untuk memuat model, helper, dan library yang dibutuhkan.
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login'); // Memuat model M_Login untuk memproses login
        $this->load->helper(['url', 'form']); // Memuat helper untuk URL dan form
        $this->load->library('form_validation'); // Memuat library untuk validasi form
    }

    // Fungsi index adalah method yang dijalankan ketika mengakses URL 'Admin/login'
    public function index()
    {
        // Cek apakah pengguna sudah login (jika sudah, redirect ke dashboard)
        if ($this->session->userdata('email')) {
            redirect('Admin/dashboard');  // Arahkan ke dashboard jika sudah login
        }

        // Menampilkan halaman login
        $this->load->view('auth/login');
    }

    // Fungsi login_aksi adalah method untuk memproses login ketika user mengirimkan data login
    public function login_aksi()
{
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    if (empty($email) || empty($password)) {
        $this->session->set_flashdata('error', 'Email dan Password tidak boleh kosong.');
        redirect('Admin/login');
    }

    $user = $this->M_Login->cek_login_by_email($email);

    if ($user) {
        if (password_verify($password, $user->password)) {
            $this->session->set_userdata('email', $user->email);
            $this->session->set_userdata('username', $user->username);
            redirect('Admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Password salah.');
            redirect('Admin/login');
        }
    } else {
        $this->session->set_flashdata('error', 'Email tidak ditemukan.');
        redirect('Admin/login');
    }
}


    // Fungsi logout untuk menghapus session dan mengarahkan kembali ke halaman login
    public function logout()
    {
        // Menghapus semua data session
        $this->session->sess_destroy();

        // Redirect ke halaman login
        redirect('login');
    }
}
