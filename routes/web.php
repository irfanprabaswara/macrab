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


//route CRUD for users
Route::get('/users','UsersController@index');
Route::get('/users/tambah','UsersController@tambah');
Route::post('/users/store','UsersController@store');
Route::get('/users/edit/{id}','UsersController@edit');
Route::post('/users/update','UsersController@update');
Route::get('/users/hapus/{id}','UsersController@hapus');
Route::get('/accept','UsersController@accept');
Route::get('/accept/{id}','UsersController@approve');


// empty session
// Jika belum login
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', 'Auth\LoginControl@get_login');
    Route::post('/login', 'Auth\LoginControl@post_login');

    //register user baru
Route::get('/register', 'UserPengguna\UserPenggunaControl@insert_user');
Route::post('/register/post_user', 'UserPengguna\UserPenggunaControl@post_user');
});

//Logout
Route::get('logout', '\App\Http\Controllers\UserPengguna\IndexHomeControl@logout');


// import excel
Route::post('/regional/import_excel', 'ExcelController@import_excel');

// Jika sudah login
Route::group(['middleware' => ['ceklogin']], function () {

    // home
    Route::get('/', 'IndexHomeControl@get');
    Route::get('/home', 'IndexHomeControl@get');
    // logout
    Route::get('/logout', 'IndexHomeControl@logout');


    //route CRUD
    Route::get('/users', 'UsersController@index');
    Route::get('/users/tambah', 'UsersController@tambah');
    Route::post('/users/store', 'UsersController@store');
    Route::get('/users/edit/{id}', 'UsersController@edit');
    Route::post('/users/update', 'UsersController@update');
    Route::get('/users/hapus/{id}', 'UsersController@hapus');

    // import excel
    Route::post('/regional/import_excel', 'ExcelController@import_excel');

    // my ticket
    Route::get('/mytickets', 'MyTickets\MyTicketsController@get_mytickets');
    Route::get('/mytickets/approve/{idTiket}', 'MyTickets\MyTicketsController@post_approve');
    Route::get('/mytickets/decline/{idTiket}', 'MyTickets\MyTicketsController@post_decline');

    Route::get('/mytickets/booking_core', 'MyTickets\MyTicketsController@get_mytickets_bookingcore');
    Route::get('/mytickets/booking_core/approve/{idTiket}', 'MyTickets\MyTicketsController@post_approve');
    Route::get('/mytickets/booking_core/decline/{idTiket}', 'MyTickets\MyTicketsController@post_decline');

    // sto
    Route::get('/sto', 'StoController@index');
    Route::get('/sto/tambah', 'StoController@Add');
    Route::post('/sto/store', 'StoController@store');
    Route::get('/sto/edit/{id}', 'StoController@edit');
    Route::post('/sto/update', 'StoController@update');
    Route::get('/sto/hapus/{id}', 'StoController@delete');
    // Route::get('/sto', 'Sto\StoController@get_list_sto_admin');

    // witel
    Route::get('/witel', 'WitelController@index');
    Route::get('/witel/tambah', 'WitelController@Add');
    Route::post('/witel/store', 'WitelController@store');
    Route::get('/witel/edit/{id}', 'witelController@edit');
    Route::post('/witel/update', 'witelController@update');
    Route::get('/witel/hapus/{id}', 'witelController@delete');
    // Route::get('/witel', 'Witel\WitelController@get_list_witel_admin');

    // logout
    Route::get('/logout', 'WelcomeControl@logout');

    // TODO MANCORE
    Route::get('/mancore/insert_mancore', 'Mancore\MancoreControl@insert_mancore');
    Route::post('/mancore/post_mancore', 'Mancore\MancoreControl@post_mancore');
    Route::post('/mancore/doAddGpon', 'Mancore\MancoreControl@doAddGpon');

    Route::get('/mancore/booking/{idGpon}/{idFtmEa}/{idFtmOa}/{idFeeder}/{idOdc}/{idDistribusi}/{idOdp}', 'Mancore\MancoreControl@edit_booking_core');


    Route::get('/historydata', 'HistoryDataControl@get');

    //? MENDAPATKAN LIST DATA MANCORE
    Route::get('/', 'Mancore\MancoreControl@index');


    Route::get('/excelhome', 'ExcelController@index');
    Route::get('/regional/export_excel', 'ExcelController@export_excel');
});
