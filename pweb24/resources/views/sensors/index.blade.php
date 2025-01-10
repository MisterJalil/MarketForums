@extends('layouts.app')

@section('content')
    <h1>Lista de Sensores</h1>
    <a href="{{ route('sensors.create') }}" class="btn btn-primary">Crear Sensor</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Magnitud</th>
            <th>ID Puesto</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sensors as $sensor)
            <tr>
                <td>{{ $sensor->id }}</td>
                <td>{{ $sensor->magnitud }}</td>
                <td>{{ $sensor->id_puesto }}</td>
                <td>
                    <a href="{{ route('sensors.show', $sensor->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('sensors.edit', $sensor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('sensors.destroy', $sensor->id) }}" method="POST" style="display:inline;">
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
