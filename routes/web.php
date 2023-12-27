<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Models\User;

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
    return view('welcome');
});
Route::view('/user', 'users', ['name' => 'Rihamoo']);
Route::get('/index/riham', function(){
    return view('index');
});
Route::get('/riham/testCont',[Test::class, 'index']);