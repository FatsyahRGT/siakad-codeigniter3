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
        // Menampilkan halaman login
        $this->load->view('auth/login');
    }

    // Fungsi login_aksi adalah method untuk memproses login ketika user mengirimkan data login
    public function login_aksi()
    {
        // Mendapatkan data input email dan password dari form login
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Validasi input: jika email atau password kosong, tampilkan pesan error dan redirect kembali ke halaman login
        if (empty($email) || empty($password)) {
            $this->session->set_flashdata('error', 'Email dan Password tidak boleh kosong.');
            redirect('Admin/login');  // Redirect ke halaman login
        }

        // Memanggil model untuk memeriksa login berdasarkan email
        $user = $this->M_Login->cek_login_by_email($email);

        // Jika user ditemukan berdasarkan email
        if ($user) {
            // Verifikasi password dengan menggunakan password_verify
            if (password_verify($password, $user->password)) {
                // Jika password cocok, simpan data session email untuk menandakan user sudah login
                $this->session->set_userdata('email', $user->email);

                // Redirect ke halaman dashboard setelah login sukses
                redirect('Admin/dashboard');
            } else {
                // Jika password salah, tampilkan pesan error dan redirect kembali ke halaman login
                $this->session->set_flashdata('error', 'Password salah.');
                redirect('Admin/login');
            }
        } else {
            // Jika email tidak ditemukan, tampilkan pesan error dan redirect kembali ke halaman login
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
