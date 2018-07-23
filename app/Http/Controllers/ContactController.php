<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('front.contact', ['view_id' => 'contact', 'view_class' => 'about header-small']);
    }
}
