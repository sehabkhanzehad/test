<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view("auth.sign-in");
    }

    public function signUp()
    {
        return view("auth.sign-up");
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ['required', 'string', 'max:50'],
            "username" => ['required', 'string', 'max:50'],
            "email" => ['required', 'string', 'email'],
            "password" => ['required', 'string', 'min:5', 'max:10']
        ]);

        User::create($data);

        return redirect()->back()->with('success', 'User created successfully.');
    }
}
