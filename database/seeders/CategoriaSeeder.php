<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cate1 = new Categoria;
        $cate1->nombre='Administrador';
        $cate1->save();
        
        $cate2 = new Categoria;
        $cate2->nombre='Empleado';
        $cate2->save();
        
        $cate3 = new Categoria;
        $cate3->nombre='Bodeguero';
        $cate3->save();
        
    }
}
