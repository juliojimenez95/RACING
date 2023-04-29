@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.crearpista') }}" class="btn btn-primary float-right mb-3">Crear</a>
      <div class="table-responsive">

        <table class="table">
            <h1>Pistas</h1>
          <thead>
            <tr>
              <th>ID</th>
              <th>lugar</th>
              <th>ruta</th>
              <th>Acción</th>

            </tr>
          </thead>
          <tbody>
                    @foreach ($pistas as $pista)
                    <tr>
                        <td>{{ $pista->id }}</td>
                        <td>{{ $pista->lugar }}</td>
                        <td>{{ $pista->ruta }}</td>
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
