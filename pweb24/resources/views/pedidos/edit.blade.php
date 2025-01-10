@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Pedido</h1>
        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="pendiente" {{ $pedido->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="pagado" {{ $pedido->estado == 'pagado' ? 'selected' : '' }}>Pagado</option>
                    <option value="anulado" {{ $pedido->estado == 'anulado' ? 'selected' : '' }}>Anulado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id_usuario">ID Usuario</label>
                <input type="number" name="id_usuario" id="id_usuario" class="form-control" value="{{ $pedido->id_usuario }}" required>
            </div>
            <div class="form-group">
                <label for="id_puesto">ID Puesto</label>
                <input type="number" name="id_puesto" id="id_puesto" class="form-control" value="{{ $pedido->id_puesto }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Pedido</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
