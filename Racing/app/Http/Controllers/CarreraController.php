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
    public function editcarrera($id)
    {
        $carrera = CarreraModel::where('id',$id)->first();
        $pistas = PistaModel::all();
        return view('admin.edit_carrera',["carrera"=>$carrera,"pistas"=>$pistas]);
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

    public function editpista($id)
    {
        $pista = PistaModel::where('id',$id)->first();
        return view('admin.edit_pista',["pista"=>$pista]);
    }


    public function storepista(Request $request)
    {
        $Pista = new PistaModel();
        $Pista->lugar = $request->lugar;
        $Pista->ruta = $request->ruta;
        $Pista->save();

        return back()->with('message','La pista se creo exitosamente');


    }

    public function updatepista(Request $request,$id)
    {
        $Pista = PistaModel::where('id',$id)->first();
        $Pista->lugar = $request->lugar;
        $Pista->ruta = $request->ruta;
        $Pista->save();

        return back()->with('message','La pista se edito exitosamente');


    }

    public function storecarrera(Request $request)
    {
        $carrera = new CarreraModel();
        $carrera->pista = $request->pista;
        $carrera->fecha = $request->fecha;
        $carrera->save();

        return back()->with('message','La carrera se creo exitosamente');


    }

    public function updatecarrera(Request $request,$id)
    {
        $carrera =  CarreraModel::where('id',$id)->first();
        $carrera->pista = $request->pista;
        $carrera->fecha = $request->fecha;
        $carrera->save();

        return back()->with('message','La carrera se creo exitosamente');


    }

    public function deletecarrera($id){

        CarreraModel::where('id',$id)->delete();

        return back();
    }
    public function deletepista($id){

        PistaModel::where('id',$id)->delete();

        return back();
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
