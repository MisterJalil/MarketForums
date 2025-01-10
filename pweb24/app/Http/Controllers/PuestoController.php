<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public function index()
    {
        $puestos = Puesto::all();
        return view('puestos.index', compact('puestos'));
    }

    public function show($id)
    {
        $puesto = Puesto::with('productos')->findOrFail($id);
        return view('puestos.show', compact('puesto'));
    }

    public function create()
    {
        return view('puestos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:puestos,nombre|max:255',
            'ubicacion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'sector' => 'required|string|max:255',
            'id_usuario' => 'required|integer|exists:usuarios,id',
        ]);

        Puesto::create($validated);

        return redirect()->route('puestos.index')->with('success', 'Puesto creado exitosamente.');
    }

    public function edit($id)
    {
        $puesto = Puesto::findOrFail($id);
        return view('puestos.edit', compact('puesto'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:puestos,nombre,' . $id . '|max:255',
            'ubicacion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'sector' => 'required|string|max:255',
            'id_usuario' => 'required|integer|exists:usuarios,id',
        ]);

        $puesto = Puesto::findOrFail($id);
        $puesto->update($validated);

        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $puesto = Puesto::findOrFail($id);
        $puesto->delete();

        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado exitosamente.');
    }
}
