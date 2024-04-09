<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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

Route::controller(pagesController::class)->group(function (){
    Route::get('/home-project', 'home')->name('home');
    Route::get('/posts', 'posts')->name('posts');
    Route::get('/post/{posts:slug}', 'post')->name('post');
 });
