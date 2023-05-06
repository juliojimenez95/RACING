<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApuestaModel;
use App\Models\PistaModel;
use App\Models\user;
use Illuminate\Support\Facades\DB;


class ApuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function crearapuesta()
    {
        $pilotos = DB::select("SELECT * FROM pilotos_carrera");

        return view('admin.crear_apuesta',['pilotos'=>$pilotos]);
    }

    public function indexapuesta()
    {
        $apuestas = ApuestaModel::all();
        return view('admin.index_apuestas',["apuestas"=>$apuestas]);
    }

    public function editapuesta($id)
    {
        $apuesta = ApuestaModel::where('id',$id)->first();
        return view('admin.edit_apuesta',["apuesta"=>$apuesta]);
    }


    public function storeapuesta(Request $request,$id)
    {
        $apuesta = new ApuestaModel();
        $apuesta->valor_apuesta = $request->Valor_apuesta;
        $apuesta->valor_ganacia = 0;
        $apuesta->users = $id;
        $apuesta->piloto_carrera = $request->piloto;
        $apuesta->save();

        return back()->with('message','La pista se creo exitosamente');


    }

    public function updateapuesta(Request $request,$id)
    {
        $apuesta = PistaModel::where('id',$id)->first();
        $apuesta->valor_apuesta = $request->valor_apuesta;
        $apuesta->valor_ganacia = $request->valor_ganacia;
        $apuesta->users = $request->users;
        $apuesta->piloto_carrera = $request->piloto_carrera;
        $apuesta->save();

        return back()->with('message','La pista se edito exitosamente');


    }

    public function deletepista($id){
        ApuestaModel::where('id',$id)->delete();
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
