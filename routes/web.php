<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PostController;

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

Route::controller(PostController::class)
    ->group(function(){
        Route::get('/assurance-chomage', 'AssuranceChomage')->name('AssuranceChomage');
    });