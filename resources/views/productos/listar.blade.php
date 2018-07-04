@extends('plantilla.primera')

@section('contenido')
 <h1>Listado de Productos</h1>
 <a href="/productos/listado">Listado de productos</a>
 <ul>
   @foreach ($productos as $producto)
     <li>{{ $producto->title}}</li>
   @endforeach
 </ul>
@endsection
