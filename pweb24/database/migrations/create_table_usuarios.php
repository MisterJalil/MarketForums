<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 100);
                $table->string('email', 100)->unique();
                $table->string('contrasena', 100);
                $table->string('rol', 20);

        });
    }
    public function down(): void
    {
       Schema::dropIfExists('usuarios');
    }
};
