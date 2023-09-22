<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifiesEmails;
use App\Http\Controllers\SellerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userapi', [SellerController::class, 'user']);
Route::post('/registerapi', [SellerController::class, 'register']);
Route::post('/loginapi', [SellerController::class, 'login']);
//email 
Route::get('email/verify/{id}/{hash}', [VerifiesEmails::class,'verify'])->name('verification.verify');