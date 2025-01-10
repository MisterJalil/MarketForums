@extends('layouts.app')

@section('content')
    <h1>Detalles de Factura</h1>
    <a href="{{ route('detalle_factura.create') }}" class="btn btn-primary">Crear Detalle de Factura</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Factura</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($detalleFacturas as $detalleFactura)
            <tr>
                <td>{{ $detalleFactura->id }}</td>
                <td>{{ $detalleFactura->id_factura }}</td>
                <td>{{ $detalleFactura->id_producto }}</td>
                <td>{{ $detalleFactura->cantidad }}</td>
                <td>{{ $detalleFactura->precio_unitario }}</td>
                <td>
                    <a href="{{ route('detalle_factura.show', $detalleFactura->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('detalle_factura.edit', $detalleFactura->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('detalle_factura.destroy', $detalleFactura->id) }}" method="POST" style="display:inline;">
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
