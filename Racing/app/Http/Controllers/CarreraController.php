<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PistaModel;


class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function crearcarrera()
    {
        return view('admin.crear_carrera');
    }

    public function crearpista()
    {
        return view('admin.crear_carrera');
    }

    public function storepista(Request $request)
    {
        $Pista = new PistaModel();
        $Pista->lugar = $request->lugar;
        $Pista->ruta = $request->ruta;
        $Pista->save();

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
