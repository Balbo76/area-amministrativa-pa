<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// use Illuminate\Support\Facades\Route;

// Tutte le rotte API all'interno di questo gruppo passeranno dal controllo permessi vuoto
Route::middleware(['permessi.api'])->group(function () {

    Route::get('/v1/pratiche', function () {
        return response()->json([
            'status' => 'success',
            'message' => 'Endpoint protetto predisposto con successo',
            'data' => []
        ]);
    });

});
