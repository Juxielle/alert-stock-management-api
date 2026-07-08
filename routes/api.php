<?php

use App\Http\Controllers\Products\ProductList;
use App\Http\Controllers\Products\ProductSearch;
use Illuminate\Support\Facades\Route;


Route::prefix('/products')->group(function () {
    Route::get('/', [ProductList::class, 'list']);
    Route::get('/search', [ProductSearch::class, 'search']);
});
