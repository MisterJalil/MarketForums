<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class HistoricosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('historicos')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/historicos.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde historicos.sql correctamente.\n";
        } else {
            echo "Error: El archivo historicos.sql no se encontró en la ruta especificada.\n";
        }
    }
}
