<?php

use App\Http\Controllers\Api\HelloController;
use Illuminate\Support\Facades\Route;



Route::get('/user', function () {
    return response()->json("hello get user");
});
Route::post('/user', function () {
    return response()->json("hello post user");
});
Route::delete('/user/{id}', function ($id) {
    return response('delete'.$id,200) ;
});

Route::put('/user/{id}', function ($id) {
    return response('PUT'.$id,200);
});
Route::get('/hello', [HelloController::class, 'index']);
