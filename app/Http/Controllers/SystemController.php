<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SystemController extends Controller
{

    public function index()
    {
        return view('main.index');
    }
}