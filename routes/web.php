<?php


use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustumControllerCar;
use App\Http\Controllers\ControllerCar;
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


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('listUser', [CustomAuthController::class, 'listUser'])->name('list.users');
Route::get('details/{id}', [CustomAuthController::class, 'detail'])->name('detail.user');
//car
Route::get('header', [ControllerCar::class, 'header']);
Route::get('home', [ControllerCar::class, 'index'])->name('home');
Route::get('products', [ControllerCar::class, 'listcar'])->name('products');
//