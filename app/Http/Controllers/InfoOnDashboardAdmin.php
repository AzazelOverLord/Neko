<?php

namespace App\Http\Controllers;

use App\Models\call;
use App\Models\user;
use App\Models\dbProject;
use Illuminate\Http\Request;

class InfoOnDashboardAdmin extends Controller
{
    public function index()
    {
        $users = user::all();
        $calls = call::all();
        $wtasks = dbProject::all();
        //dd($wtasks->UserProject->name);
        //$project_m = $wtasks->UserProject;
        return view('pages.dashboard.admin-dash', compact('calls','wtasks'));
    }
}
