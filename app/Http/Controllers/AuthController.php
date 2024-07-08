<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegisterForm(){
        // $user = User::all();
        return view('auth.register');
    }
    public function register(){

        // to validate the data
        request()->validate([
            'name' => 'required|min:4',
             'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // get the user data
        $username = request()->username;
        $email = request()->email;
        $password = request()->password;
        // store the user data in database
       $user = User::create([
           'name' => $username,
           'email' => $email,
           'password' => bcrypt($password),
        ]);
        Auth::login($user);
        return to_route('index');
    }
    public function logout(){
        Auth::logout();
        return to_route('index');
    }
    
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
        
        // to validate the data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // to check if the user is valid
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return to_route('index');
        }
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
    }

}
