<?php


use App\Http\Controllers\SingupController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Singin',[SingupController::class,'singin'])->name("singin");

Route::get('/Singup',[SingupController::class,'singup'])->name("singup");

Route::get('/stor',[SingupController::class,'stor'])->name('stor');

Route::get('/index',[SingupController::class,'index'])->name('index');

Route::get('/password_forget',[SingupController::class,'password_forget'])->name('password_forget');

Route::get("/main_log",[SingupController::class,'main'])->name('main_log');

Route::post("/log_in",[SingupController::class,'log_in'])->name('log_in');

// Route::get("user_interface/{id}",[SingupController::class,'user_interface'])->name('user_interface');