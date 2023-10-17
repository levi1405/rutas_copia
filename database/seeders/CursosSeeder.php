<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = array([
            'nombre'=>'JavaScript',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Diseño Web',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Datos en la nube',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Base de Datos',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Flutter',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Desarrollo Movil',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'C# y MySQL',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Aplicaciones de Escritorio',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'php con Laravel',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Frameworks',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Hacking Etico',
            'slug'=>fake()->slug(),
            'descripcion'=>fake()->paragraph(),
            'categoria'=>'Ciber Seguridad',
            'created_at'=>Carbon::now()
        ]);
        DB::table('cursos')->insert($datos);
    }
}
