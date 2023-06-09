<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CafeeController;

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
Route::get('/cafe', function () {
    return view('Coffe-shop');
});
Route::post('element',[CafeeController::class,'insertData']); 
Route::get('getData',[CafeeController::class,'getData']);


