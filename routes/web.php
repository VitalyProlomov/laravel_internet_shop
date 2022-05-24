<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
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

Route::get(
    '/', [MainController::class, 'mainPage']
);

Route::get(
    '/userProfile',[MainController::class, 'userProfile']);

Route::get('/mainPage', [MainController::class, 'mainPage']);

Route::get('/shoppingBag', [MainController::class, 'shoppingBag'])->name('/shoppingBag');

Route::get('/catalog', [\App\Http\Controllers\ProductController::class,'allData'])->name('/catalog');

Route::get('/adminPanel', [\App\Http\Controllers\UserController::class,'allData']);
// Adding product to the shopping basket.
//Route::post(
//    '/addProduct',[\App\Http\Controllers\ProductController::class, 'addProductToBag']
//)->name('addProductToBag');

// Adding product to the shopping basket.
Route::post(
    '/addProduct/{id}', [\App\Http\Controllers\UserController::class, 'addProduct']
);

Route::post(
    '/deleteUser', [\App\Http\Controllers\UserController::class, 'deleteUser']
);
//Route::get(
//    '/getProduct',[\App\Http\Controllers\ProductController::class, 'allData']
//)->name('getProduct');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/product/search', function () {

})->name('productSearch');



