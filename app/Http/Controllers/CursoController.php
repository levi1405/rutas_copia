<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Http\Requests\UpdateCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $curse=Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',compact('curse'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function store( StoreCurso $request){
        $curso=Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }
    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
        /* if terniario formula:
        variable = condition ? variable si verdadero : variable si falso
    
        return = si $curso tiene un valor dentro ? */
    }
    // function edit
    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }
    /* public function edit($id){
    $curso=Curso::findOrFail($id);
    return $curso;
    } */


    //En el $curso hacemos que se recupere el id de la BASE DE DATOS y se almacene los 
    //datos del registro que tenga ese id, y en el request almacenamos lo que se mande
    // desde el formulario para hacer la actualizacion
    public function update(UpdateCurso $request, Curso $curso){
        
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
