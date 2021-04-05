@extends('layouts.side-head')

@section('content')

    <div class="card justify-content-center" style="width:60%;margin: auto;">
        <div class="card-body">

            <h3 class="text-center mb-4">Editar Tipo de Eleccion</h3>

            <form action="{{ route('tipo_eleccion.update', $tipoeleccion) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="col-xs-12 col-sm-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Nombre del Tipo de Eleccion</label>
                        <input class="form-control" type="text" name="tipo_eleccion" required maxlength="100" value="{{ $tipoeleccion->tipo_eleccion}}">
                        {!! $errors->first('tipo_eleccion', '<small>:message</small><br>') !!}

                    </div>
                </div>

                <p class="text-center" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-info btn-raised">
                        <i class="zmdi zmdi-floppy"></i> &nbsp; Actualizar
                    </button>
                </p>
        
            </form>

        </div>
    </div>


    
@endsection