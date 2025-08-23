<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RestApi;

Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API is working!'
    ]);
});

Route::post('/checking_api', [RestApi::class, 'checking_api']);
// Route::get('/checking_api', [RestApi::class, 'checking_api']);
