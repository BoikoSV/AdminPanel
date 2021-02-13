<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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


Route::group(['prefix' => 'admin', 'as' => 'admin.'] ,function (){

    //Dashboard
    Route::get('/', [Admin\MainController::class, 'index'])->name('dashboard');

    //Категория
    Route::resource('/category', Admin\CategoryController::class)->except('show', 'edit', 'update');

});
