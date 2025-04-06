<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health-check', function (Request $request) {
    return "ok";
});

Route::post('/login', function (Request $request) {
    return response()->json([
        'message' => 'Login successful',
        'token' => '16546s-d4f6sdf4sdf-012aasdf-paslx15',
    ]);
});
