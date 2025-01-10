<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class DetallePedidoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('detalle_pedido')->truncate(); // Limpia la tabla

        $path = database_path('seeders/sql/detalle_pedido.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            echo "Datos insertados desde detalle_pedido.sql correctamente.\n";
        } else {
            echo "Error: El archivo detalle_pedido.sql no se encontró en la ruta especificada.\n";
        }
    }
}
