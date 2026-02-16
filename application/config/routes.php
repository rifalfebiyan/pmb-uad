<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  URI ROUTING
| -------------------------------------------------------------------
*/
$route['default_controller'] = 'Auth';
$route['login'] = 'Auth/index'; 
$route['login/process'] = 'Auth/process_login'; // Route untuk proses login
$route['login/success'] = 'Auth/success'; // Route untuk halaman sukses
$route['logout'] = 'Auth/logout';
$route['prodi'] = 'Prodi'; // Route default ke controller Prodi
$route['prodi/(:any)'] = 'Prodi/index'; // Route wildcard untuk menangani hash panjang
$route['upload'] = 'Upload'; // Route untuk halaman upload
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
