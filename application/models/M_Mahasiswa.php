<?php

class M_Mahasiswa extends CI_Model {

    // Menampilkan data mahasiswa
    // Fungsi ini digunakan untuk mengambil semua data mahasiswa dari tabel 'tb_mahasiswa'
    // Fungsi ini mengembalikan hasil query dalam bentuk objek, yang kemudian bisa digunakan di controller.
    public function tampil_data()
    {
        return $this->db->get('tb_mahasiswa'); // Mengambil seluruh data dari tabel 'tb_mahasiswa'
    }

    // Menambah data mahasiswa
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data); // Menyisipkan data ke dalam tabel yang ditentukan
    }

    // Menghapus data mahasiswa
    public function hapus_data($where, $table)
    {
        $this->db->where($where); // Menentukan kondisi penghapusan berdasarkan ID yang diberikan
        $this->db->delete($table); // Menghapus data dari tabel yang ditentukan sesuai dengan kondisi
    }

    // Mengambil data untuk proses edit
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where); // Mengambil data dari tabel yang sesuai dengan kondisi yang diberikan
    }

    // Memperbarui data mahasiswa
    public function update_data($where, $table, $data)
    {
        $this->db->where($where); // Menentukan kondisi update berdasarkan ID yang diberikan
        $this->db->update($table, $data); // Melakukan update data pada tabel yang ditentukan sesuai dengan kondisi
    }

    // Menampilkan detail data mahasiswa
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_mahasiswa', array('id_mahasiswa' => $id))->row(); 
        return $query; // Mengembalikan data mahasiswa yang ditemukan
    }

    // Menghitung jumlah mahasiswa
    public function count_mahasiswa()
    {
        return $this->db->count_all('tb_mahasiswa'); // Menghitung jumlah seluruh data di tabel 'tb_mahasiswa'
    }
}
