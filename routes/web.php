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

Route::get('/', function () {
    return view('welcome');
});

Route ::get('test', function(){
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

Route::get('posts/{post}', function($post){
    $posts = [

        'first_post' => 'Hello this is my first Post',
        'second_post' => 'This is my second post'
    ];

    return view('post',[
        'post' => $posts[$post]
    ]);
});
