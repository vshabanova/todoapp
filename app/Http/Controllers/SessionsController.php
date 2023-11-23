<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view ('/login');
    }

    public function store(){
        $attributes=request()->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ]);
        if(auth()->attempt($attributes)){
            return redirect ('/tasks')->with('success','Good to see you again!');
        }else{
            return back()->withErrors(['email'=>'Email was not found', 'password'=>'Invalid password']); 
        }
    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
    
}
