@extends('layouts.app')

@section('content')
    <h1>Editar Sensor</h1>
    <form action="{{ route('sensors.update', $sensor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="magnitud">Magnitud</label>
            <select name="magnitud" class="form-control" required>
                <option value="temperatura" {{ $sensor->magnitud == 'temperatura' ? 'selected' : '' }}>Temperatura</option>
                <option value="ruido" {{ $sensor->magnitud == 'ruido' ? 'selected' : '' }}>Ruido</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" value="{{ $sensor->id_puesto }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Sensor</button>
    </form>
@endsection
