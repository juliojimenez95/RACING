<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotoModel;
class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexMoto()
    {
        $motos = MotoModel::all();
        return view('admin.index_moto',["motos"=>$motos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crearmoto()
    {

        return view('admin.crear_moto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function editmoto($id)
    {
        $moto = MotoModel::where('id',$id)->first();
        return view('admin.edit_moto',["moto"=>$moto]);
    }


    public function storemoto(Request $request)
    {
        $moto = new MotoModel();
        $moto->modelo = $request->modelo;
        $moto->marca = $request->marca;
        $moto->save();

        return back()->with('message','La moto se creo exitosamente');


    }

    public function updatemoto(Request $request,$id)
    {
        $moto = MotoModel::where('id',$id)->first();
        $moto->modelo = $request->modelo;
        $moto->marca = $request->marca;
        $moto->save();

        return back()->with('message','La moto se edito exitosamente');


    }

    public function deletemoto($id){

        MotoModel::where('id',$id)->delete();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
