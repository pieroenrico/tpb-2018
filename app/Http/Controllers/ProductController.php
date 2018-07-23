<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('front.product', ['view_id' => 'product', 'view_class' => 'product header-small']);
    }

    public function product($id)
    {
        return view('front.product.'.$id, ['view_id' => 'product product-' . $id, 'view_class' => 'header-small product product-' . $id]);
    }
}
