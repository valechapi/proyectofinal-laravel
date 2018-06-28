<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="img/png" href="/img/favicon.png">
    <title>Tienda | inicio</title>

    <!-- Bootstrap core CSS-->
    <link href="/css/dist/css/bootstrap.css" rel="stylesheet">

    <!-- web CSS-->
    <link href="/css/carousel.css" rel="stylesheet">
    <!--fontawesome -->
    <script type="text/javascript" src="js/fontawesome/js/fontawesome-all.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->

    <!-- FLICKETY-->
    <script type="text/javascript" src="js/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="/css/flickity-docs.css" media="screen">
    <!-- Component styles -->
    <link rel="stylesheet" href="/css/styles.css">

  </head>
  <body>

  @include('plantilla.header')
  @yield('contenido')
  @include('plantilla.footer')


  </body>
</html>
