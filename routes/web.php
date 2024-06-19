<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WEB\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

// Route::get('/{any?}', function () {
//     return view('app');
// })->where('any', '[\/\w\.-]*');
