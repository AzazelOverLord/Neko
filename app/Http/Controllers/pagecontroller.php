<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index()
    {
        if (session('status')==null)
        {
            return view('auth.login');
        }
        else
        {
            return view('home');
        }
    }
}
