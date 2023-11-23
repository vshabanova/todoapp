<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() 
    {
        $attributes=request()-> validate([
            'name'=>'required|min:5|max:255',
            'username'=>'required|min:5|max:100|unique:users,username',
            'email'=>'required|email|max:100|unique:users,email',
            'password'=>'required|min:7|max:50|confirmed',
            'password_confirmation'=>'required|same:password'
            
        ]);
       
        $user= User::create($attributes);

        auth()->login($user);
        
        return redirect('/')->with('success','Your account has been created.');

    }
}