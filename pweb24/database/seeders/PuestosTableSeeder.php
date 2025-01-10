<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class PuestosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('puestos')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/puestos.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde puestos.sql correctamente.\n";
        } else {
            echo "Error: El archivo puestos.sql no se encontró en la ruta especificada.\n";
        }
    }
}
