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
//if u dont want to pass id in the url, u can pass in slugs
Route::get('/{slug}', function ($slug) {
   $post = App\Models\Post::whereSlug($slug)->first();
   return view('post', ['post'=> $post]);
});

Route::get('/', function () {
    return view('welcome');
});
