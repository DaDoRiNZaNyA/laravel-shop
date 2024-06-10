<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', App\Http\Controllers\API\Product\IndexController::class);
