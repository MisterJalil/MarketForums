<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();
        return view('facturas.index', compact('facturas'));
    }

    public function show($id)
    {
        $factura = Factura::findOrFail($id);
        return view('facturas.show', compact('factura'));
    }

    public function create()
    {
        return view('facturas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date|before_or_equal:today',
            'coste_total' => 'required|numeric|min:0.01',
            'id_puesto' => 'required|integer|exists:puestos,id',
            'id_proveedor' => 'required|integer|exists:proveedors,id',
        ]);

        Factura::create($validated);

        return redirect()->route('facturas.index')->with('success', 'Factura creada exitosamente.');
    }

    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        return view('facturas.edit', compact('factura'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fecha' => 'required|date|before_or_equal:today',
            'coste_total' => 'required|numeric|min:0.01',
            'id_puesto' => 'required|integer|exists:puestos,id',
            'id_proveedor' => 'required|integer|exists:proveedors,id',
        ]);

        $factura = Factura::findOrFail($id);
        $factura->update($validated);

        return redirect()->route('facturas.index')->with('success', 'Factura actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();

        return redirect()->route('facturas.index')->with('success', 'Factura eliminada exitosamente.');
    }
}
