@extends('layout.layout')

@section('title','Administración')

@section('content')
    <div class="card-header">
        <h5 class="card-title">Tablas Informativas</h5>
        
    </div>
    <div class="card-body">
        <div class="row">
            <h2>Otros Datos: </h2>
            <div class="form-group ml-5">
                <label for="jugadores">#Jugadores:</label>
                <input type="text" class="form-control col-4" name="jugadores" id="jugadores" value="{{ $jugadores }}" disabled>
            </div>
            <div class="form-group ml-1">
                <label for="clubes">#Clubes:</label>
                <input type="text" class="form-control col-4" name="clubes" id="clubes" value="{{ $clubes }}" disabled>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <h3 class="card-title">Tabla de Ligas</h3>
                    <div class="table-responsive">
                        <table  class="table table-bordered table-hover shadow display nowrap" style="width:100%">
                            <thead class="bg-dark text-center text-light">
                                <tr>
                                    <th>#Liga</th>
                                    <th>Nombre</th>
                                    <th>Fecha Creacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ligas as $liga)
                                    <tr>
                                        <td class="text-center">{{ $liga->id }}</td>
                                        <td class="text-center">{{ $liga->nombre }}</td>
                                        <td class="text-center">{{ $liga->created_at->format('d-m-Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No hay ligas para mostrar</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot class="bg-dark text-center text-light">
                                <tr>
                                    <th>#Liga</th>
                                    <th>Nombre</th>
                                    <th>Fecha Creacion</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <h3 class="card-title">Tabla #Jugadores X Club</h3>
                    <div class="table-responsive">
                        <table id="datos" class="table table-bordered table-hover shadow display nowrap" style="width:100%">
                            <thead class="bg-info text-center">
                                <tr>
                                    <th class="text-dark">#Equipo</th>
                                    <th>Club</th>
                                    <th>Liga</th>
                                    <th>#Jugadores</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @forelse ($datos as $dato)
                                    <tr>
                                        <td class="text-center">{{ $count }}</td>
                                        <td class="text-center">{{ $dato->equipo }}</td>
                                        <td class="text-center">{{ $dato->nombre }}</td>
                                        <td class="text-center">{{ $dato->num_jugadores }}</td>
                                    </tr>
                                @php
                                    $count++;
                                @endphp
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No hay datos para mostrar</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot class="bg-info text-center">
                                <tr>
                                    <th class="text-dark">#Jugador</th>
                                    <th>Club</th>
                                    <th>Liga</th>
                                    <th>#Jugadores</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop