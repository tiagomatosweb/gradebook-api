<?php

use App\Http\Controllers\GradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/grades', [GradeController::class, 'index']);
Route::post('/grades', [GradeController::class, 'store']);
