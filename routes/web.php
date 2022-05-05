<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Panel\panelController;
use \App\Http\Controllers\user\userController;
use \App\Http\Controllers\user\authController;
use \App\Http\Controllers\updateController;

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

Route::get("/panel",[panelController::class,'index'])->name("panel.index");
Route::get('/dashboard' ,[panelController::class,"dashboard"])->name("panel.dashboard")->middleware('isAdmin');
Route::get('/admin-login' ,[panelController::class,"adminLogin"])->name("panel.adminLogin")->middleware('isAdmin');
Route::get('/profile' ,[panelController::class,"profile"])->name("panel.profile")->middleware('isAdmin');
Route::get('/basic-table' ,[panelController::class,"basicTable"])->name("panel.basicTable")->middleware('isAdmin');
Route::get('/' ,[panelController::class,"selectLogin"])->name("panel.select-login");
Route::get('/admin-login' ,[authController::class,"adminLogin"])->name("admin.adminLogin")->middleware('isLogin');
Route::post('/admin-login' ,[authController::class,"login"])->name("admin.login")->middleware('isLogin');
Route::get('/cikis' ,[authController::class,"logout"])->name("admin.logout");
Route::get('/deleteuser/{id}' ,[userController::class,"delete"])->name("delete.user");
Route::get('/goruntule' ,[panelController::class,"userShow"])->name("user.show");
Route::post('/arama' ,[userController::class,"findUser"])->name("find");



Route::resource('kullanici' ,userController::class);
Route::resource('adminkullanici' ,panelController::class);

//USER ROUTE



Route::get('/anasayfa' ,[userController::class,"index"])->name("user.index")->middleware('isUser');
Route::get('/kullanicilar' ,[userController::class,"kullanicilar"])->name("user.kullanicilar")->middleware('isUser');
Route::get('/user-login' ,[authController::class,"kullaniciGiris"])->name("user.userLogin")->middleware("isUserLogin");
Route::post('/user-login' ,[authController::class,"userLogin"])->name("user.login")->middleware("isUserLogin");
Route::post('/aramaa' ,[userController::class,"userFind"])->name("find.user");

Route::get('/usercikis' ,[authController::class,"userLogout"])->name("user.logout");
Route::get('/userprofile' ,[userController::class,"profile"])->name("user.profile");
Route::get('/register' ,[userController::class,"register"])->name("register");
Route::post('/register' ,[authController::class,"register"])->name("auth.register");
Route::get('/useredit' ,[userController::class,"userEdit"])->name("user.edit");
Route::put('/userupdate' ,[userController::class,"updateProfile"])->name("user.update");



