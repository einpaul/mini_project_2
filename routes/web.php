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

Route::post('/contact', 'ContactController@createContact')->name('contact');

//        $data = request()->all();
//        echo "Email: ". $data['email']. '<br>';
//        echo "Body: ". $data['body'];



Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
});


