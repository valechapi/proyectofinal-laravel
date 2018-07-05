<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
  public function listar(){
    $categorias = Categoria::all();
      return view('categorias.listar')->with('categorias', $categorias);

  }
}
