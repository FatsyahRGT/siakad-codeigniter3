<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/login');
        // $this->load->view('app/header');         
        // $this->load->view('app/sidebar');        
        // $this->load->view('dashboard'); 
        // $this->load->view('app/footer');         
    }
    
    public function registration()
    {
        $this->load->view('auth/registration');
        // $this->load->view('app/header');         
        // $this->load->view('app/sidebar');        
        // $this->load->view('dashboard'); 
        // $this->load->view('app/footer');              
    }
} 