<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
	
     $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
		
		if(!$validate){
			
			dd('11111');
		
return RedirectResponse([
'name' => 'Name is required',
'email' => 'Email is required',
'password' => 'Password is required',

]);
		
			
		} else {
			dd('2222');
			
		User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);	
			
		}

       dd('333'); 

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
	
	public function showLoginForm(){
		
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
}

public function forgotpassword(){
		
    return view('auth.forgot_password');
}


	
	
}