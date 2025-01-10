@extends('layouts.app')

@section('content')
    <h1>Stocks</h1>
    <a href="{{ route('stocks.create') }}" class="btn btn-primary">Crear Stock</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Producto</th>
            <th>ID Proveedor</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->id }}</td>
                <td>{{ $stock->id_producto }}</td>
                <td>{{ $stock->id_proveedor }}</td>
                <td>{{ $stock->cantidad }}</td>
                <td>
                    <a href="{{ route('stocks.show', $stock->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
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
