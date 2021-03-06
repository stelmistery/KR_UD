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
//
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', function(){
    return view('library.main');
});

Route::get('/lib/{page}', 'LibraryController@Librarypage', function ($page){})->middleware('auth');

Route::get('/lib/createorders/create', 'LibraryController@Createorders')->middleware('auth');
Route::get('/lib/createreaders/create', 'LibraryController@Createreader')->middleware('auth');
Route::get('/lib/createbooks/create', 'LibraryController@Createbooks')->middleware('auth');
Route::get('/lib/closeorder/close', 'LibraryController@Closeoerder')->middleware('auth');

Route::any('/auth', 'LibraryController@Librarianlogin');
//Route::any('/main', 'LibraryController@libbooks');




