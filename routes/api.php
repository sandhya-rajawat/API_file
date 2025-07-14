<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("firstApi",[Api::class,'GetList']);
Route::Get("SecApi",[Api::class,'list']);

// Route::view('form','form');

// data insert
Route::Post("Data-insert",[Api::class,'DataInsert']);



