<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class DetalleFacturaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('detalle_factura')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/detalle_factura.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde detalle_factura.sql correctamente.\n";
        } else {
            echo "Error: El archivo detalle_factura.sql no se encontró en la ruta especificada.\n";
        }
    }
}
