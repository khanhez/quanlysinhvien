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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@form')->name('post.form');
Route::post('/post/save', 'PostController@save')->name('post.save');
// Route::post('/post/update/{_id}', 'PostController@update')->name('post.update');
Route::get('/post/delete/{_id}','PostController@delete')->name('post.delete');
Route::get('/post/update/{_id}','PostController@getupdate')->name('post.getupdate');
Route::post('/post/update/{_id}','PostController@postupdate')->name('post.postupdate');

Route::get('/diem', 'DiemController@form')->name('diem.form');
Route::post('/diem/save', 'DiemController@save')->name('diem.save');
Route::get('/diem/delete/{_id}','DiemController@delete')->name('diem.delete');
Route::get('/diem/update/{_id}','DiemController@getupdate')->name('diem.getupdate');
Route::post('/diem/update/{_id}','DiemController@postupdate')->name('diem.postupdate');