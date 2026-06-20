<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('registers a new user', function () {
    visit('/register') 
        ->fill ('name', 'John Doe')
        ->fill ('email', 'johndoe@email.com') 
        ->fill ('password', 'password123')
        ->press('@reg-button')
        ->assertPathIs('/ideas');


    expect(User::where('email', 'johndoe@email.com')->exists())->toBe(true); 

});


