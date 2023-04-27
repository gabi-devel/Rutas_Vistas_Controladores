<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function mostrarCarrera($indice)
    {
        $carreras = [
            "Tecnicatura Superior en Logística",
            "Tecnicatura Superior en Higiene y Seguridad en el Trabajo",
            "Tecnicatura Superior en Mantenimiento Industrial",
            "Tecnicatura Superior en Administración de Recursos Humanos",
            "Tecnicatura Superior en Análisis de Sistemas"
        ];

        $carrera = $carreras[$indice];

        return view('carrera', ['carrera' => $carrera]);
    }

    public function calendario()
    {
        return view('calendario');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
