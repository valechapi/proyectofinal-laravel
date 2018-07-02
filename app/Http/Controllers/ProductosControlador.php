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
//  falta completar
  $genres =
  return view ('productos.agregar');
}

public function guardar (Request $request){
  $reglas = [
    'title' => 'required',
    'awards' => 'required',
    'rating' => 'required',
    'release_date' => 'required',
    'genre_id' => 'required',
  ];
  $mensajes = [
    'title.required' => 'Ingresa el titulo',
    'awards.required' => 'Los premios son requeridos',
    'rating.required' => 'Coloca el rating',
    'release_date.required' => 'Selecciona la fecha de lanzamiento',
    'genre_id.required' => 'Selecciona el genero',
  ];
  $this->validate ($request, $reglas, $mensajes);
  $pelicula = Pelicula::create (
    $request->except(['_token'])
  );
  echo 'Se guardó la pelicula';
  dd($pelicula);
}
}
