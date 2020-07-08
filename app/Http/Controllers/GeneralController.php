<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\ productMenu;

class GeneralController extends Controller
{
    //
    public function menu()
    {
        $categories= category::all();
        $products = productMenu::all();
        return view('menu')->with(compact('categories','products'));
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
