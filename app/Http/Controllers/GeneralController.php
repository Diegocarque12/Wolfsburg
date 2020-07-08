<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    //
    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('aboutUs');
    }

    public function form()
    {
        return view('form');
    }

    

}
