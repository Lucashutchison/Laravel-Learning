<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store(Request $request) 
    { 
        //Validate
            $request->validate([
                'name' => ['required', 'string', 'max:255'], 
                'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
                'password' => ['required', Password::default()],
            ]);

        //Create User
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

        //Login
            Auth::login($user);

        //return to home page
            return redirect('/ideas');
    }
}