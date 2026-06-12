<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
   $ideas = \Illuminate\Support\Facades\DB::table('ideas')->get();



    return view('ideas' , [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/');
});

// Temporary route to clear the session data for ideas
Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});