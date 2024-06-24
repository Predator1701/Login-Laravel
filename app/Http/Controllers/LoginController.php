<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function create(){

        return view('login.create');
    }

    public function store(Request $request)   {

       
        $credentials = $request->only(['name', 'email', 'password']);
      
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // $user = User::where('email', $request->email)->first();
            // Auth::login($user, $remember =true);
            
            return view('User.index');
        }else {
            return Hash::make("1234");
        }
    }

    public function logout(Request $request)
     {
        Auth::logout();
        
        return Auth::user();
        // $request->session()->invalidate(); 
        // $request->session()->regenerateToken();
        // return redirect('/');
     }
}   
