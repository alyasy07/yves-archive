<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionController;

Route::get('/', [FashionController::class, 'index']);
