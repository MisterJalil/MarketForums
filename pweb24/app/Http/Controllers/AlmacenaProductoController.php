<?php

namespace App\Http\Controllers;

use App\Models\AlmacenaProducto;
use Illuminate\Http\Request;

class AlmacenaProductoController extends Controller
{
    // Listar todos los registros
    public function index()
    {
        $productos = AlmacenaProducto::all();
        return response()->json($productos);
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $producto = AlmacenaProducto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($producto);
    }

    // Crear un nuevo registro
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_puesto' => 'required|integer',
            'id_producto' => 'required|integer',
            'cantidad_disponible' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $producto = AlmacenaProducto::create($validatedData);
        return response()->json($producto, 201);
    }

    // Actualizar un registro existente
    public function update(Request $request, $id)
    {
        $producto = AlmacenaProducto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'id_puesto' => 'sometimes|required|integer',
            'id_producto' => 'sometimes|required|integer',
            'cantidad_disponible' => 'sometimes|required|integer',
            'precio' => 'sometimes|required|numeric',
        ]);

        $producto->update($validatedData);
        return response()->json($producto);
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $producto = AlmacenaProducto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->delete();
        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
