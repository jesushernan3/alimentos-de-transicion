@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
  <div class="hero-body">
    <figure class="image is-fullwidth">
      <img src="/img/verduras-esparcidas.jpg">
    </figure>
    <div class="container">
      <h1 class="title">Preguntas Frecuentes</h1>
    </div>
  </div>
</section>
<main class="container atencion-al-cliente">
  <p class="section has-text-centered is-size-5">
    Seccion para sacar dudas lo más rapido posible
  </p>

  <div class="hero">
    <div class="tile">
      <div class="tile is-4 has-text">
        <h3>Preguntas Frecuentes</h3>
      </div>
      <div class="tile is-8">
        <ul>
        <li>¿Cómo puedo adquirir los productos? <br>
            <span class="respuesta">Debajo del precio tenés el código del producto, mándanos este código con la cantidad queres de ese producto por email o whatsapp, te enviaremos un link de pago, y una vez concretado el pago, procederemos a enviarte el pedido en los días lunes o viernes.</span>
        </li>
        <li>¿Esta pagina es una tienda online? <br>
            <span class="respuesta">No, este es una página catalogo, no es una tienda online. solamente te mostramos nuestros productos.</span>
        </li>
        <li>¿Se realizan envíos a todo el país? <br>
            <span class="respuesta">No, pero realizamos envís dentro de C.A.B.A con un monto mínimo de $600</span>
        </li>
        <li>¿Los precios expresados a que corresponden? <br>
            <span class="respuesta">Producto final</span>
        </li>
        <li>¿Tienen lista de precios? <br>
            <span class="respuesta">Si, mandanos tu consulta a xxx@gmail.com</span>
        </li>
        <li>¿Dóde están ubicados? <br>
            <span class="respuesta">Estamos en el barrio de Boedo</span>
        </li>
        <li>¿Se puede pasar a buscar el pedido personalmente? <br>
            <span class="respuesta">Así es, una vez concretado el pedido y su posterior pago por nuestras diferentes formas de pago, podes pasar a retirar el producto por nuestro domicilio</span>
        </li>
        <li>¿Qué formas de pago tienen? <br>
            <span class="respuesta">Mercado Pago y Transferencia Bancaria</span>
        </li>
        </ul>
      </div>
    </div>
  </div>


</main>
@endsection