<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\stopscontroller;
Route::get('/stops', [stopscontroller::class, 'index'])->name('stops.index');
Route::get('/stops/createform', [stopscontroller::class, 'create'])->name('stops.create');
Route::post('/stops/store', [stopscontroller::class, 'store'])->name('stops.store');
Route::get('/stops/showList', [stopscontroller::class, 'showList'])->name('stops.showList');


