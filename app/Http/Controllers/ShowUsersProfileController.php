<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowUsersProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('profile')->with('advertisments',$user->advertisments)->with('users',$user);
    }
}
