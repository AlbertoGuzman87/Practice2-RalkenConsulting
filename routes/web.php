<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;


Route::get('/', [PostController::class, 'get_list_user'])->name('posts.get_list_user');
Route::get('/posts/{id}', [PostController::class, 'get_list_posts'])->name('posts.get_list_posts');
Route::get('/albums/{id}', [PostController::class, 'get_list_albums'])->name('posts.get_list_albums');
Route::get('/album/photos/{id}', [PostController::class, 'get_list_photos'])->name('posts.get_list_photos');