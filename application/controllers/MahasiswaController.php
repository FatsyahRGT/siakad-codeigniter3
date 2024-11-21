<?php

class MahasiswaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Memuat model M_Mahasiswa untuk mengelola data mahasiswa di database
        $this->load->model('M_Mahasiswa');

        // Memuat library form_validation untuk validasi input
        $this->load->library('form_validation');
    }

    // Metode utama (fungsi index) untuk menampilkan halaman daftar mahasiswa
    public function index()
    {
        // Mengambil semua data mahasiswa melalui model
        $data['mahasiswa'] = $this->M_Mahasiswa->tampil_data()->result();

        // Memuat tampilan (view) dengan data mahasiswa
        $this->load->view('app/header');         // Header umum aplikasi
        $this->load->view('app/sidebar');        // Sidebar navigasi
        $this->load->view('mahasiswa/index', $data); // Daftar mahasiswa
        $this->load->view('app/footer');         // Footer umum aplikasi
    }

    // Menampilkan form tambah mahasiswa
    public function tambah()
    {
        // Memuat tampilan form tambah mahasiswa
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/tambah'); // Form tambah mahasiswa
        $this->load->view('app/footer');
    }

    // Proses penambahan data mahasiswa
    public function tambah_aksi()
    {
        // Validasi input untuk memastikan data yang masuk sesuai format
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        // Jika validasi gagal, tampilkan kembali form tambah
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            // Jika validasi berhasil, ambil data dari input form
            $data = array(
                'nama'      => $this->input->post('nama'),
                'nim'       => $this->input->post('nim'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jurusan'   => $this->input->post('jurusan'),
                'alamat'    => $this->input->post('alamat'),
                'email'     => $this->input->post('email'),
                'no_telp'   => $this->input->post('no_telp')
            );

            // Menyimpan data ke database melalui model
            $this->M_Mahasiswa->input_data($data, 'tb_mahasiswa');

            // Kembali ke halaman daftar mahasiswa
            redirect('mahasiswa/index');
        }
    }

    // Menampilkan detail mahasiswa berdasarkan ID
    public function detail($id)
    {
        // Mengambil data detail mahasiswa dari model
        $data['detail'] = $this->M_Mahasiswa->detail_data($id);

        // Memuat tampilan detail mahasiswa
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/detail', $data); // Menampilkan detail mahasiswa
        $this->load->view('app/footer');
    }

    // Menghapus data mahasiswa berdasarkan ID
    public function hapus($id)
    {
        // Menghapus data mahasiswa dari database berdasarkan ID
        $where = array('id' => $id);
        $this->M_Mahasiswa->hapus_data($where, 'tb_mahasiswa');

        // Redirect ke halaman utama
        redirect('mahasiswa/index');
    }

    // Menampilkan form edit data mahasiswa
    public function edit($id)
    {
        // Mengambil data mahasiswa yang akan diedit
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->M_Mahasiswa->edit_data($where, 'tb_mahasiswa')->result();

        // Memuat tampilan form edit dengan data yang akan diperbarui
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('app/footer');
    }

    // Memproses pembaruan data mahasiswa
    public function update()
    {
        // Mengambil ID mahasiswa dari input
        $id = $this->input->post('id');

        // Data yang diperbarui
        $data = array(
            'nama'    => $this->input->post('nama'),
            'nim'     => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat'  => $this->input->post('alamat'),
            'email'   => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp')
        );

        // Memperbarui data mahasiswa di database
        $this->M_Mahasiswa->update_data(array('id' => $id), 'tb_mahasiswa', $data);

        // Redirect ke halaman utama
        redirect('mahasiswa/index');
    }
}
