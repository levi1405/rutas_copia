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
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('nombre',100)->change();
        });
        Schema::table('categorias', function (Blueprint $table) {
            $table->string('nombre',100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('nombre',255)->change();
        });
        Schema::table('categorias', function (Blueprint $table) {
            $table->string('nombre',255)->change();
        });
    }
};
