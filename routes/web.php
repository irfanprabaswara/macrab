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


//route CRUD
Route::get('/users','UsersController@index');
Route::get('/users/tambah','UsersController@tambah');
Route::post('/users/store','UsersController@store');
Route::get('/users/edit/{id}','UsersController@edit');
Route::post('/users/update','UsersController@update');
Route::get('/users/hapus/{id}','UsersController@hapus');


// empty session

// empty session (Jika belum login)

// empty session (Jika belum login)
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', 'Auth\LoginControl@get_login');
    Route::post('/login', 'Auth\LoginControl@post_login');
});

// Jika sudah login
Route::group(['middleware' => ['ceklogin']], function () {

    // home
    Route::get('/', 'IndexHomeControl@get');
    Route::get('/home', 'IndexHomeControl@get');
    // logout
    Route::get('/logout', 'IndexHomeControl@logout');

    // import excel
    Route::post('/regional/import_excel', 'ExcelController@import_excel');

    // my ticket
    Route::get('/mytickets', 'IndexHomeControl@get_mytickets');
    // Route::get('/mytickets', 'MyTickets\MyTicketsController@get_list_tickets_admin');

    // sto
    Route::get('/sto', 'StoController@index');
    Route::get('/sto/tambah','StoController@Add');
    Route::post('/sto/store','StoController@store');
    Route::get('/sto/edit/{id}','stoController@edit');
    Route::post('/sto/update','stoController@update');
    Route::get('/sto/hapus/{id}','stoController@delete');
    // Route::get('/sto', 'Sto\StoController@get_list_sto_admin');

    // witel
    Route::get('/witel', 'WitelController@index');
    Route::get('/witel/tambah','WitelController@Add');
    Route::post('/witel/store','WitelController@store');
    Route::get('/witel/edit/{id}','witelController@edit');
    Route::post('/witel/update','witelController@update');
    Route::get('/witel/hapus/{id}','witelController@delete');
    // Route::get('/witel', 'Witel\WitelController@get_list_witel_admin');

    // logout
    Route::get('/logout', 'WelcomeControl@logout');

    // TODO MANCORE
    Route::get('/mancore/insert_mancore', 'Mancore\MancoreControl@insert_mancore');

    // TODO MANCORE
    Route::get('/mancore/insert_mancore', 'Mancore\MancoreControl@insert_mancore');

    Route::get('/historydata', 'HistoryDataControl@get');

    //? MENDAPATKAN LIST DATA MANCORE
    Route::get('/', 'Mancore\MancoreControl@index');
    Route::get('/mancore/ajax_mancore', 'Mancore\AjaxMancoreControl@get_ajax_mancore');


    Route::get('/excelhome', 'ExcelController@index');

});
