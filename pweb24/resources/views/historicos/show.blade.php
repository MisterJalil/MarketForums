@extends('layouts.app')

@section('content')
    <h1>Detalles de la Lectura Histórica</h1>
    <p><strong>ID:</strong> {{ $historico->id }}</p>
    <p><strong>ID Sensor:</strong> {{ $historico->id_sensor }}</p>
    <p><strong>Fecha de Lectura:</strong> {{ $historico->fecha_lectura }}</p>
    <p><strong>Valor:</strong> {{ $historico->valor }}</p>
    <a href="{{ route('historicos.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
