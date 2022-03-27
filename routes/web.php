<?php

use App\Http\Controllers\MainController;
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

Route::get(
    '/', [MainController::class, 'mainPage']
);

Route::get(
    '/userProfile',[MainController::class, 'userProfile']);

Route::get('/mainPage', [MainController::class, 'mainPage']);

Route::get('/shoppingBag', [MainController::class, 'shoppingBag']);

Route::post('/addProduct/{productToAdd}', function ($productToAdd = "l") {
    dd($productToAdd);
})->name('addProduct');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/product/search', function () {

})->name('productSearch');



// Authentication routes
//
//Route::name('user.')->group(function() {
//    // private - is the name of the page where only registered users can get to.
//    Route::view('/private', 'private')->middleware('auth')->name('private');
//
//    Route::get('/login', function () {
//        return view('login');
//    })->name('login');
//
//    //Route::post('/login', [MainController::class])
//
//    // Route::get('/logout', []->);
//
//    Route::get('/registration', function () {
//        if (Auth::check()) {
//            return redirect(route('user/private'));
//        }
//        return view('registration');
//    })->name('registration');
//
//    // Route::post('/registration', []);
//});
