<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;

Route::get('/', function () {
   
    $ideas = idea::all();


    return view('ideas' , [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    return redirect('/');
});

// Temporary route to clear the session data for ideas
Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});