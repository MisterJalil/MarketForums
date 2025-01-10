@extends('layouts.app')

@section('content')
    <h1>Proveedores</h1>
    <a href="{{ route('proveedors.create') }}" class="btn btn-primary">Crear Proveedor</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Sector</th>
            <th>Contacto</th>
            <th>ID Usuario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->sector }}</td>
                <td>{{ $proveedor->contacto }}</td>
                <td>{{ $proveedor->id_usuario }}</td>
                <td>
                    <a href="{{ route('proveedors.show', $proveedor->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('proveedors.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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
