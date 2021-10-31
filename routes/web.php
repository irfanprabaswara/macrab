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

// empty session
Route::group(['middleware' => ['guest']], function () {
    //login user
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

Route::group(['middleware' => ['ceklogin']], function () {
    // home
    Route::get('/', 'IndexHomeControl@get');
    Route::get('/home', 'IndexHomeControl@get');

    // my ticket
    Route::get('/mytickets', 'MyTickets\MyTicketsController@get_mytickets');
    Route::get('/mytickets/approve/{idTiket}', 'MyTickets\MyTicketsController@post_approve');
    Route::get('/mytickets/decline/{idTiket}', 'MyTickets\MyTicketsController@post_decline');

    Route::get('/mytickets/booking_core', 'MyTickets\MyTicketsController@get_mytickets_bookingcore');
    Route::get('/mytickets/booking_core/approve/{idTiket}', 'MyTickets\MyTicketsController@post_approve_bookingcore');
    Route::get('/mytickets/booking_core/decline/{idTiket}', 'MyTickets\MyTicketsController@post_decline_bookingcore');

    // sto
    Route::get('/sto', 'StoController@index');
    Route::get('/sto/tambah','StoController@Add');
    Route::post('/sto/store','StoController@store');
    Route::get('/sto/edit/{id}','stoController@edit');
    Route::post('/sto/update','stoController@update');
    Route::get('/sto/hapus/{id}','stoController@delete');
    // Route::get('/sto', 'Sto\StoController@get_list_sto_admin');

    // logout
    Route::get('/logout', 'WelcomeControl@logout');

    Route::get('/historydata', 'HistoryDataControl@get');

    // TODO MANCORE
    Route::get('/insert_mancore', 'Mancore\MancoreControl@insert_mancore');

});
