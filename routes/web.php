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
    return view('index');
});

Route::get('/soal1',function(){
	//mengeluarkan semua data yang ada di table siswa melalui model siswa
	$a=App\siswa::all();
	return $a;
});
//menggunakan find
Route::get('/soal2',function(){
	$a=App\siswa::find(2);
	return $a;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pilihan',function(){
	return view('pilihan1');
});
Route::get('pilihan1',function(){
	return view('pilihan2');
});
Route::get('pilihan2',function(){
	return view('pilihan3');
});
Route::get('pilihan3',function(){
	return view('pilihan4');
});
Route::get('pilihan4',function(){
	return view('pilihan5');
});
Route::get('pilihan5',function(){
	return view('pilihan6');
});
Route::get('login',function(){
	return view('tampilanlogin,');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
