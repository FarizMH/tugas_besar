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
Route::get('/', function () {
    $data = \App\Item::all();
    
    return view('index',compact('data'));
});

Route::get('/profil', function () {
    $data = \App\editProfil::all();
    
    return view('profil_user',compact('file'));
});



Route::get('/about', 'aboutController@about');
Route::get('/home', 'aboutController@home');
Route::get('/index', 'aboutController@home');
Route::get('/indexUser', 'indexUser@home');
Route::resource('bidder', 'BidderController'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_user', 'User@index');
Route::get('/login_user', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register_user', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::resource('file','Item');
Route::get('/item_create', 'item_create@item_create');

Route::get('query', 'CariController@search');

Route::get('/lelangku', function () {
    $data = \App\Item::all();
    
    return view('lelangku',compact('data'));
});
Route::get('/profilku', function () {
    $data = \App\editProfil::all();
    
    return view('profilku',compact('data'));
});

Route::resource('deskripsi','deskripsi_item');
 
Route::resource('edit_profil','profilEdit');