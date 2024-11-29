<?php

// DashboardController adalah controller yang mengatur tampilan halaman dashboard setelah login.
class DashboardController extends CI_Controller {

    // Fungsi index adalah method yang dijalankan ketika mengakses URL 'Admin/dashboard'
    public function index()
    {
        // Cek apakah user sudah login dengan memeriksa session 'email'.
        // Jika session 'email' tidak ada, maka user dianggap belum login.
        if (!$this->session->userdata('email')) {
            // Jika user belum login, redirect ke halaman login.
            // Pastikan rute 'Admin/login' sudah sesuai dengan controller login yang digunakan.
            redirect('Admin/login');
        }

        // Jika user sudah login, lanjutkan untuk menampilkan halaman dashboard.
        // Memuat tampilan header, sidebar, konten dashboard, dan footer.
        // Halaman ini akan menampilkan elemen-elemen tersebut agar menjadi tampilan lengkap.
        $this->load->view('app/header');  // Memuat tampilan header
        $this->load->view('app/sidebar'); // Memuat tampilan sidebar
        $this->load->view('dashboard');   // Memuat tampilan utama dashboard
        $this->load->view('app/footer');  // Memuat tampilan footer
    }
}
