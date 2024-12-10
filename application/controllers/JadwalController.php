<?php

class JadwalController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Jadwal');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['jadwal'] = $this->M_Jadwal->tampil_data()->result();

        $this->load->view('app/header');         
        $this->load->view('app/sidebar');      
        $this->load->view('jadwal/index', $data); 
        $this->load->view('app/footer');
    }
    
    public function tambah()
    {
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jadwal/tambah'); 
        $this->load->view('app/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules('id_matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required');
        $this->form_validation->set_rules('id_jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('waktu_mulai', 'Waktu Mulai', 'required');
        $this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required');
        $this->form_validation->set_rules('ruang', 'Ruang', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'id_matkul'        => $this->input->post('id_matkul'),
                'id_dosen'         => $this->input->post('id_dosen'),
                'id_jurusan'       => $this->input->post('id_jurusan'),
                'hari'             => $this->input->post('hari'),
                'tanggal'          => $this->input->post('tanggal'),
                'waktu_mulai'      => $this->input->post('waktu_mulai'),
                'waktu_selesai'    => $this->input->post('waktu_selesai'),
                'ruang'            => $this->input->post('ruang'),
                'semester'         => $this->input->post('semester'),
            );

            $this->M_Jadwal->input_data($data);

            redirect('jadwal/index');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Jadwal->detail_data($id);

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jadwal/detail', $data); 
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {
        $where = array('id_jadwal' => $id);
        $this->M_Jadwal->hapus_data($where);

        redirect('jadwal/index');
    }

    public function edit($id)
    {
        $where = array('id_jadwal' => $id);
        $data['jadwal'] = $this->M_Jadwal->edit_data($where)->result();

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jadwal/edit', $data);
        $this->load->view('app/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_jadwal');

        $data = array(
            'id_matkul'        => $this->input->post('id_matkul'),
            'id_dosen'         => $this->input->post('id_dosen'),
            'id_jurusan'       => $this->input->post('id_jurusan'),
            'hari'             => $this->input->post('hari'),
            'tanggal'          => $this->input->post('tanggal'),
            'waktu_mulai'      => $this->input->post('waktu_mulai'),
            'waktu_selesai'    => $this->input->post('waktu_selesai'),
            'ruang'            => $this->input->post('ruang'),
            'semester'         => $this->input->post('semester'),
        );

        $this->M_Jadwal->update_data(array('id_jadwal' => $id), $data);

        redirect('jadwal/index');
    }

    
}
