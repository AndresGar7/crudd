@extends('layout.layout')

@section('title','Crear')

@section('content')
    <div class="card-header">
        <h5 class="card-title">Agregar Jugador Nuevo</h5>
    </div>
    <div class="card-body bg-success ">
        <div class="card  col-8 mx-auto ">
            <form action="{{ route('jugador.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre del Jugador</label>
                        <input type="text" class="form-control col-8" name="name" id="name" aria-describedby="helpId" placeholder="Nombre" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{!! $errors->first('name', '<small>:message</small>') !!}</div>
                    @enderror
                    <div class="form-group">
                        <label for="age">Edad</label>
                        <input type="number" class="form-control col-8" name="age" id="age" aria-describedby="helpId" placeholder="Edad" value="{{ old('age') }}">
                    </div>
                    @error('age')
                        <div class="alert alert-danger">{!! $errors->first('age', '<small>:message</small>') !!}</div>
                    @enderror
                    <div class="form-group">
                        <label for="liga">Club</label>
                        <select class="form-control col-6" name="club" id="club">
                            @foreach ($equipos as $equipo)
                                <option value="{{ $equipo->id }}">{{ $equipo->equipo }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('club')
                        <div class="alert alert-danger">{!! $errors->first('club', '<small>:message</small>') !!}</div>
                    @enderror
                </div>
                <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-lg mx-3">Guardar</button>
                            <button type="button" onclick="cancelar()" class="btn btn-secondary btn-lg mx-3">Cancelar</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection