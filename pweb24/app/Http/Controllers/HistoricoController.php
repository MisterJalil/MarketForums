<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function index()
    {
        $historicos = Historico::all();
        return view('historicos.index', compact('historicos'));
    }

    public function show($id)
    {
        $historico = Historico::findOrFail($id);
        return view('historicos.show', compact('historico'));
    }

    public function create()
    {
        return view('historicos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_sensor' => 'required|integer|exists:sensors,id',
            'fecha_lectura' => 'required|date',
            'valor' => 'required|numeric',
        ]);

        Historico::create($validated);

        return redirect()->route('historicos.index')->with('success', 'Lectura histórica creada exitosamente.');
    }

    public function edit($id)
    {
        $historico = Historico::findOrFail($id);
        return view('historicos.edit', compact('historico'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_sensor' => 'required|integer|exists:sensors,id',
            'fecha_lectura' => 'required|date',
            'valor' => 'required|numeric',
        ]);

        $historico = Historico::findOrFail($id);
        $historico->update($validated);

        return redirect()->route('historicos.index')->with('success', 'Lectura histórica actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $historico = Historico::findOrFail($id);
        $historico->delete();

        return redirect()->route('historicos.index')->with('success', 'Lectura histórica eliminada exitosamente.');
    }
}
