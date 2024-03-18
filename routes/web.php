<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePostNew;
use App\Livewire\CreatePost;
use App\Livewire\ShowPost;

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

Route::get('/counter', Counter::class);
Route::get('/counter-new', CreatePostNew::class);
Route::get('/posts', CreatePost::class);
Route::get('/posts/{post}', ShowPost::class);

