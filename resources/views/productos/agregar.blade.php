@extends('plantilla.primera')

@section('contenido')
 <h1>Cargar nuevo Producto</h1>
 <form class="" action="/productos/agregar" method="post"enctype='multipart/form-data'>{{ csrf_field()}}
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
     <label for="">Nombre</label>
     <input type="text" name="name" value="">
   </div>
   <div class="">
     <label for="">Descripción</label>
     <input type="text" name="descripcion" value="">
   </div>
   <div class="">
     <label for="">Lanzamiento</label>
     <input type="text" name="release_date" value="">
   </div>
   <div class="">
     <label for="id_categoria">Categoria</label>
     <select id="id_categoria class="form-control" name="id_categoria">
       <option value="">Seleccione</option>
        @foreach ($categorias as $categoria)
          <option value="{{ $categoria->id}}">{{ $categoria->descripcion}}</option>
        @endforeach
     </select>
    </div>
   <input type="submit" name="" value="Cargar">
 </form>

@endsection
