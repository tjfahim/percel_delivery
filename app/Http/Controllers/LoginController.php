<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $redirectTo = '/index';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

 

    public function showLoginForm(Request $request)
    {
        if (request()->is('register')) {
            return view('frontend.layouts.footer');
        }

        return view('auth.login');
    }
    public function showRegisterForm(Request $request)
    {
      
        return view('auth.register');
    }

    // Handle the login process manually
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect to the appropriate dashboard based on the user's role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            }
        }

        // Failed login attempt, redirect back with errors
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
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



    // Handle the logout process
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
    
}
