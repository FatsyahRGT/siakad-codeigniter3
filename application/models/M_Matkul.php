<?php

class M_Matkul extends CI_Model {

     public function tampil_data()
     {
         // Mengambil data mata kuliah dan dosen
         $this->db->select('tb_matkul.id_matkul, tb_matkul.nama_matkul, tb_dosen.nama_dosen');
         $this->db->from('tb_matkul');
         $this->db->join('tb_dosen', 'tb_matkul.id_dosen = tb_dosen.id_dosen', 'left');
         return $this->db->get();
     }

   // Menambahkan data mata kuliah
   public function input_data($data, $table)
   {
        $this->db->insert($table, $data);
   }

   // Menghapus data mata kuliah
   public function hapus_data($where, $table)
   {
        $this->db->where($where);
        $this->db->delete($table);
   }

   // Mengambil data mata kuliah untuk diedit
   public function edit_data($where, $table)
   {
        return $this->db->get_where($table, $where);
   }

   // Mengupdate data mata kuliah
   public function update_data($where, $data, $table)
   {
        $this->db->where($where);
        $this->db->update($table, $data);
   }

   // Menampilkan detail mata kuliah berdasarkan ID
   public function detail_data($id = NULL)
   {
        $query = $this->db->get_where('tb_matkul', array('id_matkul' => $id))->row();
        return $query;
   }
}
