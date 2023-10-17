<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriaSeeder::class,
            CursosSeeder::class
            /* Cliente::factory(10)->create() */
        ]);
        \App\Models\Cliente::factory(50)->create();
    }
}
