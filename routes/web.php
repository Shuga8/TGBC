<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SubscribersController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/general-overseer', [PagesController::class, 'general_overseer'])->name('general_overseer');
Route::get('/mummy-go', [PagesController::class, 'mummy_go'])->name('mummy_go');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/our-pastors', [PagesController::class, 'pastors'])->name('pastors');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PagesController::class], 'single')->name('blog.single');
Route::post('/contact', [PagesController::class, 'send'])->name('send_contact_message');
Route::post('/subscribe', [SubscribersController::class, 'index'])->name('subscribe');
