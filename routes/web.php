<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ValentineController;


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
Route::post('/valentine', [ValentineController::class, 'makeValentine']);
Route::get('/valentine/{token}', [ValentineController::class, 'getValentine']);
Route::get('/valentine/', function(){
    return redirect('/404');
});
Route::get('/404', function(){
    return view('404');
});