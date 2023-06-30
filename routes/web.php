<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web_Controller;


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
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', [Web_Controller::class, 'home']);
Route::get('/about', [Web_Controller::class, 'about']);
Route::get('/resume', [Web_Controller::class, 'resume']);
Route::get('/portofolio', [Web_Controller::class, 'portofolio']);
Route::get('/portofolio/web_bkpsdm', [Web_Controller::class, 'web_bkpsdm']);
Route::get('/portofolio/sigendis', [Web_Controller::class, 'sigendis']);
Route::get('/portofolio/space_shooter', [Web_Controller::class, 'space_shooter']);

