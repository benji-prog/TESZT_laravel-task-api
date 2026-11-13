<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

// ... a te korábbi kódod (Route::apiResource...) innen folytatódik
Route::apiResource('tasks', TaskController::class);
