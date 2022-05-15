<?php

use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index']);

Route::get('test_detail_product', [DashboardController::class,'detailProduct']);

Route::get('test_cart_product', [DashboardController::class,'cartProduct']);
Route::get('test_checkout_product', [DashboardController::class,'checkoutProduct']);