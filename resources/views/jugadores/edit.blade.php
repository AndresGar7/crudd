@extends('layout.layout')

@section('title','Crear')

@section('content')
    <div class="card-header">
        <h5 class="card-title">Editar Jugador</h5>
    </div>
    <div class="card-body bg-warning">
        <div class="card  col-8 mx-auto ">
            <form action="{{ route('jugador.update', $jugador) }}" method="POST">
                @csrf   @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre del Jugador</label>
                        <input type="text" class="form-control col-8" name="name" id="name" aria-describedby="helpId" placeholder="Nombre" value="{{ old('name', $jugador->nombre) }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{!! $errors->first('name', '<small>:message</small>') !!}</div>
                    @enderror
                    <div class="form-group">
                        <label for="age">Edad</label>
                        <input type="number" class="form-control col-8" name="age" id="age" aria-describedby="helpId" placeholder="Edad" value="{{ old('age', $jugador->edad) }}">
                    </div>
                    @error('age')
                        <div class="alert alert-danger">{!! $errors->first('age', '<small>:message</small>') !!}</div>
                    @enderror
                    <div class="form-group">
                        <label for="liga">Liga</label>
                        <select class="form-control col-6" name="club" id="club">
                            <option value="{{ $jugador->liga }}">{{ $jugador->nombreEquipo }}</option>
                            
                            @foreach ($clubes as $club)
                                <option value="{{ $club->id }}">{{ $club->equipo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg mx-3">Actualizar</button>
                        <a  class="btn btn-secondary btn-lg mx-2" href="{{ route('jugador.index') }}">Regresar</a>
                        </form>
                        <form method="POST" action="{{ route('jugador.destroy' , $jugador) }}">
                            @csrf @method('DELETE')
                            <button  class="btn btn-danger d-flex justify-content-between mx-2" style="font-size: 23px;">Eliminar</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@stop