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

Route::get('/contact', 'ContactController@ContactSection')->name('contact');
Route::get('/insert-data', 'ContactController@InsertData');
Route::post('/data-added', 'ContactController@DataAdded');
Route::get('/delete-data/{id}', 'ContactController@DeleteData');
Route::get('/edit-data/{id}', 'ContactController@EditData');
Route::post('/update-data/{id}', 'ContactController@UpdateData');
Route::get('/view-data/{id}', 'ContactController@ViewData');

Route::post('/insert-post', 'PostController@InsertPost')->name('insert-post');
Route::get('/all-post', 'PostController@AllPost')->name('all-posts');

Route::get('/delete-post/{id}', 'PostController@DeletePost');
Route::get('/edit-post/{id}', 'PostController@EditPost');
Route::post('/update-post/{id}', 'PostController@UpdatePost');
Route::get('/view-post/{id}', 'PostController@ViewPost');

Route::get('/news-add', 'PostController@News')->name('news-add');
Route::post('/insert-news', 'PostController@InsertNews');
Route::get('/all-new', 'PostController@AllNews')->name('all-news');
Route::get('/delete-news/{id}', 'PostController@DeleteNews');
Route::get('/single-news/{id}', 'PostController@SingleNews');


