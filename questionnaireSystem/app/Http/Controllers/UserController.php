<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // validate the user input
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
        ]);
    
        // create the user
        $user = new User;
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
    
        // redirect to the home page with a success message
        return redirect('/')->with('success', 'User created successfully!');
    }
    
}
