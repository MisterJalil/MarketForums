<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class StocksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('stocks')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/stocks.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde stocks.sql correctamente.\n";
        } else {
            echo "Error: El archivo stocks.sql no se encontró en la ruta especificada.\n";
        }
    }
}
