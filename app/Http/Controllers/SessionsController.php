<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        $atr = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $atr['email'];
        $password = $atr['password'];
        $user = User::where('email', $email)->first();
        if(isset($user)&&Hash::check($password,$user->password)){
            auth()->login($user);
            return redirect('/');
        }
      else
        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye!');
    }
}
