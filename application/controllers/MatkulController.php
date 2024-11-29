<?php

class MatkulController extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        $this->load->model('M_Matkul');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['matkul'] = $this->M_Matkul->tampil_data()->result();

        $this->load->view('app/header');         
        $this->load->view('app/sidebar');      
        $this->load->view('matkul/index', $data); 
        $this->load->view('app/footer');
    }

    public function tambah()
    {
        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/tambah'); 
        $this->load->view('app/footer');
    }

    public function tambah_aksi()
    {

        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Kepala Dosen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
    
            $data = array(
                'nama_matkul'           => $this->input->post('nama_matkul'),
                'nama_dosen'            => $this->input->post('nama_dosen'),
            );

            $this->M_Matkul->input_data($data, 'tb_matkul');

            redirect('matkul/index');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Matkul->detail_data($id);

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/detail', $data); 
        $this->load->view('app/footer');
    }

    public function hapus($id)
    {

        $where = array('id_matkul' => $id);
        $this->M_Matkul->hapus_data($where, 'tb_matkul');

        redirect('matkul/index');
    }

    public function edit($id)
    {
        $where = array('id_matkul' => $id);
        $data['matkul'] = $this->M_Matkul->edit_data($where, 'tb_matkul')->result();

        $this->load->view('app/header');
        $this->load->view('app/sidebar');
        $this->load->view('matkul/edit', $data);
        $this->load->view('app/footer');
    }

    public function update()
{
    $id = $this->input->post('id_matkul');

    $data = array(
        'nama_matkul' => $this->input->post('nama_matkul'),
        'nama_dosen' => $this->input->post('nama_dosen'),
    );

    $this->M_Matkul->update_data(array('id_matkul' => $id), $data, 'tb_matkul');

    redirect('matkul/index');
}



}