<?php

class JurusanController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Jurusan');
        $this->load->library('form_validation');
    }

    public function index()
    {
       
        $data['jurusan'] = $this->M_Jurusan->tampil_data()->result();

        $this->load->view('app/header');         
        $this->load->view('app/sidebar');      
        $this->load->view('jurusan/index', $data); 
        $this->load->view('app/footer');
    }
    
    public function tambah()
    {
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jurusan/tambah'); 
        $this->load->view('app/footer');
    }

    public function tambah_aksi()
    {

        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
        $this->form_validation->set_rules('kepala_jurusan', 'Kepala Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
    
            $data = array(
                'nama_jurusan'          => $this->input->post('nama_jurusan'),
                'kepala_jurusan'        => $this->input->post('kepala_jurusan'),
            );

            $this->M_Mahasiswa->input_data($data, 'tb_jurusan');

            redirect('jurusan/index');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Jurusan->detail_data($id);

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jurusan/detail', $data); 
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {

        $where = array('id' => $id);
        $this->M_Jurusan->hapus_data($where, 'tb_jurusan');

        redirect('jurusan/index');
    }

    public function edit($id)
    {

        $where = array('id' => $id);
        $data['jurusan'] = $this->M_Jurusan->edit_data($where, 'tb_jurusan')->result();

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('jurusan/edit', $data);
        $this->load->view('app/footer');
    }

    public function update()
    {

        $id = $this->input->post('id');

        $data = array(
            'nama_jurusan'    => $this->input->post('nama_jurusan'),
            'kepala_jurusan'     => $this->input->post('kepala_jurusan'),
        );

        $this->M_Mahasiswa->update_data(array('id' => $id), 'tb_jurusan', $data);

        redirect('jurusan/index');
    }
}