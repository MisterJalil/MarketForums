@extends('layouts.app')

@section('content')
    <h1>Detalles del Sensor</h1>
    <p><strong>ID:</strong> {{ $sensor->id }}</p>
    <p><strong>Magnitud:</strong> {{ $sensor->magnitud }}</p>
    <p><strong>ID Puesto:</strong> {{ $sensor->id_puesto }}</p>
    <a href="{{ route('sensors.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
