@extends('layout.layout')

@section('title','Crear')

@section('content')
    <div class="card-header">
        <h5 class="card-title">Edita Equipo</h5>
    </div>
    <div class="card-body bg-info">
        <div class="card  col-8 mx-auto ">
            <form action="{{ route('club.update', $club) }}" method="POST">
                @csrf   @method('PATCH')
                <div class="card-body">
                    <div class="form-group mx-auto">
                        <label for="name">Nombre del Club</label>
                        <input type="text" class="form-control col-8" name="name" id="name" aria-describedby="helpId" value="{{ old('name', $club->equipo) }}">
                    </div>
                    <div class="form-group">
                        <label for="liga">Liga</label>
                        <select class="form-control col-6" name="liga" id="liga">
                            <option value="{{ $club->idLiga }}">{{ $club->nombreLiga }}</option>
                            @foreach ($ligas as $liga)
                                <option value="{{ $liga->id }}">{{ $liga->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg mx-3">Actualizar</button>
                        <a  class="btn btn-secondary btn-lg mx-2" href="{{ route('club.index') }}">Regresar</a>
                        </form>
                        <form method="POST" action="{{ route('club.destroy' , $club) }}">
                            @csrf @method('DELETE')
                            <button  class="btn btn-danger d-flex justify-content-between mx-2">Eliminar</button>
                        </form>
                        {{-- <button type="button" onclick="cancelar()" class="btn btn-secondary btn-lg mx-3">Cancelar</button> --}}
                    </div>
                </div>
        </div>
    </div>
@stop