<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------

|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form','PostsController@form')->name('form');

Route::post('/insert','PostsController@insert')->name('insert');

Route::get('/insert',function(){
    return view ('posts.congrts');
});

Route::get('/read','PostsController@read')->name('read');

Route::get('/show/{id}','PostsController@show')->name('show');;

//Route::get('individualshow/{id}','PostsController@individualshow');
Route::get('/edit1','PostsController@edit1');


Route::get('/edit/{id}','PostsController@edit')->name('edit');

Route::post('/update/{id}','PostsController@update')->name('update');

Route::get('/delete/{id}','PostsController@delete')->name('delete');

