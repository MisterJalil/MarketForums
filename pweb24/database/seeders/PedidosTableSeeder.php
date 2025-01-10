<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class PedidosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/pedidos.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde pedidos.sql correctamente.\n";
        } else {
            echo "Error: El archivo pedidos.sql no se encontró en la ruta especificada.\n";
        }
    }
}
