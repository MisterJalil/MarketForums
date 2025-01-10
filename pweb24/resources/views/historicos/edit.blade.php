@extends('layouts.app')

@section('content')
    <h1>Editar Lectura Histórica</h1>
    <form action="{{ route('historicos.update', $historico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_sensor">ID Sensor</label>
            <input type="number" name="id_sensor" class="form-control" value="{{ $historico->id_sensor }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_lectura">Fecha de Lectura</label>
            <input type="date" name="fecha_lectura" class="form-control" value="{{ $historico->fecha_lectura }}" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" value="{{ $historico->valor }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Lectura Histórica</button>
    </form>
@endsection
