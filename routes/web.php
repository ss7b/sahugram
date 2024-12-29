<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserControlle;
use App\Http\Controllers\UserController;
use App\Models\Post;
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
require __DIR__.'/auth.php';

Route::get('/{user:username}',[UserController::class, 'index'])->name('user_profile');
Route::get('/{user:username}/edit',[UserController::class, 'edit'])->name('edit_profile')->middleware('auth');
Route::patch('/{user:username}/update',[UserController::class, 'update'])->name('update_profile')->middleware('auth');

Route::get('/explore', [PostController::class,'explore'])->name('explore');
Route::controller(PostController::class)->middleware('auth')->group(function ()  {
    Route::get('/', 'index')->name('home_page');
    Route::get('/p/create',  'create')->name('create_post');
    Route::post('/p/create',  'store')->name('store_post');
    Route::get('/p/{post:slug}',  'show')->name('show_post');
    Route::get('/p/{post:slug}/edit',  'edit')->name('edit_post');
    Route::patch('/p/{post:slug}/update',  'update')->name('update_post');
    Route::delete('/p/{post:slug}/delete',  'destroy')->name('delete_post');
});

Route::get('/p/{post:slug}/like', LikeController::class)->middleware('auth');
Route::get('/{user:username}/follow', [UserController::class, 'follow'])->middleware('auth')->name('follow_user');
Route::get('/{user:username}/unfollow', [UserController::class, 'unfollow'])->middleware('auth')->name('unfollow_user');



Route::post('/p/{post:slug}/comment', [CommentController::class, 'store'])->name('store_comment')->middleware('auth');

