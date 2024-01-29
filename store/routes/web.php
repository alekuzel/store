<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsignmentController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Items
Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/create', [ItemController::class, 'create']);
Route::post('/items', [ItemController::class, 'store']);
Route::get('/items/{item}', [ItemController::class, 'show']);
Route::get('/items/{item}/edit', [ItemController::class, 'edit']);
Route::put('/items/{item}', [ItemController::class, 'update']);
Route::delete('/items/{item}', [ItemController::class, 'destroy']);

// Users
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);


// Consignments
Route::get('/consignments', [ConsignmentController::class, 'index']);
Route::get('/consignments/{consignment}', [ConsignmentController::class, 'show']);
Route::post('/consignments', [ConsignmentController::class, 'store']);
Route::put('/consignments/{consignment}', [ConsignmentController::class, 'update']);
Route::delete('/consignments/{consignment}', [ConsignmentController::class, 'destroy']);


Route::post('/login',  [AuthController::class, 'login']);

