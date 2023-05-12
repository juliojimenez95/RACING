@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('admin.crearpista') }}" class="btn btn-primary float-right mb-3">Crear</a>
      <div class="table-responsive">

        <table id="miTabla" class="table">
            <h1>Usuarios</h1>
          <thead>
            <tr>
              <th>ID</th>
              <th>saldo</th>
              <th>estado</th>
              <th>Acción</th>

            </tr>
          </thead>
          <tbody>
                    @foreach ($recargas as $recarga)
                    <tr>
                        <td>{{ $recarga->id }}</td>
                        <td>{{ $recarga->saldo }}</td>
                        <td>{{ $recarga->estado }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Abrir modal
                            </button>
{{--
                            <form action="{{ route('admin.verificarR',$recarga->id) }}" method="POST">
                             @csrf
                             @method('put')
                            @if ($recarga->estado == "sin verificar")
                            <button type="submit" class="btn btn-block"><i class="fa-solid fa-check"></i></button>

                            @else
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                            @endif  --}}
                        </td>
                    </tr>
                @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{{-- vista modal factura --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Título del modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Contenido del modal...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
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
