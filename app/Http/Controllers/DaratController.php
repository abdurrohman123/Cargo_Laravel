<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaratController extends Controller
{
    public function index()
    {
        return view('pengiriman.darat');
    }
}
