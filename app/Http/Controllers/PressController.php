<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressController extends Controller
{

    public function index()
    {
        return view('front.press', ['view_id' => 'press', 'view_class' => 'about header-small']);
    }
}
