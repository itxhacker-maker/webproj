<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
class homecontroller extends Controller
{
    //
    public function index()
    {
        if (Auth::id()) {
            $usertype=auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('admin.home');
            }
            else
            {
                $user=auth()->user();
                 return view('home',compact('user'));
            }
            return view('home',compact('user'));
        }
        return view('home');
    }
}
