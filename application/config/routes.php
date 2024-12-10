<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Default Route
|--------------------------------------------------------------------------
| Menentukan controller default yang akan dipanggil ketika aplikasi diakses
| tanpa URI segment tertentu.
*/
$route['default_controller'] = 'LoginController';

/*
|--------------------------------------------------------------------------
| Route untuk Login dan Logout
|--------------------------------------------------------------------------
| Rute untuk proses login, logout, dan halaman login.
*/
$route['login'] = 'LoginController/index';             // Menampilkan halaman login
$route['login/login_aksi'] = 'LoginController/login_aksi'; // Proses login
$route['logout'] = 'LoginController/logout';           // Proses logout

/*
|--------------------------------------------------------------------------
| Route untuk Registrasi
|--------------------------------------------------------------------------
| Rute untuk menampilkan dan memproses registrasi pengguna baru.
*/
$route['register'] = 'RegisterController/index';       // Menampilkan form registrasi
$route['register/register_aksi'] = 'RegisterController/register_aksi'; // Proses registrasi

/*
|--------------------------------------------------------------------------
| Route untuk Dashboard
|--------------------------------------------------------------------------
| Rute untuk halaman dashboard setelah login berhasil.
*/
$route['Admin/dashboard'] = 'DashboardController/index'; // Halaman dashboard
$route['Admin/login'] = 'LoginController/index';         // Halaman login admin
$route['Admin/logout'] = 'LoginController/logout';       // Logout admin
$route['dashboard'] = 'DashboardController/index';       // Alternatif akses dashboard

/*
|--------------------------------------------------------------------------
| Route untuk Modul Mahasiswa
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait mahasiswa, seperti menampilkan, mengedit, 
| atau menghapus data mahasiswa.
*/
$route['mahasiswa/index'] = 'MahasiswaController/index';    // Halaman utama mahasiswa
$route['mahasiswa/detail/(:num)'] = 'MahasiswaController/detail/$1'; // Detail mahasiswa berdasarkan ID
$route['mahasiswa/edit/(:num)'] = 'MahasiswaController/edit/$1';     // Edit mahasiswa berdasarkan ID
$route['mahasiswa/delete/(:num)'] = 'MahasiswaController/delete/$1'; // Hapus mahasiswa berdasarkan ID
$route['mahasiswa/update'] = 'MahasiswaController/update';           // Update mahasiswa

/*
|--------------------------------------------------------------------------
| Route untuk Modul Dosen
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait dosen, seperti menampilkan, mengedit, 
| atau menghapus data dosen.
*/
$route['dosen/index'] = 'DosenController/index';          // Halaman utama dosen
$route['dosen/detail/(:num)'] = 'DosenController/detail/$1'; // Detail dosen berdasarkan ID
$route['dosen/edit/(:num)'] = 'DosenController/edit/$1';     // Edit dosen berdasarkan ID
$route['dosen/delete/(:num)'] = 'DosenController/delete/$1'; // Hapus dosen berdasarkan ID
$route['dosen/update'] = 'DosenController/update';           // Update dosen

/*
|--------------------------------------------------------------------------
| Route untuk Modul Jurusan
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait jurusan, seperti menampilkan, mengedit, 
| atau menghapus data jurusan.
*/
$route['jurusan/index'] = 'JurusanController/index';          // Halaman utama jurusan
$route['jurusan/detail/(:num)'] = 'JurusanController/detail/$1'; // Detail jurusan berdasarkan ID
$route['jurusan/edit/(:num)'] = 'JurusanController/edit/$1';     // Edit jurusan berdasarkan ID
$route['jurusan/delete/(:num)'] = 'JurusanController/delete/$1'; // Hapus jurusan berdasarkan ID
$route['jurusan/update'] = 'JurusanController/update';           // Update jurusan

/*
|--------------------------------------------------------------------------
| Route untuk Modul Mata Kuliah
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait mata kuliah, seperti menampilkan, 
| mengedit, atau menghapus data mata kuliah.
*/
$route['matkul/index'] = 'MatkulController/index';          // Halaman utama mata kuliah
$route['matkul/detail/(:num)'] = 'MatkulController/detail/$1'; // Detail mata kuliah berdasarkan ID
$route['matkul/edit/(:num)'] = 'MatkulController/edit/$1';     // Edit mata kuliah berdasarkan ID
$route['matkul/delete/(:num)'] = 'MatkulController/delete/$1'; // Hapus mata kuliah berdasarkan ID
$route['matkul/update'] = 'MatkulController/update';           // Update mata kuliah

/*
|--------------------------------------------------------------------------
| Route untuk Modul Jadwal Kuliah
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait jadwal kuliah, seperti menampilkan, 
| mengedit, atau menghapus data jadwal kuliah.
*/

$route['jadwal/index'] = 'JadwalController/index';


/*
|--------------------------------------------------------------------------
| Route untuk Modul User (Edit Profile)
|--------------------------------------------------------------------------
| Rute untuk semua fungsi terkait mata CRUD Profile
*/
$route['user/index'] = 'UserController/index'; // Menampilkan daftar user
$route['user/tambah'] = 'UserController/tambah'; // Form tambah user
$route['user/tambah_aksi'] = 'UserController/tambah_aksi'; // Proses tambah user
$route['user/edit/(:num)'] = 'UserController/edit/$1'; // Form edit user
$route['user/update'] = 'UserController/update'; // Proses update user
$route['user/detail/(:num)'] = 'UserController/detail/$1'; // Menampilkan detail user
$route['user/hapus/(:num)'] = 'UserController/hapus/$1'; // Proses hapus user
$route['user'] = 'UserController/index'; // Mengarahkan ke halaman index user jika URL 'user' dipanggil
        

/*
|--------------------------------------------------------------------------
| Route untuk Halaman Tidak Ditemukan (404)
|--------------------------------------------------------------------------
| Mengatur controller yang akan dipanggil jika halaman tidak ditemukan.
| Kosongkan untuk menggunakan 404 bawaan dari CodeIgniter.
*/
$route['404_override'] = '';

/*
|--------------------------------------------------------------------------
| Translate URI Dashes
|--------------------------------------------------------------------------
| Mengubah dash ("-") pada URI menjadi underscore ("_").
| Contoh: 
| URL: http://localhost/projek/some-controller/my-method
| Akan memanggil: Some_controller::my_method()
*/
$route['translate_uri_dashes'] = FALSE;
