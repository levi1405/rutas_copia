<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __invoke(){
        $datc=Cliente::paginate();
        return view('clientes.index',compact('datc'));
    }
    public function create(){
        return view('clientes.create');
    }
    public function update(){
        return view('clientes.update');
    }
}
