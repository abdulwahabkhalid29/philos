<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ClotheController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PageController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Slider
Route::get('slider/index' , [SliderController::class , 'index'])->name('slider.index');
Route::get('slider/create' , [SliderController::class , 'create'])->name('slider.create');
Route::post('slider/store' , [SliderController::class , 'store'])->name('slider.store');
Route::get('slider/{id}/edit' , [SliderController::class , 'edit'])->name('slider.edit');
Route::post('slider/{id}/update' , [SliderController::class , 'update'])->name('slider.update');
Route::get('slider/{id}/delete' , [SliderController::class , 'delete'])->name('slider.delete');


//Clothe
Route::get('clothe/index' , [ClotheController::class , 'index'])->name('clothe.index');
Route::get('clothe/create' , [ClotheController::class , 'create'])->name('clothe.create');
Route::post('clothe/store' , [ClotheController::class , 'store'])->name('clothe.store');
Route::get('clothe/{id}/edit' , [ClotheController::class , 'edit'])->name('clothe.edit');
Route::post('clothe/{id}/update' , [ClotheController::class , 'update'])->name('clothe.update');
Route::get('clothe/{id}/delete' , [ClotheController::class , 'delete'])->name('clothe.delete');

//category
Route::get('category/index' , [CategoryController::class , 'index'])->name('category.index');
Route::get('category/create' , [CategoryController::class , 'create'])->name('category.create');
Route::post('category/store' , [CategoryController::class , 'store'])->name('category.store');
Route::get('category/{id}/edit' , [CategoryController::class , 'edit'])->name('category.edit');
Route::post('category/{id}/update' , [CategoryController::class , 'update'])->name('category.update');
Route::get('category/{id}/delete' , [CategoryController::class , 'delete'])->name('category.delete');

//blog
Route::get('blog/' , [BlogController::class , 'index'])->name('blog.index');
Route::get('blog/create' , [BlogController::class , 'create'])->name('blog.create');
Route::post('blog/store' , [BlogController::class , 'store'])->name('blog.store');
Route::get('blog/{slug}/edit' , [BlogController::class , 'edit'])->name('blog.edit');
Route::post('blog/{slug}/update' , [BlogController::class , 'update'])->name('blog.update');
Route::get('blog/{slug}/delete' , [BlogController::class , 'delete'])->name('blog.delete');

//sub_category
Route::get('sub_category/' , [SubCategoryController::class , 'index'])->name('sub_category.index');
Route::get('sub_category/create' , [SubCategoryController::class , 'create'])->name('sub_category.create');
Route::post('sub_category/store' , [SubCategoryController::class , 'store'])->name('sub_category.store');
Route::get('sub_category/{id}/edit' , [SubCategoryController::class , 'edit'])->name('sub_category.edit');
Route::post('sub_category/{id}/update' , [SubCategoryController::class , 'update'])->name('sub_category.update');
Route::get('sub_category/{id}/delete' , [SubCategoryController::class , 'delete'])->name('sub_category.delete');


//page
Route::get('page/' , [PageController::class , 'index'])->name('page.index');
Route::get('page/create' , [PageController::class , 'create'])->name('page.create');
Route::post('page/store' , [PageController::class , 'store'])->name('page.store');
Route::get('page/{id}/edit' , [PageController::class , 'edit'])->name('page.edit');
Route::post('page/{id}/update' , [PageController::class , 'update'])->name('page.update');
Route::get('page/{id}/delete' , [PageController::class , 'delete'])->name('page.delete');



//User
Route::get('user/index' , [UserController::class , 'index'])->name('user.index');

//message
Route::get('message/index' , [MessageController::class , 'index'])->name('message.index');