@extends('layouts.app')

@section('content')
    <h1>Crear Lectura Histórica</h1>
    <form action="{{ route('historicos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_sensor">ID Sensor</label>
            <input type="number" name="id_sensor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_lectura">Fecha de Lectura</label>
            <input type="date" name="fecha_lectura" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Lectura Histórica</button>
    </form>
@endsection
