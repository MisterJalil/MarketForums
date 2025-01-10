<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Muestra la lista de todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Muestra un usuario específico
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    // Muestra el formulario para crear un nuevo usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Guarda un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required|string|min:8|regex:/[A-Za-z0-9!@#$%^&*()]/',
            'rol' => 'required|in:comprador,vendedor',
        ]);

        Usuario::create($validated);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    // Muestra el formulario para editar un usuario
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    // Actualiza la información del usuario
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'contraseña' => 'nullable|string|min:8|regex:/[A-Za-z0-9!@#$%^&*()]/',
            'rol' => 'required|in:comprador,vendedor',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($validated);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    // Elimina un usuario
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
