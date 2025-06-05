<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


Route::resource('/', RestaurantController::class);
