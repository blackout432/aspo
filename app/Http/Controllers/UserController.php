<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name'=> ['required', 'max:255'],
            'email'=> ['required','email', 'max:255', 'unique:users'],
            'password'=> ['required','confirmed']
        ]);
        dd($request->all());
    }

    public function login()
    {
        return view('user.login');
    }
}
