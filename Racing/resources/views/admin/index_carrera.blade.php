@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.crearcarrera') }}" class="btn btn-primary float-right mb-3">Crear</a>
      <div class="table-responsive">

        <table class="table">
            <h1>Carreras</h1>
          <thead>
            <tr>
                <th>ID</th>
                <th>Pista</th>
                <th>Fecha</th>
                <th>Acción</th>

            </tr>
          </thead>
          <tbody>
                    @foreach ($carreras as $carrera)
                    <tr>
                        <td>{{ $carrera->id }}</td>
                        <td>{{ $carrera->pista }}</td>
                        <td>{{ $carrera->fecha }}</td>
                        <td>
                            <a href="" class="btn btn-warning">EDITAR</a>
                            <form action="" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
