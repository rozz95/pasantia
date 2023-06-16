<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
       
        $credentials=$request->validate([
            'email'=>['required','string','email'],
            'password'=>['required','string'],
        ]);
       if( !Auth::attempt($credentials))
       {
           throw ValidationException::withMessages([
            'email'=>'esta mal'
           ]);
       }
       $request->session()->regenerate();
       return redirect()->intended();
    }
}
