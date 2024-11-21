<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Default Route
|--------------------------------------------------------------------------
| Route ini menentukan controller dan metode default yang akan dipanggil 
| jika tidak ada segment URI yang diberikan. Dalam hal ini, jika kita 
| mengakses `http://localhost/projek`, maka otomatis diarahkan ke 
| `Admin/dashboard`.
*/
$route['default_controller'] = 'Admin/dashboard';

/*
|--------------------------------------------------------------------------
| Route ke Mahasiswa
|--------------------------------------------------------------------------
| Route ini digunakan untuk mengarahkan URL `mahasiswa/index` ke 
| controller `MahasiswaController` dan metode `index`.
| 
| Contoh:
| - URL: http://localhost/projek/mahasiswa/index
|   -> Akan memanggil: MahasiswaController::index()
| 
| Catatan:
| Jika ingin mempersingkat URL menjadi hanya `mahasiswa`, tambahkan route
| berikut (opsional):
| $route['mahasiswa'] = 'MahasiswaController/index';
*/




//Modul Mahasiswa
$route['mahasiswa/index'] = 'MahasiswaController/index';
$route['mahasiswa/detail/(:num)'] = 'MahasiswaController/detail/$1';
$route['mahasiswa/edit/(:num)'] = 'MahasiswaController/edit/$1';
$route['mahasiswa/delete/(:num)'] = 'MahasiswaController/delete/$1';

//Modul Dosen
$route['dosen/index'] = 'DosenController/index';
$route['dosen/detail/(:num)'] = 'DosenController/detail/$1';
$route['dosen/edit/(:num)'] = 'DosenController/edit/$1';
$route['dosen/delete/(:num)'] = 'DosenController/delete/$1';

//Modul Jurusan
$route['jurusan/index'] = 'JurusanController/index';
$route['jurusan/detail/(:num)'] = 'JurusanController/detail/$1';
$route['jurusan/edit/(:num)'] = 'JurusanController/edit/$1';
$route['jurusan/delete/(:num)'] = 'JurusanController/delete/$1';



/*
|--------------------------------------------------------------------------
| Route untuk Halaman Tidak Ditemukan (404)
|--------------------------------------------------------------------------
| Route ini menentukan controller atau metode yang dipanggil jika halaman 
| yang diminta tidak ditemukan. Kosongkan jika ingin menggunakan default 404 
| bawaan dari CodeIgniter.
*/
$route['404_override'] = '';

/*
|--------------------------------------------------------------------------
| Translate URI Dashes
|--------------------------------------------------------------------------
| Pengaturan ini memungkinkan dash ("-") pada URI secara otomatis diterjemahkan
| menjadi underscore ("_") pada controller atau metode. Hal ini berguna 
| jika nama metode menggunakan underscore.
| 
| Contoh:
| - URL: http://localhost/projek/some-controller/my-method
|   -> Akan memanggil: Some_controller::my_method()
*/
$route['translate_uri_dashes'] = FALSE;
