<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($found=null){
        return view('products.show',['found'=>$found]);
    }
    public function create(){
        return view('products.create');
    }

    public function update(){
        return view('products.update');
    }
}
