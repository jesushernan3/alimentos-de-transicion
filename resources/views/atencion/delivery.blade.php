@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
  <div class="hero-body">
    <figure class="image is-fullwidth">
      <img src="/img/verduras-esparcidas.jpg">
    </figure>
    <div class="container">
      <h1 class="title">Delivery</h1>
    </div>
  </div>
</section>
<main id="delivery" class="container atencion-al-cliente">
  <p class="section has-text-centered is-size-5">
    Tratamos de mantener el máximo de eficiencia para todas las entregas dentro del marco disponible. Te propodrionamos dos formatos para la entrega de producto para pedidos a partir de $800
  </p>

  <div class="hero">
    <div class="tile">
      <div class="tile has-text is-4">
        <h3>Método de entrega</h3>
      </div>
      <div class="tile is-8">
        <ul>
          <li>En el domicio de producción</li>
          <li>Lunes y Viernes entre 14:00 y 19:00</li>
        </ul>
        <p>Los pedido se toman hasta 24hs hábiles antes del dia de entrega es decir, si tu zona de entrega es los lunes, van a entrar todos los pedidos que lleguen hasta el viernes anterior al mediodia.</p>
      </div>
    </div>
  </div>


</main>
@endsection