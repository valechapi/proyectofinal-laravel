<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
    public function listar(){

      $productos = Producto::all();

      return view('productos.listar')-> with ('productos', $productos);
}
public function agregar(){

  $categorias = Categoria::orderBy('descripcion', 'ASC')->get();
  return view ('productos.agregar')
    -> with ('categorias', $categorias);
}

public function guardar (Request $request){
  $reglas = [
    'name' => 'required',
    'descripcion' => 'required',
    'id_categoria' => 'required',
    'precio' => 'required',

  ];
  $mensajes = [
    'name.required' => 'Ingresa el nombre',
    'descripcion.required' => 'La descripcion es requerida',
    'id_categoria.required' => 'Coloca la categoria',
    'precio.required' => 'Cargar el precio',

  ];
  $this->validate ($request, $reglas, $mensajes);
  $producto = Producto::create (
    $request->except(['_token'])
  );
  echo 'Se guardó el producto';
  dd($producto);
}
}
