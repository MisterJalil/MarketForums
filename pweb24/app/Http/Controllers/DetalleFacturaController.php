<?php

namespace App\Http\Controllers;

use App\Models\DetalleFactura;
use Illuminate\Http\Request;

class DetalleFacturaController extends Controller
{
    public function index()
    {
        $detalleFacturas = DetalleFactura::all();
        return view('detalle_factura.index', compact('detalleFacturas'));
    }

    public function show($id)
    {
        $detalleFactura = DetalleFactura::findOrFail($id);
        return view('detalle_factura.show', compact('detalleFactura'));
    }

    public function create()
    {
        return view('detalle_factura.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_factura' => 'required|integer|exists:facturas,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01',
        ]);

        DetalleFactura::create($validated);

        return redirect()->route('detalle_factura.index')->with('success', 'Detalle de factura creado exitosamente.');
    }

    public function edit($id)
    {
        $detalleFactura = DetalleFactura::findOrFail($id);
        return view('detalle_factura.edit', compact('detalleFactura'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_factura' => 'required|integer|exists:facturas,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01',
        ]);

        $detalleFactura = DetalleFactura::findOrFail($id);
        $detalleFactura->update($validated);

        return redirect()->route('detalle_factura.index')->with('success', 'Detalle de factura actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $detalleFactura = DetalleFactura::findOrFail($id);
        $detalleFactura->delete();

        return redirect()->route('detalle_factura.index')->with('success', 'Detalle de factura eliminado exitosamente.');
    }
}
