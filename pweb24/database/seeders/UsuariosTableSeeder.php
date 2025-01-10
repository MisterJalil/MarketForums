<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        // Limpiar la tabla antes de insertar los datos
        DB::table('usuarios')->truncate();

        $path = database_path('seeders/sql/usuarios.sql');
        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde usuarios.sql correctamente.\n";
        } else {
            echo "Error: El archivo usuarios.sql no se encontró en la ruta especificada.\n";
        }
    }
}
