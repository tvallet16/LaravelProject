<?php

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

use App\Http\Controllers\ActionController;
use App\Http\Controllers\NavController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/statue', [NavController::class, 'statueListe']);
Route::get('/ajout', [NavController::class, 'formAdd']);


Route::post('/add', [ActionController::class, 'addOne']);
Route::post('/delete', [ActionController::class, 'deleteOne']);
Route::post('/edit', [NavController::class, 'formEdit']);
Route::post('/update', [ActionController::class, 'update']);




