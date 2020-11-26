<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tienda extends Controller
{
    //
    public function perros()
    {
        return view('tienda.perros');
    }

    public function gatos()
    {
        return view('tienda.gatos');
    }
}
