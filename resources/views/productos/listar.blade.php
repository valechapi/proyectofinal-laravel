@extends('plantilla.primera')

@section('contenido')
 <h1>Listado de Productos</h1>
 <a href="/productos/agregar">Agregar productos</a>
 <ul>
   @foreach ($productos as $producto)
     <li>{{ $producto->title}}</li>
   @endforeach
 </ul>
@endsection
