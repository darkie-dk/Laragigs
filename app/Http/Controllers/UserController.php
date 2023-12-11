<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register/create form
    public function create () {
        return view('users.register');
    }

    //create new user
    public function store (Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        
        //create user
        $user = User::create($formFields);

        //login
        auth()->login($user);
        
        return redirect('/')->with('message', 'User created and loged in!');
    }

    public function logout (Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been loged out!');
    }

    public function login () {
        return view('users.login');
    }

    public function authenticate (Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You have been loged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

}
