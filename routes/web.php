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

// Route::get('/', function () {
//     return view('index');
// });

// // mengirimkan data ke dalam view
// Route::get('/about', function () {
//     $nama = 'Tika';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
//menampilkan seluruh data menggunakan methode index
Route::get('/mahasiswa', 'MahasiswaController@index');


//students
// Route::get('/students', 'StudentsController@index');
// //1 atau {student}
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// //post untuk insert data ke dalam database
// Route::post('/students', 'StudentsController@store');
// //delete untuk hapus data
// Route::delete('/students/{student}', 'StudentsController@destroy');
// //edit
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// //patch
// Route::patch('/students/{student}', 'StudentsController@update');

//cukup pake resource jadi tidak perlu bikin manual
Route::resource('students','StudentsController');