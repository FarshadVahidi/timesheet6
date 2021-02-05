<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('superadministrator'))
        {
            return view('superdashboard');
        }elseif (Auth::user()->hasRole('administrator'))
        {
            return view('admindashboard');
        }elseif(Auth::user()->hasRole('user'))
        {
            return view('userdashboard');
        }else{
            return view('dashboard');
        }
    }
}
