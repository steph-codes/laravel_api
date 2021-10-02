<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// posts
//CRUD is basically 
//step 1 is get all (GET)/api/posts
//step 2 create a post (POST) /api/posts
//step 3 get a single (GET) /api/posts/{id}
//step 4 update a single (PUT/PATCH) /api/posts/{id}
//step 5 delete (DELETE) /api/posts/{id}

Route::get('/posts');

// create a resource (posts) in laravel

//1. create a database and migrations

//2. create a model

//3. create a service ? Eloquent ORM

//3. crate a controller to get info from db

//4 return that info



// Route::get('/testing-the-api', function(){
//     return ['message' =>'hello'];
// });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
