<?php

class DashboardController extends CI_Controller {

    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect('Admin/login');
        }

        // Ambil data username dari session supaya bisa dilempar ke view ketika login sebagai siapa
        $data['username'] = $this->session->userdata('username');

        // Load model mahasiswa
        $this->load->model('M_Mahasiswa');

        // Ambil jumlah mahasiswa
        $data['jumlah_mahasiswa'] = $this->M_Mahasiswa->count_mahasiswa(); // Memanggil fungsi di model untuk mendapatkan jumlah mahasiswa

        // Memuat tampilan header, sidebar, dan footer
        $this->load->view('app/header', $data);  
        $this->load->view('app/sidebar', $data); 
        $this->load->view('dashboard', $data);  
        $this->load->view('app/footer', $data);  
    }
}
