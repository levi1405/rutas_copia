<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
 * Si queremos actualizar una tabla donde hemos agregado una columna nueva
 * podemos usar php artisan migrate:fresh
 * ADVERTENCIA:solo ocupar mientras esta en desarrollo y no hay 
 * datos importantes en las tablas de la base de datos pues seran eliminados
 */


 /*
  Si queremos agregar una nueva columna a una tabla sin destruir sus 
  registros podemos hacerlo de la siguiente manera
  * php artisan make:migration add_avatar_to_user_table
  */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
