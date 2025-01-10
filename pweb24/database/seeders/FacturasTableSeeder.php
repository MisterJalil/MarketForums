<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class FacturasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('facturas')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/facturas.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde facturas.sql correctamente.\n";
        } else {
            echo "Error: El archivo facturas.sql no se encontró en la ruta especificada.\n";
        }
    }
}
