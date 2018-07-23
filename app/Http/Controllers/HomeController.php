<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.home', ['view_id' => 'home', 'view_class' => 'home']);
    }
}
