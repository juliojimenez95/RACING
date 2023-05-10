<?php

namespace App\Http\Controllers;
use App\Models\rolModel;
use App\Models\User;
use App\Models\user_rolModel;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = rolModel::where('nombre','!=',"Admin")->get();
        return view('admin.registrar',["roles"=>$roles]);
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
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',

            ]
            ,
            [
                'name.required' => 'El nombre  es requerido',
                'email.required' => 'El email es requerido',
                'email.email' => 'El email deber ser real ejemplo@gmail.com',
                'email.unique' => 'El email ya se encuentra registrado',
                'password.required' => 'La contraseña es requerida',
                'password.min' => 'La contraseña debe tener minimo 8 caracteres',
                'password.confirmed' => 'La contraseña debe ser confirmada',

            ]
        );

       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user_rol = new user_rolModel();

        $user_rol->users = $user->id;
        $user_rol->rol = $request->role;
        $user_rol->save();

        return Redirect('/login');
    }



    public function updaterecarga($id)
{
    $User= User::find($id);
    $recarga = request('Valor_recarga');
    $User->saldo += $recarga;
    $User->save();

    return redirect()->route('Registro.recargar', $User->id);
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
