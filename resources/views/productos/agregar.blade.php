@extends('plantilla.primera')

@section('contenido')
 <h1>Cargar nuevo Producto</h1>
 <form class="" action="" method="post">
   <div class="">
     <label for="">Titulo</label>
     <input type="text" name="title" value="">
   </div>
   <div class="">
     <label for="">Premios</label>
     <input type="text" name="awards" value="">
   </div>
   <div class="">
     <label for="">Rating</label>
     <input type="text" name="rating" value="">
   </div>
   <div class="">
     <label for="">Lanzamiento</label>
     <input type="text" name="release_date" value="">
   </div>
   <input type="submit" name="" value="Cargar">
 </form>

@endsection
