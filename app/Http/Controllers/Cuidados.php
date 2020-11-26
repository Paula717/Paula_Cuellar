<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cuidados extends Controller
{
    //
    public function pelu()
    {
        return view('cuidados.peluqueria');
    }

    public function ser()
    {
        return view('cuidados.servicios');
    }
}
