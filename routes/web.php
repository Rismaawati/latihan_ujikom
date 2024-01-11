<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemplateController;

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

Route::get('/', function () {
    return view('login');
});

Route::middleware(['statuslogin'])->group(function(){
    Route::get('template',[TemplateController::class,'template']);
});

Route::post('user/auth',[LoginController::class,'auth']);
Route::get('user/logout',[LoginController::class,'logout']);




