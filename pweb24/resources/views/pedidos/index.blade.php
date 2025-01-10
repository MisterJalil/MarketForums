@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Pedidos</h1>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Crear Pedido</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>ID Usuario</th>
                <th>ID Puesto</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->estado }}</td>
                    <td>{{ $pedido->id_usuario }}</td>
                    <td>{{ $pedido->id_puesto }}</td>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
