<?php

use App\Models\Candidate;
use Illuminate\Support\Facades\Route;


Route::prefix('api')->group(function () {
    Route::get('/candidates', function (){
        return Candidate::all()->toArray();
    });
});
