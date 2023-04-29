<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PistaModel;
use App\Models\CarreraModel;



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
        $pistas = PistaModel::all();
        return view('admin.crear_carrera',["pistas"=>$pistas]);
    }

    public function indexcarrera()
    {
        $carreras = CarreraModel::all();
        return view('admin.index_carrera',["carreras"=>$carreras]);
    }


    public function crearpista()
    {

        return view('admin.crear_pista');
    }

    public function indexpista()
    {
        $pistas = PistaModel::all();
        return view('admin.index_pista',["pistas"=>$pistas]);
    }

    public function storepista(Request $request)
    {
        $Pista = new PistaModel();
        $Pista->lugar = $request->lugar;
        $Pista->ruta = $request->ruta;
        $Pista->save();

        return $Pista;

    }

    public function storecarrera(Request $request)
    {
        $carrera = new CarreraModel();
        $carrera->pista = $request->pista;
        $carrera->fecha = $request->fecha;
        $carrera->save();

        return $carrera;

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
