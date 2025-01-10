@extends('layouts.app')

@section('content')
    <h1>Detalles de Pedidos</h1>
    <a href="{{ route('detalle_pedido.create') }}" class="btn btn-primary">Crear Detalle de Pedido</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Pedido</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($detallePedidos as $detallePedido)
            <tr>
                <td>{{ $detallePedido->id }}</td>
                <td>{{ $detallePedido->id_pedido }}</td>
                <td>{{ $detallePedido->id_producto }}</td>
                <td>{{ $detallePedido->cantidad }}</td>
                <td>{{ $detallePedido->precio_unitario }}</td>
                <td>
                    <a href="{{ route('detalle_pedido.show', $detallePedido->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('detalle_pedido.edit', $detallePedido->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('detalle_pedido.destroy', $detallePedido->id) }}" method="POST" style="display:inline;">
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
