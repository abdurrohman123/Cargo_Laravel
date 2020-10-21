<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function sumatera()
    {
        return view('service.sumatera');
    }

    public function jakarta_bandung()
    {
        return view('service.jakarta_bandung');
    }

    public function sulawesi()
    {
        return view('service.sulawesi');
    }
    
    public function riau()
    {
        return view('service.riau');
    }

    public function medan_jakarta()
    {
        return view('service.medan_jakarta');
    }

    public function kalimantan()
    {
        return view('service.kalimantan');
    }

    public function jawa_bali()
    {
        return view('service.jawa_bali');
    }

    public function bandung_sumatera()
    {
        return view('service.bandung_sumatera');
    }

    public function bandung_sulawesi()
    {
        return view('service.bandung_sulawesi');
    }
}
