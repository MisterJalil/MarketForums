<?php
namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class MensajeController extends Controller
{
    // Mostrar formulario de acceso
    public function acceso()
    {
        return view('mensajes.acceso');
    }

    // Verificar usuario y rol
    public function verificar(Request $request)
    {
        // Validar los campos de email y contraseña
        $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required|min:6',
        ]);

        // Buscar el usuario en la tabla "usuarios"
        $usuario = Usuario::where('email', trim(strtolower($request->email)))->first();

        // Verificar si existe el usuario
        if (!$usuario) {
            return back()->withErrors(['email' => 'El correo no está registrado.']);
        }

        // Verificar la contraseña directamente
        if ($request->contrasena !== $usuario->contrasena) {
            return back()->withErrors(['contrasena' => 'Contraseña incorrecta.']);
        }

        // Guardar el correo, el rol y el ID del usuario en la sesión
        session([
            'email' => $usuario->email,
            'rol' => $usuario->rol,
            'id_usuario' => $usuario->id, // Guardar el ID del usuario en la sesión
        ]);

        // Redirigir al muro según el rol
        return redirect()->intended('/miPortal/home');
    }

    public function index(Request $request)
    {
        // Obtener el rol del usuario desde la sesión
        $rol = session('rol');
        $usuario_id = session('id_usuario'); // Obtener el ID del usuario desde la sesión

        // Filtrar los mensajes según el rol y el filtro
        $query = Mensaje::query();

        if ($rol == 'comprador') {
            // Si el usuario es comprador, mostrar solo los mensajes de los compradores (incluyendo los suyos)
            $query->whereHas('usuario', function ($q) {
                $q->where('rol', 'comprador');
            });
        } else {
            $query->whereHas('usuario', function ($q) {
                $q->where('rol', 'vendedor');
            });
        }

        // Obtener los mensajes con el filtro aplicado
        $mensajes = $query->get();

        return view('mensajes.index', [
            'mensajes' => $mensajes,
            'rol' => $rol,
        ]);
    }

    // Guardar un mensaje
    public function store(Request $request)
    {
        // Verificar si el correo está en la sesión
        if (!session()->has('email')) {
            return redirect()->route('acceso')->withErrors(['error' => 'Debes iniciar sesión para publicar mensajes.']);
        }

        // Validar los datos del mensaje
        $request->validate([
            'titulo' => 'required|max:64',
            'cuerpo' => 'required|max:255',
        ]);

        // Crear el mensaje
        Mensaje::create([
            'titulo' => $request->titulo,
            'cuerpo' => $request->cuerpo,
            'id_usuario' => session('id_usuario'), // Utilizar el ID del usuario guardado en la sesión
            'fecha_publicacion' => Carbon::now(), // Fecha actual
        ]);

        return redirect()->route('mensajes.index')->with('exito', 'Mensaje publicado correctamente.');
    }
}
