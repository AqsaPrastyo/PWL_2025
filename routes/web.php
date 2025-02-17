<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PhotoController;



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

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Aqsa Herry']);
//     });

Route::get('/greeting', [WelcomeController::class,
'greeting']);

Route::resource('photos', PhotoController::class);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticlesController::class, 'articles']);


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);


Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/article/{ID}', function
// () { $postId = request ('ID');
// return 'Halaman ke-'.$postId;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Herry'.$name;});