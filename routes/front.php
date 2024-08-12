<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::name('front.')->group(function () {
    Route::get('/',[FrontController::class,'index'])->name('index');
    Route::get('/shop',[FrontController::class,'shop'])->name('shop');
    Route::get('/shopdetails/{slug?}',[FrontController::class,'shopdetails'])->name('shopdetails');
    Route::get('/shopingcart',[FrontController::class,'shopingcart'])->name('shopingcart');
    Route::get('/checkout',[FrontController::class,'checkout'])->name('checkout');
    Route::get('/blogdetails',[FrontController::class,'blogdetails'])->name('blogdetails');
    Route::get('/blog1',[FrontController::class,'blog1'])->name('blog1');
    Route::get('/contact',[FrontController::class,'contact'])->name('contact');
    Route::post('/contact',[FrontController::class,'contactsubmit'])->name('contactsubmit');
    Route::get('/aboutus',[FrontController::class,'aboutus'])->name('aboutus');
    Route::get('/privacypolicy',[FrontController::class,'privacypolicy'])->name('privacypolicy');
});

Route::get('/get-category/{slug}', [FrontController::class,'catgoryslug'])->name('product1.category');
