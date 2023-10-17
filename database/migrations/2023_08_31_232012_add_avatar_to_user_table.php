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
    {
        Schema::table('users', function (Blueprint $table) {
            /* añadimos la nueva columna aceptando valores null
            para evitar inconvenientes */
            $table->string('avatar',50)->nullable()->after('email');
            /* Con after especificamos qe se cree despues de la columna
            email, para que no se cree al final si no enmedio */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
};
