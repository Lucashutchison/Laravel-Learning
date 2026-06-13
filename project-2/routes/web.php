<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;

//index page
Route::get('/ideas', function () {
   
    $ideas = idea::all();


    return view('ideas.index' , [
        'ideas' => $ideas,
    ]);
});

//show page
Route::get('/ideas/{idea}', function (Idea $idea) {

    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

//create page
Route::post('/ideas', function () {
    $idea = request('idea');

    idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    return redirect('/');
});

//Edit page 
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});


Route::get('/delete-ideas', function () {

    idea::truncate();                        //Note: this will delete all records from the ideas table

    return redirect('/');
});