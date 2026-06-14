<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;

//index page
Route::get('/ideas', [IdeasController::class, 'index']);
   
   

//Create page
Route::get('/ideas/create', [IdeasController::class, 'create']);



//Edit page
Route::get('/ideas/{idea}/edit', [IdeasController::class, 'edit']);

    

//show page
Route::get('/ideas/{idea}', [IdeasController::class, 'show']);

   

//store page
Route::post('/ideas', [IdeasController::class, 'store']);


//Edit page 
Route::get('/ideas/{idea}/edit', [IdeasController::class, 'edit']);



//Update page
Route::patch('/ideas/{idea}', [IdeasController::class, 'update']);



//destroy 
Route::delete('/ideas/{idea}', [IdeasController::class, 'destroy']);

   

