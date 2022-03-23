<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

route::get('/expenses',[ExpenseController::class,'index']);
route::get('/expenses/{id}',[ExpenseController::class,'show']);
route::post('/expenses/create',[ExpenseController::class,'store']);
route::put('/expenses/update/{id}',[ExpenseController::class,'update']);
route::delete('/expenses/delete/{id}',[ExpenseController::class,'delete']);
