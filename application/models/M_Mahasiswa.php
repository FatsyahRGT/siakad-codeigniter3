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
    // Fungsi ini digunakan untuk menambahkan data mahasiswa baru ke dalam tabel 'tb_mahasiswa'
    // Parameter $data adalah array yang berisi data mahasiswa yang akan disimpan ke database
    // Parameter $table adalah nama tabel yang digunakan, dalam hal ini 'tb_mahasiswa'
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data); // Menyisipkan data ke dalam tabel yang ditentukan
    }

    // Menghapus data mahasiswa
    // Fungsi ini digunakan untuk menghapus data mahasiswa berdasarkan ID yang diberikan
    // Parameter $where adalah array yang berisi kondisi (dalam hal ini ID mahasiswa)
    // Parameter $table adalah nama tabel yang digunakan, dalam hal ini 'tb_mahasiswa'
    public function hapus_data($where, $table)
    {
        $this->db->where($where); // Menentukan kondisi penghapusan berdasarkan ID yang diberikan
        $this->db->delete($table); // Menghapus data dari tabel yang ditentukan sesuai dengan kondisi
    }

    // Mengambil data untuk proses edit
    // Fungsi ini digunakan untuk mengambil data mahasiswa berdasarkan ID yang diberikan
    // Fungsi ini berguna saat kita ingin menampilkan form edit dengan data mahasiswa yang sudah ada
    // Parameter $where adalah array yang berisi kondisi (biasanya ID mahasiswa)
    // Parameter $table adalah nama tabel yang digunakan, dalam hal ini 'tb_mahasiswa'
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where); // Mengambil data dari tabel yang sesuai dengan kondisi yang diberikan
    }

    // Memperbarui data mahasiswa
    // Fungsi ini digunakan untuk memperbarui data mahasiswa yang sudah ada berdasarkan ID yang diberikan
    // Parameter $where adalah array yang berisi kondisi pengupdatean (ID mahasiswa)
    // Parameter $table adalah nama tabel yang digunakan, dalam hal ini 'tb_mahasiswa'
    // Parameter $data adalah array yang berisi data baru yang akan disimpan ke dalam database
    public function update_data($where, $table, $data)
    {
        $this->db->where($where); // Menentukan kondisi update berdasarkan ID yang diberikan
        $this->db->update($table, $data); // Melakukan update data pada tabel yang ditentukan sesuai dengan kondisi
    }

    // Menampilkan detail data mahasiswa
    // Fungsi ini digunakan untuk menampilkan data detail dari mahasiswa berdasarkan ID yang diberikan
    // Fungsi ini akan mengembalikan satu baris data mahasiswa berdasarkan ID yang diberikan
    // Parameter $id adalah ID mahasiswa yang akan ditampilkan detailnya
    public function detail_data($id = NULL)
    {
        // Mengambil data dari tabel 'tb_mahasiswa' berdasarkan ID yang diberikan
        // Menggunakan metode row() untuk hanya mengambil satu baris data
        $query = $this->db->get_where('tb_mahasiswa', array('id_mahasiswa' => $id))->row(); 
        return $query; // Mengembalikan data mahasiswa yang ditemukan
    }
}
