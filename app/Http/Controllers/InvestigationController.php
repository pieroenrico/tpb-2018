<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestigationController extends Controller
{

    public function index()
    {
        return view('front.investigation', ['view_id' => 'investigation', 'view_class' => 'about header-small']);
    }
}
