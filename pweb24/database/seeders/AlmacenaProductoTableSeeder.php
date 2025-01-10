<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class AlmacenaProductoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('almacena_producto')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/almacena_producto.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde almacena_producto.sql correctamente.\n";
        } else {
            echo "Error: El archivo almacena_producto.sql no se encontró en la ruta especificada.\n";
        }
    }
}
