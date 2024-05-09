<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller {

    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('listar', compact('cursos'));
        //return  $cursos;

    }
    public function create(){

        return view('create');

    }

    public function store(Request $request){
       
      $curso=new Curso();
      $curso->name=$request->name;
      $curso->descripcion=$request->descripcion;
      $curso->save();
      return $request;

    }
    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('curso.index');
    }

    public function show(Curso $curso) {
       
     
        return view('show', compact('curso'));

    }
}