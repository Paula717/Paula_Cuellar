<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    //
    public function index()
    {
        return view('principal');
    }

    public function ubi()
    {
        return view('ubicacion');
    }

    public function qyr()
    {
        return view('qyr');
    }
}
