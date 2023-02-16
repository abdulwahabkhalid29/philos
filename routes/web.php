<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;

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
// Admin
Route::get('dashboard' , [FrontendController::class , 'dashboard'])->name('admin.pages.dashboard');


Route::get('/' , [FrontendController::class , 'index'])->name('pages.index');
Route::get('checkout' , [FrontendController::class , 'checkout'])->name('pages.checkout');
Route::get('list/{slug}' , [FrontendController::class , 'list'])->name('pages.list');
Route::get('cart' , [FrontendController::class , 'cart'])->name('pages.cart');
Route::get('detail/{id}' , [FrontendController::class , 'detail'])->name('pages.detail');
Route::get('blog/{id}' , [FrontendController::class , 'blog'])->name('pages.blog');
Route::get('brand-category/{slug}' , [FrontendController::class , 'brand'])->name('pages.brand');
Route::get('contact' , [FrontendController::class , 'contact'])->name('pages.contact');
Route::get('page/{id}' , [FrontendController::class , 'page'])->name('pages.page');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Profile   
Route::get('profile/edit' , [ProfileController::class , 'edit'])->name('pages.profile.edit');
Route::post('profile/update' , [ProfileController::class , 'update'])->name('pages.profile.update');

//Comment
Route::post('comment' , [CommentController::class , 'store'])->name('pages.store');


//contact   
Route::get('contact' , [ContactController::class , 'index'])->name('pages.contact');
Route::post('contact/store' , [ContactController::class , 'store'])->name('contact.store');
