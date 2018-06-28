@extends('plantilla.primera')

@section('contenido')
  <div class="caja">
    <div class="formulario">
    <form  method="post" enctype="multipart/form-data">
        <fieldset>
          <legend><h2>Ingresar</h2></legend>
          <div class="data-form">

            <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="campo" for="name">Email:</label>
              <input class="form-control" type="text" name="email" value="mail">

                  <span style="color: red;">
                    <b class="glyphicon glyphicon-exclamation-sign"></b>

                  </span>

              </div>
            </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="campo" for="name">Contraseña:</label>
              <input class="form-control" type="password" name="pass" value="">

                  <span style="color: red;">
                    <b class="glyphicon glyphicon-exclamation-sign"></b>

                  </span>

            </div>
          </div>
        </div>
          </div>
        </fieldset>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <input class="checkbox" type="checkbox" name="recordar">
              Recordar
            </div>
          </div>
        </div>
      <button class="campo" type="submit">Enviar</button>
    </form>
  </div>
  </div>
  @endsection
