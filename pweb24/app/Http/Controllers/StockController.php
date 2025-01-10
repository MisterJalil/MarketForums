<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.show', compact('stock'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_producto' => 'required|integer|exists:productos,id',
            'id_proveedor' => 'required|integer|exists:proveedors,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        Stock::create($validated);

        return redirect()->route('stocks.index')->with('success', 'Stock creado exitosamente.');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_producto' => 'required|integer|exists:productos,id',
            'id_proveedor' => 'required|integer|exists:proveedors,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($validated);

        return redirect()->route('stocks.index')->with('success', 'Stock actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Stock eliminado exitosamente.');
    }
}
