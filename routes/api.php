<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::prefix('v1')->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('category/{name}', [ProductController::class, 'getProductsByCategoryName']);
    Route::get('category', [ProductController::class, 'getCategoriesWithProductsQuantity']);
});