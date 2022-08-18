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

Route::get('/Singin',function(){
    return view("Singin",['title'=>'Singin','massage'=>'']);
})->name("singin");

Route::get('/Singup',function(){
    return view("Singup",["title"=>'Singup']);
})->name("singup");


Route::get('/stor',[SingupController::class,'stor'])->name('stor');


Route::get('/index',[SingupController::class,'index'])->name('index');


Route::get('/password_forget',function(){
    return view("Password_forget",["title"=>'Password Forgot']);
})->name('password_forget');

Route::get("/main_log",[SingupController::class,'main'])->name('main_log');

Route::get("/log_in",[SingupController::class,'log_in'])->name('log_in');


Route::get("user_interface/{id}",[SingupController::class,'user_interface'])->name('user_interface');