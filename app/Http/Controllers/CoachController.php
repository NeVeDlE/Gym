<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {

        $search = isset(request()->search) ? request()->search : '';
        return view('components.coaches', [
            'search' => $search,
            'users' => User::filter($search)->where('role_id', 2)->paginate(10),
        ]);

    }

    public function update(User $user, $type)
    {

        if ($type == 'promote') $user->promoteCoach();
        else $user->demoteCoach();
        return redirect('/coaches');
    }
}
