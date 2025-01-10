@extends('layouts.app')

@section('content')
    <h1>Crear Factura</h1>
    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="coste_total">Coste Total</label>
            <input type="number" name="coste_total" class="form-control" step="0.01" min="0.01" required>
        </div>
        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_proveedor">ID Proveedor</label>
            <input type="number" name="id_proveedor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Factura</button>
    </form>
@endsection
