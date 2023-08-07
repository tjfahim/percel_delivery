<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function showRegisterForm(Request $request)
    {
      
        return view('auth.register');
    }


    public function register(Request $request)
    {
        // Validation rules for the registration form
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ];
    
        // Validate the request data
        $request->validate($rules);
    
        // Create a new user instance
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'user';
    
        // Save the user to the database
        $user->save();
    
        // Log in the newly registered user
        Auth::login($user);
    
        // Redirect the user to the dashboard after registration
        return redirect()->route('user.dashboard');
    }
    
}
