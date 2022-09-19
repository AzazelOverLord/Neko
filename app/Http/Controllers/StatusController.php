<?php

namespace App\Http\Controllers;

use App\Models\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = status::all();
        return view('pages.status.stype', compact('status'));
    }
}
