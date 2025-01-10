@extends('layouts.app')

@section('content')
    <h1>Facturas</h1>
    <a href="{{ route('facturas.create') }}" class="btn btn-primary">Crear Factura</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Coste Total</th>
            <th>ID Puesto</th>
            <th>ID Proveedor</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->id }}</td>
                <td>{{ $factura->fecha }}</td>
                <td>{{ $factura->coste_total }}</td>
                <td>{{ $factura->id_puesto }}</td>
                <td>{{ $factura->id_proveedor }}</td>
                <td>
                    <a href="{{ route('facturas.show', $factura->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display:inline;">
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
