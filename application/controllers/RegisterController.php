<?php

// RegisterController adalah controller yang menangani proses registrasi pengguna baru.
class RegisterController extends CI_Controller {

    // Konstruktor untuk memuat konfigurasi, model, helper, dan library yang dibutuhkan.
    public function __construct()
    {
        parent::__construct();
        $this->config->set_item('csrf_protection', FALSE); // Menonaktifkan proteksi CSRF untuk sementara
        $this->load->model('M_Login'); // Memuat model M_Login yang digunakan untuk menyimpan data user
        $this->load->helper(['url', 'form']); // Memuat helper untuk URL dan form
        $this->load->library('form_validation'); // Memuat library untuk validasi form
    }

    // Fungsi index digunakan untuk menampilkan halaman registrasi saat mengakses URL 'RegisterController'
    public function index()
    {
        // Menampilkan halaman registrasi
        $this->load->view('auth/register');
    }

    // Fungsi register_aksi untuk memproses data yang dikirimkan dari form registrasi
    public function register_aksi()
    {
        // Validasi input form
        // Pastikan username unik di database
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        // Pastikan email valid dan unik di database
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        // Pastikan password memiliki panjang minimal 6 karakter
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        // Pastikan konfirmasi password cocok dengan password
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');

        // Jika validasi gagal, tampilkan form registrasi dengan pesan error
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            // Jika validasi berhasil, proses penyimpanan data
            $data = [
                'username' => $this->input->post('username'),  // Menyimpan username
                'email' => $this->input->post('email'),        // Menyimpan email
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) // Menyimpan password yang di-hash
            ];

            // Memanggil method insert_user di model M_Login untuk menyimpan data user ke database
            $this->M_Login->insert_user($data);

            // Set flash message untuk memberitahukan user bahwa registrasi berhasil
            $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');

            // Redirect ke halaman login setelah registrasi berhasil
            redirect('LoginController');
        }
    }
}
