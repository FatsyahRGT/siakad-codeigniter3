<?php

class DashboardController extends CI_Controller {
    public function index()
    {
    // Cek apakah user sudah login
    if (!$this->session->userdata('username')) {
        redirect('login');  // Jika belum login, redirect ke halaman login
    }

    // Lanjutkan proses untuk menampilkan dashboard
    $this->load->view('dashboard');
    }
}
