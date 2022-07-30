@extends('layout.layout')

@section('plugins.Datatables', true)

@section('title','Jugadores')

@section('content')
    <div class="card-header">
        <h5 class="card-title">CRUD de Jugadores</h5>
    </div>
    <div class="card-body">
        <div class="row p-2 mb-3">
            <div class="col-lg21 col-sm-12">
                <a href="{{ route('jugador.create') }}" class="btn btn-primary fw-bold fs-6">Jugador Nuevo</a>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-lg-12 col-sm-12">
                <div class="table-responsive">
                    <table id="datos" class="table table-bordered table-hover shadow display nowrap" style="width:100%">
                        <thead class="bg-warning text-center">
                            <tr>    
                                <th class="text-dark">#Jugador</th>
                                <th>Nombre</th>
                                <th>Club</th>
                                <th>Edad</th>
                                <th>Fecha Creación</th>
                                <th>Realizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jugadores as $jugador)
                                <tr>
                                    <td class="text-center">{{ $jugador->id }}</td>
                                    <td class="text-center">{{ $jugador->nombre }}</td>
                                    <td class="text-center">{{ $jugador->equipo }}</td>
                                    <td class="text-center">{{ $jugador->edad }}</td>
                                    <td class="text-center">{{ $jugador->created_at }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-dark btn-lg align-center" href="{{ route('jugador.edit', $jugador->id) }}">Ver</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No hay jugadores para mostrar</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot class="bg-warning text-center">
                            <tr>
                                <th class="text-dark">#Jugador</th>
                                <th>Nombre</th>
                                <th>Club</th>
                                <th>Edad</th>
                                <th>Fecha Creación</th>
                                <th>Realizar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop