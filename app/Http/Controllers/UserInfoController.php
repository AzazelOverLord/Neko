<?php

namespace App\Http\Controllers;

use App\Models\call;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        $calls = call::all();
        return view('pages.dashboard.admin-dash', compact('calls'));
    }
}
