<?php

class DosenController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Dosen');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['dosen'] = $this->M_Dosen->tampil_data()->result();

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('app/footer');
    }

    public function tambah()
    {
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('dosen/tambah');
        $this->load->view('app/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('nid', 'NID', 'required|numeric');
        $this->form_validation->set_rules('gelar', 'Gelar', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_dosen'    => $this->input->post('nama_dosen'),
                'nid'           => $this->input->post('nid'),
                'gelar'         => $this->input->post('gelar'),
                'email'         => $this->input->post('email'),
                'no_telp'       => $this->input->post('no_telp'),
                'alamat'        => $this->input->post('alamat'),
                'prodi'         => $this->input->post('prodi'),
                'jurusan'       => $this->input->post('jurusan'),
            );

            $this->M_Dosen->input_data($data, 'tb_dosen');
            redirect('dosen/index');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Dosen->detail_data($id);
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('dosen/detail', $data);
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {
        $where = array('id_dosen' => $id);
        $this->M_Dosen->hapus_data($where, 'tb_dosen');

        redirect('dosen/index');
    }

    public function edit($id)
    {
        $where = array('id_dosen' => $id);
        $data['dosen'] = $this->M_Dosen->edit_data($where, 'tb_dosen')->result();

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('dosen/edit', $data);
        $this->load->view('app/footer');  
    }

    public function update()
    {
        $id = $this->input->post('id_dosen');
        $data = array(
            'nama_dosen'    => $this->input->post('nama_dosen'),
            'nid'           => $this->input->post('nid'),
            'gelar'         => $this->input->post('gelar'),
            'email'         => $this->input->post('email'),
            'no_telp'       => $this->input->post('no_telp'),
            'alamat'        => $this->input->post('alamat'),
            'prodi'         => $this->input->post('prodi'),
            'jurusan'       => $this->input->post('jurusan'),
        );

        $this->M_Dosen->update_data(array('id_dosen' => $id), 'tb_dosen', $data);
        redirect('dosen/index');
    }
}