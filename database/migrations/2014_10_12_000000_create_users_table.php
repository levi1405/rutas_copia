<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    /* funcion para crear la tabla user */
    {
        /* manda a llamar metodo create de la clase Schema recibe
         dos parametros, un *nombre_table* y una funcion anonima que recibe como
         parametro un objeto de tipo Blueprint que se ocupa para crear las columnas
         de la tabla*/
        Schema::create('users', function (Blueprint $table) {
            $table->id(); /* id =colum integer unsigned e Increment */
            $table->string('name'); /* culum tipo varchar 255 */
            $table->string('email')->unique(); /* varchar irrepetible */
            $table->timestamp('email_verified_at')->nullable(); /* fecha null */
            $table->string('password');
            $table->rememberToken(); /* Se almacena un token cada vez que
            un usuario marque la opcion de mantener sesion iniciada */
            $table->timestamps(); /* Crea DOS columnas de tipo timestamp
            create_at: fecha que se creo el registro
            update_at: fecha que se modifico el registro */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    /* funcion para eliminar la tabla user si existe */
    {
        Schema::dropIfExists('users');
    }
};
