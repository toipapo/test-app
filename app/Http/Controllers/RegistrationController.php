<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
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
        UserAccount::create($request->all());
        return redirect('register');
    }
}
