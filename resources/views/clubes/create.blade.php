@extends('layout.layout')

{{-- @section('plugins.SweetAlert2', true) --}}

@section('title','Crear')

@section('content')
    <div class="card-header">
        <h5 class="card-title">Agregar Equipo Nuevo</h5>
    </div>
    <div class="card-body bg-success">
        <div class="card  col-8 mx-auto ">
            <form action="{{ route('club.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group mx-auto">
                        <label for="name">Nombre del Club</label>
                        <input type="text" class="form-control col-8" name="name" id="name" aria-describedby="helpId" placeholder="Nombre">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{!! $errors->first('name', '<small>:message</small>') !!}</div>
                    @enderror
                    <div class="form-group">
                        <label for="liga">Liga</label>
                        <select class="form-control col-6" name="liga" id="liga">
                            @foreach ($ligas as $liga)
                                <option value="{{ $liga->id }}">{{ $liga->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
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