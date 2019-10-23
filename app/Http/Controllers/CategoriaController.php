<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('index', ["categorias"=>$categorias]);
    }

    public function create()
    {
    	return view('create');
    }

    public function storage(Request $request)
    {
        $category = new Categoria();
        $category->categoria = $request->input('categoria');
        $category->descricao = $request->input('descricao'); 
        $category->save();

        return view('create', ['success'=>'Categoria cadastrada com sucesso']);  
    }

    public function destroy($id)
    {
        Categoria::where('id', $id)->delete();
        $categorias = Categoria::all();
        return view('index', ["categorias"=>$categorias]);
    }
}
