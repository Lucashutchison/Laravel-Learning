<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome'); 
  
  });

Route::get('/about', function () {
    return view('about'); 
  
  });

Route::get('/contact', function () {
    return view('contact'); 
  
  });
