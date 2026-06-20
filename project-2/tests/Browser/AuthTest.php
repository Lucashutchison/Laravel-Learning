<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('registers a new user', function () {
    $this->post('/register', [
        'name' => 'John',
        'email' => 'jd@email.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ])->assertRedirect('/');
});

 expect(User::where('email', 'jd@email.com')->exists())->toBe(true); 

