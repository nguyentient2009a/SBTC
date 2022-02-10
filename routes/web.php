<?php

use App\Http\Controllers\RequestDetailController;
use App\Http\Controllers\TradeRequestController;
use Database\Seeders\TradeRequestSeeder;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountForAdminController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\AccountTable;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostForAdmin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TradeController;
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
//client

Route::get('/',[IndexController::class,'index']);
Route::get('/detail/{id}',[IndexController::class,'show']);


Route::get('/trade-request/{id}',[TradeRequestController::class,'index']);
Route::post('/trade-request/{id}',[TradeRequestController::class,'store']);

Route::get('/request-detail/{id}', [RequestDetailController::class, 'index']);
Route::get('/pending-detail/{id}', [RequestDetailController::class, 'pendingDetail']);
Route::get('/pending-detail/{id}/accept', [RequestDetailController::class, 'acceptPending']);
Route::get('/pending-detail/{id}/cancel', [RequestDetailController::class, 'cancelPending']);

Route::get('/category', [CategoryClientController::class, 'index']);

Route::get('/personal/{id}',[PersonalController::class,'index']);
Route::get('/my-request',[PersonalController::class,'tradeRequest']);
Route::get('/request-pending',[PersonalController::class,'requestPending']);

Route::get('/contact-us',[ContactUsController::class,'index']);
Route::get('/about-us',[AboutUsController::class,'index']);
Route::get('/policy',[PolicyController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'store']);


Route::get('/account-settings/{id}',[AccountSettingsController::class,'index']);
Route::post('/account-settings/{id}',[AccountTable::class,'update']);

Route::get('/post/upload',[TradeController::class,'index']);
Route::post('/post/upload',[TradeController::class,'store']);
Route::get('/post/city',[TradeController::class,'getCity']);
Route::get('/post/district',[TradeController::class,'getDistrict']);
Route::get('/post/ward',[TradeController::class,'getWard']);
//Route::post('/quanhuyen/{id}', [TradeController::class, 'getQuanHuyen'])->name('get.qh');
//Route::post('/phuongxa/{id}', [TradeController::class, 'getPhuongXa']);


//admin

Route::get('/admin/index',[AdminController::class,'index']);
Route::get('/admin/login',[AdminController::class,'login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::post('/admin/login',[AdminController::class,'store']);

Route::get('/admin/account-list',[AccountForAdminController::class,'list']);
Route::post('/admin/account-list/{id}',[AccountForAdminController::class,'update']);
Route::delete('/admin/account-list/{id}',[AccountForAdminController::class,'destroy']);

//Route::get('/admin/delete-account',[AccountForAdminController::class,'listDelete']);
//Route::post('/admin/account-pending/{id}',[AccountForAdminController::class,'update']);
//Route::post('/admin/delete-account/{id}',[AccountForAdminController::class,'update']);
//Route::delete('/admin/account-pending/{id}',[AccountForAdminController::class,'destroy']);
//Route::delete('/admin/account-list/{id}',[AccountForAdminController::class,'destroy']);
//Route::get('/admin/account-pending',[AccountForAdminController::class,'index']);

Route::get('/admin/post-list',[PostForAdmin::class,'list']);
Route::post('/admin/post-list/{id}',[PostForAdmin::class,'update']);
Route::delete('/admin/post-list/{id}',[PostForAdmin::class,'destroy']);
//Route::get('/admin/post-pending',[PostForAdmin::class,'index']);
//Route::get('/admin/post-list',[PostForAdmin::class,'list']);
//Route::get('/admin/delete-post',[PostForAdmin::class,'listDelete']);
//Route::post('/admin/delete-post/{id}',[PostForAdmin::class,'update']);
//Route::post('/admin/post-pending/{id}',[PostForAdmin::class,'update']);
//Route::delete('/admin/post-pending/{id}',[PostForAdmin::class,'destroy']);
//Route::delete('/admin/post-list/{id}',[PostForAdmin::class,'destroy']);

Route::get('/admin/edit-about-us',[ConfigController::class,'aboutUsPage']);
Route::get('/admin/edit-contact-us',[ConfigController::class,'contactUsPage']);
Route::get('/admin/edit-policy',[ConfigController::class,'policyPage']);

Route::post('/admin/edit-about-us/',[ConfigController::class,'aboutUsStore']);
Route::post('/admin/edit-contact-us',[ConfigController::class,'contactUsStore']);
Route::post('/admin/edit-policy',[ConfigController::class,'policyStore']);

Route::get('/admin/list-category',[CategoryController::class,'index']);
Route::get('/admin/add-category',[CategoryController::class,'create']);
Route::post('/admin/add-category',[CategoryController::class,'store']);
Route::get('/admin/category/{id}/edit',[CategoryController::class,'edit']);
Route::post('/admin/category/{id}',[CategoryController::class,'update']);
Route::delete('/admin/category/{id}',[CategoryController::class,'destroy']);


Route::get('/location/form',[LocationController::class,'getForm']);
Route::get('/location/city',[LocationController::class,'getCity']);
Route::get('/location/district',[LocationController::class,'getDistrict']);
Route::get('/location/ward',[LocationController::class,'getWard']);



