<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @extends('layouts.app')
  @section('content')
  <!-- FONT AWESOME -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

   <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>DH Electronics - Preguntas frecuentes</title>

  <link rel="stylesheet" href="CSS/design2.css">
</head>


<body>
<!-- PREGUNTAS FRECUENTES  -->

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Como Registrarse?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Para registrarte debes ingresar al link de Registrarse y crear una cuenta con tu nombre de usuario y contraseña, validando tus datos a traves de tu cuenta de correo electrónico, Facebook o Google.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Como comprar?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Para comprar debes estar previamente registrado y haber ingresado con tu cuenta como cliente. Luego debes seleccionar el producto que quieras y presionar en el botón "Comprar" o agregarlo al "Carrito" y seguir las instrucciones a continuación.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Medios de pago
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Se puede abonar con tarjetas de crédito o efectivo en nuestro local o con cualquiera de los medios de pago online que se ofrecen en nuestra web. Utilizamos la plataforma de MercadoPago.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Métodos de envío
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        Ofrecemos Mercado Envíos, podés recibir el producto por correo en todo el país. Calculás el costo de envío desde nuestra web y pagás todo junto por MercadoPago. Luego, podés hacer el seguimiento del envío desde tu compras.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          ¿Quienes somos?
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
      Somos una empresa pionera en la venta de artículos tecnológicos en Argentina. Desde nuestros inicios en 1998, somos una compañía que busca dar solución integral a las necesidades tecnológicas de nuestros clientes. Nuestra confianza, los años de experiencia y la calidad de nuestros productos nos avalan.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          Contacto - Ubicación
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <i class="fas fa-map-marker-alt"></i>  Nuestro local en la Ciudad Autónoma de Buenos Aires se encuentra en el barrio de Constitución, en la calle Lima 1111.
        <br> <br>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3311393278627!2d-58.38386198476982!3d-34.621071280455006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses-419!2sar!4v1559107903906!5m2!1ses-419!2sar" width="500" height="300" frameborder="0" style="border:50" ></iframe>
        <br><br>
        <i class="fas fa-phone"></i>
        +54 11 5263-7400 - 9:00 a 20:00 hs.
        <br>
      <i class="far fa-envelope"></i>  </i><a href="#">dhelectronics@gmail.com</a>

      </div>
    </div>
  </div>
</div>
</body>

@endsection
<!-- jQuery - Popper.js - JavaScript plugins -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>
