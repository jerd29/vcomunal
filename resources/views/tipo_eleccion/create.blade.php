@extends('layouts.side-head')

@section('content')

    <div class="card justify-content-center" style="width:60%;margin: auto;">
        <div class="card-body">

            <form action="{{ route('tipo_eleccion.store') }}" method="post">
                @csrf

                <div class="col-xs-12 col-sm-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Nombre del Tipo de Eleccion</label>
                        <input class="form-control" type="text" name="tipo_eleccion" required maxlength="100" value="{{old('tipo_eleccion')}}">
                        {!! $errors->first('tipo_eleccion', '<small>:message</small><br>') !!}

                    </div>
                </div>

                <p class="text-center" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-info btn-raised">
                        <i class="zmdi zmdi-floppy"></i> &nbsp; Agregar
                    </button>
                </p>
        
            </form>

        </div>
    </div>


    
@endsection