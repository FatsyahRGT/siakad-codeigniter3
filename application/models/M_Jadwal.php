<?php

class M_Jadwal extends CI_Model {

    public function tampil_data()
    {
        $this->db->select('
            tb_jadwal_kuliah.id_jadwal,
            tb_matkul.nama_matkul,
            tb_dosen.nama_dosen,
            tb_jurusan.nama_jurusan,
            tb_jadwal_kuliah.hari,
            tb_jadwal_kuliah.tanggal,
            tb_jadwal_kuliah.waktu_mulai,
            tb_jadwal_kuliah.waktu_selesai,
            tb_jadwal_kuliah.ruang,
            tb_jadwal_kuliah.semester
        ');
        $this->db->from('tb_jadwal_kuliah');
        $this->db->join('tb_matkul', 'tb_jadwal_kuliah.id_matkul = tb_matkul.id_matkul');
        $this->db->join('tb_dosen', 'tb_jadwal_kuliah.id_dosen = tb_dosen.id_dosen');
        $this->db->join('tb_jurusan', 'tb_jadwal_kuliah.id_jurusan = tb_jurusan.id_jurusan');

        return $this->db->get(); // Mengembalikan objek query
    }


    public function input_data($data)//harus dibalik
    {
        $this->db->insert('tb_jadwal_kuliah', $data);
    }

    public function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_jadwal_kuliah');
    }

    public function edit_data($where)
    {
        return $this->db->get_where('tb_jadwal_kuliah', $where);
    }

    public function update_data($where, $data)
    {
        $this->db->where($where); 
        $this->db->update('tb_jadwal_kuliah', $data);
    }

    public function detail_data($id = NULL)
    {
        $this->db->select('
         tb_jadwal_kuliah.id_jadwal,
            tb_matkul.nama_matkul,
            tb_dosen.nama_dosen,
            tb_jurusan.nama_jurusan,
            tb_jadwal_kuliah.hari,
            tb_jadwal_kuliah.tanggal,
            tb_jadwal_kuliah.waktu_mulai,
            tb_jadwal_kuliah.waktu_selesai,
            tb_jadwal_kuliah.ruang,
            tb_jadwal_kuliah.semester
        ');
        $this->db->from('tb_jadwal_kuliah');
        $this->db->join('tb_matkul', 'tb_jadwal_kuliah.id_matkul = tb_matkul.id_matkul');
        $this->db->join('tb_dosen', 'tb_jadwal_kuliah.id_dosen = tb_dosen.id_dosen');
        $this->db->join('tb_jurusan', 'tb_jadwal_kuliah.id_jurusan = tb_jurusan.id_jurusan');
        $this->db->where('tb_jadwal_kuliah.id_jadwal', $id);
        return $this->db->get()->row(); 
    }

    
}   