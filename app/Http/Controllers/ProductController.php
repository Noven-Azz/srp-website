<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function rfid()
    {
        return view('products.rfid');
    }

    public function ai()
    {
        return view('products.ai');
    }

    public function iot()
    {
        return view('products.iot');
    }
}