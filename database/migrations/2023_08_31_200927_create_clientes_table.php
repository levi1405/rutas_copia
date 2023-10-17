<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Para revertir un lote usamos php artisan migrate:rollback
    los lotes se crean cada vez que hago un migrate y hay algo nuevo que 
    migrar *podemos visualizar los grupos de lotes en la tabla migration
    de nuestra base de datos */
    /**
     * Si queremos eiminar una tabla debemos hacer primero un rollback para eliminar los registros de los lotes y luego eliminar el archivo de la carpeta migration
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            /* Si quiero editar estos campos ejemplo nombre tenga un
            ancho de 100 y no de 255 que se agrego por defecto al no 
            colocarle nada */
            $table->id();
            $table->string('nombre');
            /* Esto sin afectar los registros ya presentes */
            /* Empezamos por ejecutar el sig comando en terminal:
            composer require doctrine/dbal */

            /* luego creamos una nueva migracion qu termine en 
            to_clientes_table en este caso 
            php artisan make:migration camibiar_propiedad_to_clientes_table*/
            $table->integer('edad');
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
