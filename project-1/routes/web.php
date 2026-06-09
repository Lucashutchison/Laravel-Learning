<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
   $a = $request->input('a');
   $b = $request->input('b');
   $sum = null;

   if ($a !== null && $b !== null) {
    $sum = $a + $b; 
    
   }

   return "
   <h1>Mini Sum Calculator</h1> 

   <form method='GET'>
   <input type='number' name='a' placeholder='Enter first number' value='$a'>
   <input type='number' name='b' placeholder='Enter second number' value='$b'>
   <button type='submit'>Add</button>
   </form>

   <h2>Result: " . ($sum ?? 'Please Enter Number Values') . "</h2>
   ";
 
  });

