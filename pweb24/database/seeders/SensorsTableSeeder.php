<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class SensorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sensors')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/sensors.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde sensors.sql correctamente.\n";
        } else {
            echo "Error: El archivo sensors.sql no se encontró en la ruta especificada.\n";
        }
    }
}
