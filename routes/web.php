<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePost;
use App\Livewire\ListPosts;
use App\Livewire\ShowPost;
use App\Livewire\UpdatePost;
use App\Livewire\DeletePost;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', ListPosts::class)->name('posts.index');
Route::get('/posts/{post}', ShowPost::class)->name('post.show');
Route::get('/posts/{post}/delete', DeletePost::class)->name('post.delete');
Route::get('/posts/{post}/edit', UpdatePost::class)->name('post.edit');
Route::get('/create-post', CreatePost::class)->name('post.create');;
