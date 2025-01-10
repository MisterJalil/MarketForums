<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedors = Proveedor::all();
        return view('proveedors.index', compact('proveedors'));
    }

    public function show($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedors.show', compact('proveedor'));
    }

    public function create()
    {
        return view('proveedors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sector' => 'required|string|max:255',
            'contacto' => 'required|string|regex:/^[0-9]{9,15}$/',
            'id_usuario' => 'required|integer|exists:usuarios,id',
        ]);

        Proveedor::create($validated);

        return redirect()->route('proveedors.index')->with('success', 'Proveedor creado exitosamente.');
    }

    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedors.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'sector' => 'required|string|max:255',
            'contacto' => 'required|string|regex:/^[0-9]{9,15}$/',
            'id_usuario' => 'required|integer|exists:usuarios,id',
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($validated);

        return redirect()->route('proveedors.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedors.index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
