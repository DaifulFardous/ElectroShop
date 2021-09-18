<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasrole('user')){
            return view('Frontend.home.home');
        }elseif (Auth::user()->hasrole('admin')){
            return view('test');
        }
    }
}
