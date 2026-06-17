<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\SessionsController;

//Welcome page 
Route::get('/', function () {
    return view('ideas/welcome');
});

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



//register 
Route::get('register', [AuthController::class, 'create']); 
Route::post('register', [AuthController::class, 'store']); 

//Login 
Route::get('/login', [SessionsController::class, 'create']);
Route::post('login', [SessionsController::class, 'store']);

//Logout 
Route::delete('/logout', [SessionsController::class, 'destroy']);
