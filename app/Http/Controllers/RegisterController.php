<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $atr['password']=Hash::make($atr['password']);
        $user=User::create($atr);
       $mm= Membership::create(['owner_id'=>$user->id]);

        auth()->login($user);
        return redirect('/');
    }
}
