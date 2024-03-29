<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BerandaController@index');

Route::get('/armada', 'ArmadaController@armada');
Route::get('/armada/detail-armada/{nama_po}', 'ArmadaController@detailarmada');

Route::get('/boking', 'BokingController@boking');
Route::get('/boking/booking-sekarang/{nama_bus}', 'BokingController@bookingnow');
Route::post('/boking/submit-order','BokingController@submitBoking');

Route::get('/daftar', 'RegisterController@daftar');
Route::get('/login', 'RegisterController@login');

Route::get('/tentang', 'AboutController@about');

Route::get('/kontak', 'AboutController@kontak');
Route::post('/kontak/submitKritik','AboutController@submitKritik');
Route::delete('/menuComment/{id}', 'DashboardController@hapusComment');

Route::get('/pdf', 'DashboardController@pdf');

Route::get('/dashboardUser', 'DashboardUser@dashuser');
Route::get('/dashboardUser/myOrder', 'DashboardUser@myOrder');
Route::get('/dashboardUser/historyOrder', 'DashboardUser@history');
Route::get('/dashboardUser/newsletter', 'DashboardUser@newsletter');
Route::get('/dashboardUser/accountInfo', 'DashboardUser@accountInfo');
Route::get('/dashboardUser/address', 'DashboardUser@address');

// Dashboard AdminLTE
Route::get('/dashboardAdmin', 'DashboardController@dashboard');
Route::get('/MenuBus', 'DashboardController@menubus');
Route::get('/MenuPO', 'DashboardController@menupo');
Route::get('/MenuUser', 'DashboardController@menuUser');

Route::get('/MenuOrder', 'DashboardController@menuorder');
Route::delete('/MenuOrder/{id}', 'DashboardController@hapusOrder');
Route::get('/MenuOrder/editOrder/{id}', 'DashboardController@editorder');
Route::post('/MenuOrder/updateOrder/{id}', 'DashboardController@updateorder');

Route::get('/MenuKota', 'DashboardController@menukota');
Route::post('/MenuKota/tambahKota','DashboardController@tambahkota');
Route::get('/MenuKota/createKota', 'DashboardController@createkota');
Route::get('/MenuKota/editKota/{id}', 'DashboardController@editkota');
Route::post('/MenuKota/updateKota/{id}', 'DashboardController@updatekota');
Route::delete('/MenuKota/{id}', 'DashboardController@hapusKota');

Route::get('/MenuHarga', 'DashboardController@menuharga');
Route::post('/MenuHarga/tambahHarga','DashboardController@tambahharga');
Route::get('/MenuHarga/createHarga', 'DashboardController@createharga');
Route::get('/MenuHarga/editHarga/{id}', 'DashboardController@editharga');
Route::post('/MenuHarga/updateHarga/{id}', 'DashboardController@updateharga');
Route::delete('/MenuHarga/{id}', 'DashboardController@hapusharga');

Route::get('/MenuHistory', 'DashboardController@menuhistory');

Route::get('/MenuRute', 'DashboardController@menurute');
Route::post('/MenuRute/tambahRute','DashboardController@tambahrute');
Route::get('/MenuRute/createRute', 'DashboardController@createrute');
Route::get('/MenuRute/editRute/{id}', 'DashboardController@editrute');
Route::post('/MenuRute/updateRute/{id}', 'DashboardController@updaterute');
Route::delete('/MenuRute/{id}', 'DashboardController@hapusRute');

Route::get('/menuComment', 'DashboardController@menucomment');

Route::post('/MenuBus/tambahData','DashboardController@tambahData');
Route::get('/MenuBus/createData', 'DashboardController@createData');
Route::get('/MenuBus/editData/{id}', 'DashboardController@editData');
Route::post('/MenuBus/updateData/{id}', 'DashboardController@updateData');
Route::delete('/MenuBus/{id}', 'DashboardController@destroy');

Route::get('/MenuBus/viewData/{id}', 'DashboardController@viewData');
Route::get('/MenuOrder/viewOrder/{id}', 'DashboardController@viewOrder');
Route::get('/MenuPO/viewPo/{id}', 'DashboardController@viewPo');
Route::get('/menuComment/viewComment/{id}', 'DashboardController@viewComment');
Route::get('/MenuUser/viewUser/{id}', 'DashboardController@viewUser');

Route::delete('/MenuUser/{id}', 'DashboardController@hapusUser');

Route::post('/MenuPo/tambahData','DashboardController@tambahpo');
Route::get('/MenuPo/createData', 'DashboardController@createpo');
Route::delete('/MenuPO/{id}', 'DashboardController@hapuspo');
Route::get('/MenuPo/editDataPO/{id}', 'DashboardController@editPo');
Route::post('/MenuPo/updateDataPO/{id}', 'DashboardController@updatePo');

Route::get('/daftarAdmin', 'DashboardController@adminDaftar');
Route::get('/loginAdmin', 'DashboardController@adminLogin');
