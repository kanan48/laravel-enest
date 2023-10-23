<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addproduct/{id}',[ViewController::class, 'addproduct']);
Route::post('/cart_add',[ViewController::class, 'cart_add'])->name('cart_add');
// Route::get('/buynow',[ViewController::class, 'buynow_view']);
Route::get('buynow/{id}',[ViewController::class, 'buynow']);
Route::get('/home',[ViewController::class, 'home']);
// Route::get('/productadd',[ViewController::class, 'productadd']);
Route::get('/contactus',[ViewController::class, 'contactus']);
Route::get('/',[ViewController::class, 'login']);


// signup table
Route::post('signup',[CrudController::class, 'signup'])->name('signup');

//Login page
Route::post('login-data',[CrudController::class, 'login_data'])->name('login.form');

//logout route
Route::get('logout',[CrudController::class, 'logout'])->name('logout');


// Route::get('home',[CrudController::class, 'leftlist']);