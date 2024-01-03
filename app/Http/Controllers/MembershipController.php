<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function update(Membership $membership,$type=null)
    {
        if($type=='activate'){
            $membership->activate();
        }
        else{
           $membership->deactivate();
        }
        return redirect('/');
    }
}
