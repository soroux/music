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

Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('/blog',[\App\Http\Controllers\IndexController::class,'blog'])->name('index.blog');
Route::get('/contact',[\App\Http\Controllers\IndexController::class,'contact'])->name('index.contact');
Route::post('/mail',[\App\Http\Controllers\IndexController::class,'mail'])->name('index.mail');
Route::get('/blog/{category}/category',[\App\Http\Controllers\IndexController::class,'blogCategory'])->name('index.blog.category');
Route::get('/blog/{post}/post',[\App\Http\Controllers\IndexController::class,'showPost'])->name('index.blog.post');
Route::post('/blog/{post}/post',[\App\Http\Controllers\CommentController::class,'create'])->name('index.blog.post.comment');
Route::get('/radio',[\App\Http\Controllers\IndexController::class,'radio'])->name('index.radio');
Route::get('/playlist',[\App\Http\Controllers\IndexController::class,'playlist'])->name('index.playlist');
Route::get('/blog/{playlist}/playlist',[\App\Http\Controllers\IndexController::class,'playlistCategory'])->name('index.playlist.category');
Route::get('/playlist/{playlist}/show',[\App\Http\Controllers\IndexController::class,'playlistShow'])->name('index.playlist.show');
Route::get('/music/{category}/show',[\App\Http\Controllers\IndexController::class,'musicShow'])->name('index.music');
Route::get('/slider/{slider}/show',[\App\Http\Controllers\IndexController::class,'sliderShow'])->name('index.slider.show');




Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/musics',[\App\Http\Controllers\MusicController::class,'index'])->middleware('auth')->name('dashboard.musics');
Route::get('/dashboard/musics/add',[\App\Http\Controllers\MusicController::class,'add'])->middleware('auth')->name('dashboard.musics.add');
Route::post('/dashboard/musics/store',[\App\Http\Controllers\MusicController::class,'store'])->middleware('auth')->name('dashboard.musics.store');
Route::get('/dashboard/musics/{music}/edit',[\App\Http\Controllers\MusicController::class,'edit'])->middleware('auth')->name('dashboard.music.edit');
Route::patch('/dashboard/musics/{music}/update',[\App\Http\Controllers\MusicController::class,'update'])->middleware('auth')->name('dashboard.music.update');
Route::delete('/dashboard/musics/{music}/destroy',[\App\Http\Controllers\MusicController::class,'destroy'])->middleware('auth')->name('dashboard.music.delete');

Route::get('/dashboard/slider',[\App\Http\Controllers\SliderController::class,'index'])->middleware('auth')->name('dashboard.slider');
Route::get('/dashboard/slider/{slider}/edit',[\App\Http\Controllers\SliderController::class,'edit'])->middleware('auth')->name('dashboard.slider.edit');
Route::patch('/dashboard/slider/{slider}/update',[\App\Http\Controllers\SliderController::class,'update'])->middleware('auth')->name('dashboard.slider.update');

Route::get('/dashboard/radio',[\App\Http\Controllers\RadioController::class,'index'])->middleware('auth')->name('dashboard.radio');
Route::get('/dashboard/radio/{radio}/edit',[\App\Http\Controllers\RadioController::class,'edit'])->middleware('auth')->name('dashboard.radio.edit');
Route::patch('/dashboard/radio/{radio}/update',[\App\Http\Controllers\RadioController::class,'update'])->middleware('auth')->name('dashboard.radio.update');

Route::get('/dashboard/playlist',[\App\Http\Controllers\PlaylistController::class,'index'])->middleware('auth')->name('dashboard.playlist');
Route::get('/dashboard/playlist/create',[\App\Http\Controllers\PlaylistController::class,'create'])->middleware('auth')->name('dashboard.playlist.create');
Route::post('/dashboard/playlist/store',[\App\Http\Controllers\PlaylistController::class,'store'])->middleware('auth')->name('dashboard.playlist.store');
Route::get('/dashboard/playlist/{playlist}/edit',[\App\Http\Controllers\PlaylistController::class,'edit'])->middleware('auth')->name('dashboard.playlist.edit');
Route::patch('/dashboard/playlist/{playlist}/update',[\App\Http\Controllers\PlaylistController::class,'update'])->middleware('auth')->name('dashboard.playlist.update');
Route::delete('/dashboard/playlist/{playlist}/destroy',[\App\Http\Controllers\PlaylistController::class,'destroy'])->middleware('auth')->name('dashboard.playlist.delete');

Route::get('/dashboard/post',[\App\Http\Controllers\PostController::class,'index'])->middleware('auth')->name('dashboard.post');
Route::get('/dashboard/post/create',[\App\Http\Controllers\PostController::class,'create'])->middleware('auth')->name('dashboard.post.create');
Route::post('/dashboard/post/store',[\App\Http\Controllers\PostController::class,'store'])->middleware('auth')->name('dashboard.post.store');
Route::get('/dashboard/post/{post}/edit',[\App\Http\Controllers\PostController::class,'edit'])->middleware('auth')->name('dashboard.post.edit');
Route::patch('/dashboard/post/{post}/update',[\App\Http\Controllers\PostController::class,'update'])->middleware('auth')->name('dashboard.post.update');
Route::delete('/dashboard/post/{post}/destroy',[\App\Http\Controllers\PostController::class,'destroy'])->middleware('auth')->name('dashboard.post.delete');

Route::get('/dashboard/comment',[\App\Http\Controllers\CommentController::class,'index'])->middleware('auth')->name('dashboard.comment');
Route::patch('/dashboard/comment/{comment}/update',[\App\Http\Controllers\CommentController::class,'update'])->middleware('auth')->name('dashboard.comment.update');
Route::delete('/dashboard/comment/{comment}/destroy',[\App\Http\Controllers\CommentController::class,'destroy'])->middleware('auth')->name('dashboard.comment.destroy');

Route::get('/dashboard/email',[\App\Http\Controllers\EmailController::class,'index'])->middleware('auth')->name('dashboard.email');
Route::get('/dashboard/email/sent',[\App\Http\Controllers\EmailController::class,'sent'])->middleware('auth')->name('dashboard.email.sent');
Route::get('/dashboard/email/{email}/read',[\App\Http\Controllers\EmailController::class,'read'])->middleware('auth')->name('dashboard.email.read');
Route::get('/dashboard/email/{email}/reply',[\App\Http\Controllers\EmailController::class,'reply'])->middleware('auth')->name('dashboard.email.reply');
Route::post('/dashboard/email/send',[\App\Http\Controllers\EmailController::class,'send'])->middleware('auth')->name('dashboard.email.send');

Route::get('/dashboard/gallery',[\App\Http\Controllers\GalleryController::class,'index'])->middleware('auth')->name('dashboard.gallery');
Route::get('/dashboard/gallery/create',[\App\Http\Controllers\GalleryController::class,'create'])->middleware('auth')->name('dashboard.gallery.create');
Route::post('/dashboard/gallery/store',[\App\Http\Controllers\GalleryController::class,'store'])->middleware('auth')->name('dashboard.gallery.store');
Route::get('/dashboard/gallery/{gallery}/edit',[\App\Http\Controllers\GalleryController::class,'edit'])->middleware('auth')->name('dashboard.gallery.edit');
Route::patch('/dashboard/gallery/{gallery}/update',[\App\Http\Controllers\GalleryController::class,'update'])->middleware('auth')->name('dashboard.gallery.update');
Route::delete('/dashboard/gallery/{gallery}/destroy',[\App\Http\Controllers\GalleryController::class,'destroy'])->middleware('auth')->name('dashboard.gallery.delete');

