<?php

class MatkulController extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        // Memuat model untuk matkul dan dosen
        $this->load->model('M_Matkul');
        $this->load->model('M_Dosen');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Mengambil data mata kuliah beserta nama dosen
        $data['matkul'] = $this->M_Matkul->tampil_data()->result();

        // Memuat view dengan data mata kuliah
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/index', $data);
        $this->load->view('app/footer');
    }

    public function tambah()
    {
        // Menampilkan form tambah dan mengambil data dosen untuk dropdown
        $data['dosen'] = $this->M_Dosen->tampil_data()->result();

        // Memuat view dengan data dosen
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/tambah', $data);
        $this->load->view('app/footer');
    }      

    public function tambah_aksi()
    {
        // Menambahkan aturan validasi
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form tambah
            $this->tambah();
        } else {
            // Menyimpan data mata kuliah dengan ID dosen
            $data = array(
                'nama_matkul' => $this->input->post('nama_matkul'),
                'id_dosen'    => $this->input->post('id_dosen'),
            );

            // Memanggil model untuk menyimpan data
            $this->M_Matkul->input_data($data, 'tb_matkul');

            // Redirect ke halaman index setelah berhasil
            redirect('matkul/index');
        }
    }

    public function detail($id)
    {
        // Mendapatkan data detail mata kuliah berdasarkan ID
        $data['detail'] = $this->M_Matkul->detail_data($id);

        if (empty($data['detail'])) {
            // Jika data tidak ditemukan, redirect ke index
            redirect('matkul/index');
        }

        // Memuat view untuk menampilkan detail mata kuliah
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/detail', $data);
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {
        // Menghapus data mata kuliah berdasarkan ID
        $where = array('id_matkul' => $id);
        $this->M_Matkul->hapus_data($where, 'tb_matkul');

        // Redirect ke halaman index setelah berhasil
        redirect('matkul/index');
    }

    public function edit($id)
    {
        // Mengambil data mata kuliah dan dosen untuk form edit
        $where = array('id_matkul' => $id);
        $data['matkul'] = $this->M_Matkul->edit_data($where, 'tb_matkul')->row(); // Menggunakan row() untuk satu baris data
        $data['dosen'] = $this->M_Dosen->tampil_data()->result();

        if (empty($data['matkul'])) {
            // Jika mata kuliah tidak ditemukan, redirect ke index
            redirect('matkul/index');
        }

        // Memuat view untuk mengedit data mata kuliah
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/edit', $data);
        $this->load->view('app/footer');
    }

    public function update()
    {
        // Mendapatkan ID mata kuliah dari form
        $id = $this->input->post('id_matkul');

        // Menyimpan data mata kuliah yang sudah diperbarui
        $data = array(
            'nama_matkul' => $this->input->post('nama_matkul'),
            'id_dosen'    => $this->input->post('id_dosen'),
        );

        // Memanggil model untuk memperbarui data
        $this->M_Matkul->update_data(array('id_matkul' => $id), $data, 'tb_matkul');

        // Redirect ke halaman index setelah berhasil
        redirect('matkul/index');
    }
}
