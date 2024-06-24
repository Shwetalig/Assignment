<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlAssign extends Controller
{
    function first()
    {
        return view('home');
    }
    function aboutus()
    {
        return view('aboutus');
    }
}
