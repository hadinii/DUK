<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['pegawai'] = 'pegawai';
$route['duk'] = 'duk';
$route['gaji'] = 'gaji';
$route['setting'] = 'pegawai/setting';
$route['data_duk/(:num)'] = 'duk/data_duk/$1';
$route['pengajuan'] = 'pengajuan';

//routes tambah
$route['tambah_gaji'] = 'gaji/tambah';
$route['tambah_pegawai'] = 'pegawai/tambah';

//routes hapus
$route['hapusPegawai/(:num)'] = 'pegawai/hapusPegawai/$1';
$route['hapusGaji/(:num)'] = 'gaji/hapusDataGaji/$1';
$route['hapusPengajuan/(:num)'] = 'pengajuan/hapusDataPengajuan/$1';

//routes detail
$route['detailGaji/(:num)'] = 'gaji/detailDataGaji/$1';
$route['detailPegawai/(:num)'] = 'pegawai/detailPegawai/$1';
$route['detailpengajuan/(:num)'] = 'pengajuan/detailPengajuan/$1';
// $route['detailPengajuanUser/(:num)'] = 'user/detailpengajuan_user/$1';

//router pengajuan
$route['pengajuan_reguler'] = 'user/pengajuan_reguler';
$route['pengajuan_fungsional'] = 'user/pengajuan_fungsional';
$route['pengajuan_structural'] = 'user/pengajuan_structural';
$route['pengajuan_gaji'] = 'user/pengajuan_gaji';

//routes export
// $route['export_pegawai'] = 'pegawai/export';
// $route['export_duk'] = 'duk/export';
// $route['export_gaji'] = 'gaji/export';
