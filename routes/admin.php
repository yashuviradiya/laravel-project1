<?php
use App\Http\Controllers\BController;
use App\Http\Controllers\Blog1Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory',SubcategoryController::class);

   //Route::get('/settings',[SettingController::class,'edit'])->name('setting.edit');
   //Route::put('/settings/{setting}',[SettingController::class,'update'])->name('setting.update');
   //Route::get('settings/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');

   Route::get('/settings', [SettingController::class, 'edit'])->name('setting.edit');
   Route::post('/settings',[SettingController::class,'update'])->name('setting.update');
   //Route::resource('setting',SettingController::class);

    Route::resource('product', ProductController::class);
    Route::resource('product1',Product1Controller::class);


    // Route::resource('b',BController::class);
    // Route::resource('product2',Product2Controller::class);
    // routes/web.php





    // Route::get('getcategory',[FrontController::class,'getcategory'])->name('getcategory');
     Route::get('getsubcategory',[ProductController::class,'getsubcategory'])->name('getsubcategory');


});

