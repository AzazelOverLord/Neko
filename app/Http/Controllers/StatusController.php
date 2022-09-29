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


    public function store()
    {
        $data = request()->validate([
           'title'=>'string',
            'name'=>'string',
            'code_name'=>'string',
            'categories'=>'string',
            'color'=>'string'
        ]);
        status::create($data);
    }
}
