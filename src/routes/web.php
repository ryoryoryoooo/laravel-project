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


Route::get('/', 'App\Http\Controllers\PostsController@index')->name('top');

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['create', 'store']]);

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['create', 'store', 'show']]);

Route::resource('comments', 'App\Http\Controllers\CommentsController', ['only' => ['store']]);

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update']]);

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
