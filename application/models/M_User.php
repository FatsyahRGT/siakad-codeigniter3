<?php

class M_User extends CI_Model {
    
    public function tampil_data()
    {
        return $this->db->get('user'); 
    }

    public function input_data($data, $table)
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
        $query = $this->db->get_where('user', array('id' => $id))->row(); 
        return $query; 
    }

    public function count_user()
    {
        return $this->db->count_all('user'); // Menghitung jumlah seluruh data di tabel 'user'
    }
}
