<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingupController;

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
    return view("Singin",['title'=>'Singin']);
})->name("singin");

Route::get('/Singup',function(){
    return view("Singup",["title"=>'Singup']);
})->name("singup");


Route::get('/stor',[SingupController::class],'stor')->name('stor');

// Route::get('/jjhh',[SingupController::class],'jjhh')->name('jjhh');

// Route::get('/index',[SingupController::class],'index')->name('index');


Route::get('/password_forget',function(){
    return view("Password_forget",["title"=>'Password Forgot']);
})->name('password_forget');

