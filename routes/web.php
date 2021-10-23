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


// import excel
Route::post('/regional/import_excel', 'ExcelController@import_excel');

Route::group(['middleware' => ['ceklogin']], function () {
    // home
    Route::get('/', 'IndexHomeControl@get');
    Route::get('/home', 'IndexHomeControl@get');

    // my ticket
    Route::get('/mytickets', 'IndexHomeControl@get_mytickets');
    // Route::get('/mytickets', 'MyTickets\MyTicketsController@get_list_tickets_admin');

    // logout
    Route::get('/logout', 'WelcomeControl@logout');

});
