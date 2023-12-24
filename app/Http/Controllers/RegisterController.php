<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $atr=request()->validate([
           'name'=>'required|min:2|max:255',
           'email'=>'required|email|max:255|unique:users,email',
           'password'=>'required|min:7|max:255',
        ]);
        $user=User::create($atr);
        auth()->login($user);
        return redirect('/');
    }
}
