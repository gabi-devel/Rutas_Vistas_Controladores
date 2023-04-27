<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function saludar($usuario)
    {
        $usuario = 'Gabi';
        return view('saludar', ['nom' => $usuario ]);
    }

    public function calendario()
    {
        return view('calendario');
    }

    public function carreras()
    {
        return view('carreras');
    }
}
