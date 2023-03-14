<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', static function () {
//    return view('welcome');
//});

Route::view('/', 'welcome');

Route::get('/post/{id?}', static function ($id = 0) {
    if($id === 0){
        return view('post.list');
    }
//    abort_if(true,404);
    return view('post.details', ['title' => 'Post 1', 'content'=>'It is a great framework']);

})->name('post');
