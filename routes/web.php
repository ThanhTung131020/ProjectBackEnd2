<?php


use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\ControllerCar;
use App\Http\Controllers\peopleController;
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
Route::get('detail/{id}', [ControllerCar::class, 'delailProduct'])->name('detail.car');
Route::get('admin/car', [ControllerCar::class, 'adminListCar'])->name('admin.car');
Route::get('admin', [ControllerCar::class, 'add'])->name('admin.add');
//Route::post('add', [ControllerCar::class, 'custumAddCar'])->name('add.custom');
Route::get('edit/{id}', [ControllerCar::class, 'edit'])->name('editProducts');
Route::put('updatecar/{id}', [ControllerCar::class, 'update'])->name('editCar');
Route::get('delete/{id}', [ControllerCar::class, 'destroy'])->name('delete');
Route::get('sortname' ,[ControllerCar::class, 'sort'])->name('sortname');
Route::get('nb', [ControllerCar::class, 'sanPhamNoiBat'])->name('nb');


//
Route::get('dstuvan', [peopleController::class, 'dstuvan']);
Route::get('tuvan', [peopleController::class, 'store'])->name('add-tu-van');
