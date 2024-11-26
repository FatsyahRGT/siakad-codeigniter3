<?php

class M_Login extends CI_Model {

    // Fungsi untuk memeriksa apakah username dan password cocok dengan data di database
    public function cek_login($username, $password)
    {
        // Menggunakan query untuk memeriksa apakah ada data yang sesuai dengan username dan password
        $this->db->select('id, username, email, level, blokir'); // Pilih kolom yang diperlukan
        $this->db->from('user'); // Tabel user
        $this->db->where('username', $username); // Kondisi untuk username
        $this->db->where('password', md5($password)); // Kondisi untuk password, misalnya menggunakan MD5 untuk hashing
        $query = $this->db->get(); // Eksekusi query

        // Jika ditemukan, kembalikan hasilnya
        if ($query->num_rows() > 0) {
            return $query->row(); // Mengembalikan satu baris hasil
        } else {
            return null; // Jika tidak ditemukan, kembalikan null
        }
    }   

    // Fungsi untuk mengambil data pengguna berdasarkan ID (untuk detail)
    public function detail_data($id)
    {
        $query = $this->db->get_where('user', array('id' => $id))->row(); 
        return $query; 
    }

    public function cek_login_by_email($email)
    {
        // Query berdasarkan email
        $this->db->where('email', $email);
        return $this->db->get('user')->row(); // Sesuaikan nama tabel: `user`
    }
}
