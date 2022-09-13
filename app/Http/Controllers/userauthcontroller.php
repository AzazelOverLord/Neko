<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class userauthcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin-auth')->only('editusers');
        $this->middleware('team-member')->except('editusers');
    }
}
