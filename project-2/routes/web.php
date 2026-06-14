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

//store page
Route::post('/ideas', function () {
    $idea = request('description');

    idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

//Edit page 
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('ideas/edit', [
        'idea' => $idea,
    ]);
});

//Update page
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas/' . $idea->id);
});

//destroy 
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas');
});
