<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecargaModel;
use App\Models\User;



class RecargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recargas = RecargaModel::all();
        return view('admin.index_recarga',["recargas"=>$recargas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

        return view('admin.crear_recarga',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $recarga = new RecargaModel();
        $recarga->user_id = $id;
        $recarga->saldo = $request->saldo;
        $recarga->estado = "sin verificar";

        $recarga->save();
        return back()->with('message','La recarga se creo exitosamente');

    }

    public function verificarR($id)
    {
        $recarga =  RecargaModel::where('id',$id)->first();
        $user =  User::where('id',$recarga->user_id)->first();

        if ($recarga->estado == "sin verificar") {
            $recarga->estado = "verificado";
            $user->saldo = $user->saldo+$recarga->saldo;
            $user->save();
        }elseif ($recarga->estado =="verificado") {
            $recarga->estado = "verificar";
        }

        $recarga->save();

        return back()->with('message','Se aprobo  exitosamente');

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
