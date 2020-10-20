<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LautController extends Controller
{
    public function index()
    {
        return view('pengiriman.laut');
    }
}
