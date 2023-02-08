<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login()
    {
        validator(request()->all(), [
                    'email' => ['required', 'email'],
                    'password' => ['required']
                ])->vaidate();

        if (auth()->attempt(
            request()->only(['email','password']),
            request()->filled('remember')
        )){
            return redirect('products');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }
}
