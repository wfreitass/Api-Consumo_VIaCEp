<?php

use App\Http\Controllers\Api\ViaCepController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/search/local/{cep}', [ViaCepController::class, 'search'])->name('search');
