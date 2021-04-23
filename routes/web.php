<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
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


//admin


Route::get('/admin',[AdminController::class,'viewadmin'])->name('admin.view');
Route::get('/admin/list',[AdminController::class,'viewadminlist'])->name('admin.list');
Route::post('/admin/form',[AdminController::class,'viewadminform'])->name('admin.form');

