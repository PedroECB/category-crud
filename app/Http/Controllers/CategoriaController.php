<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function create()
    {
    	return view('create');
    }

    public function storage(Request $request)
    {
    	dd($request->all());
    }
}
