<?php

class MahasiswaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Mahasiswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->M_Mahasiswa->tampil_data()->result();
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('app/footer');
    }

    public function tambah()
    {
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('app/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                $this->tambah();
            } else {
                $fileData = $this->upload->data();
                $data = array(
                    'nama'      => $this->input->post('nama'),
                    'nim'       => $this->input->post('nim'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jurusan'   => $this->input->post('jurusan'),
                    'alamat'    => $this->input->post('alamat'),
                    'email'     => $this->input->post('email'),
                    'no_telp'   => $this->input->post('no_telp'),
                    'foto'      => $fileData['file_name'],
                );

                $this->M_Mahasiswa->input_data($data, 'tb_mahasiswa');
                redirect('mahasiswa/index');
            }
        }
    }

    public function tampilkan_foto($filename)
    {
        $path = './assets/foto/' . $filename;

        if (file_exists($path)) {
            header('Content-Type: ' . mime_content_type($path));
            header('Content-Length: ' . filesize($path));
            readfile($path);
            exit;
        } else {
            echo "File tidak ditemukan.";
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Mahasiswa->detail_data($id);
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_Mahasiswa->hapus_data($where, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->M_Mahasiswa->edit_data($where, 'tb_mahasiswa')->result();
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('app/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'nama'    => $this->input->post('nama'),
            'nim'     => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat'  => $this->input->post('alamat'),
            'email'   => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp')
        );

        // Jika foto baru diupload
        if ($_FILES['foto']['name']) {
            // Konfigurasi upload foto baru
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                // Jika upload gagal, tampilkan pesan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('mahasiswa/edit/' . $id);
            } else {
                // Ambil data file
                $fileData = $this->upload->data();
                $data['foto'] = $fileData['file_name'];
            }
        }

        // Memperbarui data mahasiswa di database
        $this->M_Mahasiswa->update_data(array('id' => $id), 'tb_mahasiswa', $data);

        // Redirect ke halaman daftar mahasiswa
        redirect('mahasiswa/index');
    }
}