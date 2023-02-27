<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\posts;
use App\Http\Controllers\posts_controller;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/all', [posts_controller::class, 'getAllPosts']);
// Route::get('{id}', [posts_controller::class, 'getPost'])->name('view_one_post');
Route::resource('Post',PostController::class); 