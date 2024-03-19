<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
