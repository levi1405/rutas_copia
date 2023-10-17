<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    // Para crear un Controlador podemos usar la consola
    // nos aseguramos de estar en la ruta de nuestro proyecto
    // php artisan make:controller nombre-de-Controlador
class HomeController extends Controller
{
    public function __invoke(){
        return view('home',['nombre'=>'Levi','apellido'=>'Mendoza']);
    }
}
