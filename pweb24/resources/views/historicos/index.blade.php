@extends('layouts.app')

@section('content')
    <h1>Históricos de Lecturas</h1>
    <a href="{{ route('historicos.create') }}" class="btn btn-primary">Crear Lectura Histórica</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Sensor</th>
            <th>Fecha de Lectura</th>
            <th>Valor</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($historicos as $historico)
            <tr>
                <td>{{ $historico->id }}</td>
                <td>{{ $historico->id_sensor }}</td>
                <td>{{ $historico->fecha_lectura }}</td>
                <td>{{ $historico->valor }}</td>
                <td>
                    <a href="{{ route('historicos.show', $historico->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('historicos.edit', $historico->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('historicos.destroy', $historico->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
