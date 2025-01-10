@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Pedido</h1>
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="pagado">Pagado</option>
                    <option value="anulado">Anulado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id_usuario">ID Usuario</label>
                <input type="number" name="id_usuario" id="id_usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_puesto">ID Puesto</label>
                <input type="number" name="id_puesto" id="id_puesto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Crear Pedido</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
