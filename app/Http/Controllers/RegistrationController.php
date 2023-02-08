<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{   
    public function index()
    {
        return view('register');
    }
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::latest()->create($request->all());
        return redirect('register');
    }
}
