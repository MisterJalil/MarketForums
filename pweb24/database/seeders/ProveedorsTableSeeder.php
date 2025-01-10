<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class ProveedorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('proveedors')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/proveedors.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde proveedors.sql correctamente.\n";
        } else {
            echo "Error: El archivo proveedors.sql no se encontró en la ruta especificada.\n";
        }
    }
}
