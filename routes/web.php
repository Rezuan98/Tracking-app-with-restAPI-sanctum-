<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[dashboardController::class,'login'])->name('login');
Route::get('/home',[dashboardController::class,'home']);
Route::get('/add/marketer',[dashboardController::class,'addMarketer'])->name('add.marketer');
Route::post('/add/marketer/data',[dashboardController::class,'addMarketerData'])->name('add.marketer.data');
Route::get('/all/marketer',[dashboardController::class,'allMarketer'])->name('all.marketer');

Route::get('/edit/all/marketer/{id}',[dashboardController::class,'editAllMarketer'])->name('edit.all.marketer');
Route::post('/update/marketer/{id}',[dashboardController::class,'updateMarketer'])->name('update.marketer');
Route::get('/delete/marketer/{id}',[dashboardController::class,'deleteMarketer'])->name('delete.marketer');
Route::get('/view/data/{id}',[dashboardController::class,'viewData'])->name('view.data');
Route::get('/today/task/{id}',[dashboardController::class,'todayTask'])->name('today.task');
Route::get('/total/task/{id}',[dashboardController::class,'totalTask'])->name('total.task');
Route::get('/all/attendance/{id}',[dashboardController::class,'allAttendance'])->name('all.attendance');

