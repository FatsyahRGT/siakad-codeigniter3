<?php

class DashboardController extends CI_Controller {

    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect('Admin/login');
        }

        // Ambil data username dari session supaya bisa dilempar ke view ketika login sebagai siapa
        $data['username'] = $this->session->userdata('username');

        // Memuat tampilan header, sidebar, dan footer
        $this->load->view('app/header', $data);  
        $this->load->view('app/sidebar', $data); 
        $this->load->view('dashboard', $data);  
        $this->load->view('app/footer', $data);  
    }
}

