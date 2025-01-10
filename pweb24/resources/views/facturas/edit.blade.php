@extends('layouts.app')

@section('content')
    <h1>Editar Factura</h1>
    <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $factura->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="coste_total">Coste Total</label>
            <input type="number" name="coste_total" class="form-control" step="0.01" min="0.01" value="{{ $factura->coste_total }}" required>
        </div>
        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" value="{{ $factura->id_puesto }}" required>
        </div>
        <div class="form-group">
            <label for="id_proveedor">ID Proveedor</label>
            <input type="number" name="id_proveedor" class="form-control" value="{{ $factura->id_proveedor }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Factura</button>
    </form>
@endsection
