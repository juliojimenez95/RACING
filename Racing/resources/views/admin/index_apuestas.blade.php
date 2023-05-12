@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.crearapuesta') }}" class="btn btn-primary float-right mb-3">Crear</a>
      <div class="table-responsive">

        <table id="miTabla" class="table">
            <h1>Apuestas</h1>
          <thead>
            <tr>
              <th>Id</th>
              <th>Valor de la apuesta</th>
              <th>Valor de ganancia</th>
              <th>Piloto</th>

            </tr>
          </thead>
          <tbody>
                    @foreach ($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->id }}</td>
                        <td>{{ $apuesta->valor_apuesta }}</td>
                        <td>{{  $apuesta->valor_ganacia }}</td>
                        <td>{{ $apuesta->piloto_carrera }}</td>
                        <td>
                            <a href="{{  route('admin.editapuesta', $apuesta->id)  }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{  route('admin.deleteapuesta', $apuesta->id)  }}" method="POST">
                                @csrf
                                @method('put')

                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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
@section('script')
<script>
    $(document).ready(function() {
    $('#miTabla').DataTable({
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
        });

    $('#miTabla').DataTable(

    );
});

</script>
@endsection
