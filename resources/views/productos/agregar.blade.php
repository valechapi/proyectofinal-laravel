@extends('plantilla.primera')

@section('contenido')
 <h1>Cargar nuevo Producto</h1>
 <form class="" action="/productos_/agregar" method="post"enctype='multipart/form-data'>{{ csrf_field()}}
   @if (count($errors) > 0)
     <div class="alert alert-danger">
       <ul>
         @foreach ($errors -> all() as $error)
           <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
   @endif

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
   <div class="">
     <label for="genre_id">Genero</label>
     <select id="genre_id class="form-control" name="genre_id">
       <option value="">Seleccione</option>
        @foreach ($generos as $genero)
          <option value="{{ $genero->id}}">{{ $genero->name}}</option
        @endforeach       
     </select>
     <input type="text" name="rating" value="">
   </div>
   <input type="submit" name="" value="Cargar">
 </form>

@endsection
