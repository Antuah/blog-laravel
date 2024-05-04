<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Clases home
Route::get(
    '/',
    HomeController::class

);

//Clases post
Route::get(
    '/posts',
    [
        PostController::class, 'index'
    ]
);

Route::get(
    '/posts/create',
    [
        PostController::class, 'create'
    ]
);;

Route::get(
    '/posts/{post}',
    [
        PostController::class, 'show'
    ]
);



/*
Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Postagem: " . $post . " Categoria: " . $category;
    } else {
        return "Postagem: " . $post;
    }
});
*/

//Get 
//Post
//Put
//Delete
//Patch