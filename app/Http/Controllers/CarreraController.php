<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function mostrarCarrera($indice)
    {
        $carreras = [
            "Ingeniería de Sistemas",
            "Ingeniería Industrial",
            "Ingeniería Civil",
            "Ingeniería Ambiental",
            "Ingeniería Mecánica",
            "Ingeniería Eléctrica",
            "Ingeniería Química",
            "Ingeniería Electrónica",
            "Ingeniería de Telecomunicaciones",
            "Ingeniería de Software"
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