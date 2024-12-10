<?php

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User'); // Memuat model M_User
        $this->load->library('form_validation'); // Memuat library validasi form
    }

    // Menampilkan daftar user
    public function index()
    {
        $data['user'] = $this->M_User->tampil_data()->result(); // Ambil data user dari model
        $this->load->view('app/header'); // Muat tampilan header
        $this->load->view('app/sidebar'); // Muat tampilan sidebar
        $this->load->view('user/index', $data); // Muat tampilan index user
        $this->load->view('app/footer'); // Muat tampilan footer
    }

    // Halaman untuk menambah user
    // public function tambah()
    // {
    //     $this->load->view('app/header');
    //     $this->load->view('app/sidebar');
    //     $this->load->view('user/tambah');
    //     $this->load->view('app/footer');
    // }

    // Proses tambah data user
    public function tambah_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_user')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                $this->tambah();
            } else {
                $fileData = $this->upload->data();
                $data = array(
                    'username'  => $this->input->post('username'),
                    'email'     => $this->input->post('email'),
                    'password'  => md5($this->input->post('password')), // Hash password
                    'level'     => $this->input->post('level'),
                    'foto_user' => $fileData['file_name'],
                );

                $this->M_User->insert_user($data);
                redirect('user/index');
            }
        }
    }

    // Menampilkan detail user
    public function detail($id)
    {
        $data['user'] = $this->M_User->tampil_data()->result(); // Ambil data user dari model
        $this->load->view('app/header'); // Muat tampilan header
        $this->load->view('app/sidebar'); // Muat tampilan sidebar
        $this->load->view('user/detail', $data); // Muat tampilan detail user
        $this->load->view('app/footer'); // Muat tampilan footer
    }

    // Menghapus user
    public function hapus($id)
    {
        $this->M_User->hapus_data($id); // Hapus data user
        redirect('user/index'); // Redirect ke index user setelah dihapus
    }

    // Halaman untuk edit data user
    public function edit($id)
    {
        $data['user'] = $this->M_User->get_user_by_id($id); // Ambil data user berdasarkan id
        $this->load->view('app/header'); // Muat tampilan header
        $this->load->view('app/sidebar'); // Muat tampilan sidebar
        $this->load->view('user/edit', $data); // Muat tampilan edit user
        $this->load->view('app/footer'); // Muat tampilan footer
    }

    // Proses update data user
    public function update()
    {
        $id = $this->input->post('id_user');
        $data = array(
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'level'    => $this->input->post('level'),
        );

        if ($_FILES['foto_user']['name']) {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_user')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('user/edit/' . $id);
            } else {
                $fileData = $this->upload->data();
                $data['foto_user'] = $fileData['file_name'];
            }
        }

        $this->M_User->update_user($id, $data); // Update data user
        redirect('user/index'); // Redirect ke index user setelah diupdate
    }
}
