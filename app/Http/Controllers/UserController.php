<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function gegevens()
    {
        // $user = new User;
        // $users = new User;
        $users = User::all();
        // echo $users;
        // die();
        // return view('welcome', compact('user'));
        // return view('welcome')->with(compact('user'));

        return view('welcome')->with(['users'=>$users]);
    }
}
