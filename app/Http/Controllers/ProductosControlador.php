<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosControlador extends Controller
{
    public function listar(){

      $productos = movie::all();

      return view('productos.listar')-> with ('productos', $productos);
}
public function agregar(){

  return view('productos.agregar');
}


}
