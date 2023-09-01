<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

// cars
Route::get('/post-car', [Carscontroller::class, 'create']);
Route::post('/cars', [CarsController::class, 'store']);



Route::get('/home', [CarsController::class, 'index']);
Route::get('/', function () {
    return redirect('home');
});
