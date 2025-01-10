<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/productos.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde productos.sql correctamente.\n";
        } else {
            echo "Error: El archivo productos.sql no se encontró en la ruta especificada.\n";
        }
    }
}
