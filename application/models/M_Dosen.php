<?php

class M_Dosen extends CI_Model {
    public function tampil_data()
    {
        return $this->db->get('tb_dosen');
    }

    public function input_data($data, $table)//harus dibalik
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $table, $data)
    {
        $this->db->where($where); 
        $this->db->update($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_dosen', array('id_dosen' => $id))->row(); 
        return $query; 
    }

    public function count_dosen()
    {
        return $this->db->count_all('tb_dosen');
    }
}