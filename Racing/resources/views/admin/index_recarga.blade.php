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
              <th>Accion</th>


            </tr>
          </thead>
          <tbody>
                    @foreach ($recargas as $recarga)
                    <tr>
                        <td>{{ $recarga->id }}</td>
                        <td>{{ $recarga->saldo }}</td>
                        <td>{{ $recarga->estado }}</td>

                        <td>

                            <a href="#"  onclick="dataf()"  class="btn btn-dark" {{-- data-toggle="modal" data-target="#modalInformacionfactura"  --}} style="margin-right: 20px; text-decoration: none;">
                                <i class="fa-solid fa-file-invoice"></i>
                            </a>
                            <form action="{{ route('admin.verificarR',$recarga->id) }}" method="POST">
                             @csrf
                             @method('put')
                            @if ($recarga->estado == "sin verificar")
                            <button type="submit" class="btn btn-block"><i class="fa-solid fa-check"></i></button>

                            @else
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                            @endif
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
{{-- vista modal factura --}}
<div class="modal fade" id="modalInformacionfactura" tabindex="-1" role="dialog" aria-labelledby="modalInformacionfacturaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalInformacionfacturaLabel">Factura</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p > esto es parte del modas<strong>SIIIIUU</strong></p>
              </div>
              <div class="col-md-6">
                <p >gsfafsf<strong>asdads</strong></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')

<script>
    function dataf(){
        $("#modalInformacionfactura").modal("show");

     }
 </script>
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
