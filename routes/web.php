<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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

//login register
Route::redirect('/', 'loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    //dashboard
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');


    //admin
    //employee
    Route::group(['prefix'=>'employee','middleware'=>'admin_auth'],function(){
        Route::get('list',[EmployeeController::class,'list'])->name('employee#list');
        Route::get('create/page',[EmployeeController::class,'createPage'])->name('employee#createPage');
        Route::post('create',[EmployeeController::class,'create'])->name('employee#create');
        Route::get('delete/{id}',[EmployeeController::class,'delete'])->name('employee#delete');
        Route::get('edit/{id}',[EmployeeController::class,'edit'])->name('employee#edit');
        Route::post('update/{id}',[EmployeeController::class,'update'])->name('employee#update');
        
    });

    
    //user
    //home
    Route::group(['prefix'=>'user','middleware'=>'user_auth'],function(){
        Route::get('home',function(){
            return view('user.home');
        })->name('user#home');
        
    });
});