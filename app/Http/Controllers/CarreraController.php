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

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
