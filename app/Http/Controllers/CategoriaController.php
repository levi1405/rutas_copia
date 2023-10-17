<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __invoke(){
        $datctg=Categoria::all();
        return view('categorias.index',compact('datctg'));
    }
    public function index(){
        
    }
    public function store(){

    }
    public function create(){
        return view('categorias.create');
    }
    public function edit(){

    }
    public function destroy(){

    }
    public function update(){
        return view('categorias.update');
    }
}
