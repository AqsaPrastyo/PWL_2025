<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/article/{ID}', function
// () { $postId = request ('ID');
// return 'Halaman ke-'.$postId;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Herry'.$name;});