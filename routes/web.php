<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateTempController;

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

Route::get('/createtemplate', [CreateTempController::class, 'returnview'])->name('ctemps');
Route::post('/createtemplate', [CreateTempController::class, 'store']);