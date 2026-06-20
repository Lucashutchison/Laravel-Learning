<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

it('shows all ideas', function () {
    $this->actingAs($user = User::factory()->create());
        
    $user->ideas()->create([
        'description' => 'Have an Idea',
    ]);

    visit('/ideas')
        ->assertSee('Have an Idea');
})


