@extends('layouts.side-head')

@section('content')

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    @endsection

    <div class="card justify-content-center" style="width:60%;margin: auto;">
        <div class="card-body">
            <table class="table table-striped" id="votos_estado">
                <thead>
                    <tr class="text-center">
                        <th>Estado</th>
                        <th>Cantidad de Votos</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($votos as $voto) 
                        <tr class="text-center">
                            <td>{{ $voto->estado }}</td>
                            <td>{{ $voto->votos }}</td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td>No hay elementos para mostrar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

        <script>

        $(document).ready(function() {
            $('#votos_estado').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                            lengthMenu: "Mostrar _MENU_ registros",
                            zeroRecords: "Seleccione un Estado",
                            info:
                                "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            infoEmpty:
                                "Mostrando registros del 0 al 0 de un total de 0 registros",
                            infoFiltered: "(filtrado de un total de _MAX_ registros)",
                            sSearch: "Buscar:",
                            oPaginate: {
                                sFirst: "Primero",
                                sLast: "Último",
                                sNext: "Siguiente",
                                sPrevious: "Anterior",
                            },
                            sProcessing: "Procesando...",
                        },
                columnDefs: [
                    { responsivePriority: 2, targets: 0 },
                    { responsivePriority: 1, targets: 1 }
                ]
            });
        } );

        </script>

    @endsection
    
@endsection