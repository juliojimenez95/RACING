@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="#" class="btn btn-primary float-right mb-3">Crear</a>
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
            <tr>
              <td>1</td>
              <td>Producto 1</td>
              <td>Descripción del producto 1</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Producto 2</td>
              <td>Descripción del producto 2</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
