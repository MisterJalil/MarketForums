@extends('layouts.app')

@section('content')
    <h1>Crear Sensor</h1>
    <form action="{{ route('sensors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="magnitud">Magnitud</label>
            <select name="magnitud" class="form-control" required>
                <option value="temperatura">Temperatura</option>
                <option value="ruido">Ruido</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Sensor</button>
    </form>
@endsection
