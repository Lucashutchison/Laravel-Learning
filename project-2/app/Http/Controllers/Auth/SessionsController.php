<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth/login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate
        $validated = $request->validate([
            'email'=> ['required', 'email', 'string', 'max:255'],
            'password'=> ['required', Password::default()],
        ]);
        //Attempt Login
        if (Auth::attempt ($validated)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email'=> 'The provided email does not match our records',
            'password' => 'incorrect password',
        ]);
        
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
