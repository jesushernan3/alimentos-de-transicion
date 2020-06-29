@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-large">
  <div class="hero-body">
    <figure class="image is-fullwidth">
      <img src="/img/main-hero-home.jpg">
    </figure>
    <div class="container">
      <h1 class="title">
        Alimentos de Transición
      </h1>
      <h2 class="subtitle">
        sin dogmas
      </h2>
    </div>
  </div>
</section>
<main>
  <div class="container">
    <div class="hero">
      <h3 class="title after-title-icon">Propuesta</h3>

      <div class="tile">
        <div class="tile has-text">
          <h3>Herencia</h3>
          <p>
            A través de generaciones hemos estado construyendo y desglosando una forma optima de transformar la
            alimentación. Nuestra propuesta consiste en continuar con esta tradición y adaptarnos a nuevas formas de
            intercambio. Ofrecerles la posiblidad de tener alimentos acordes a nuestro ritmo de vida. Armado con recetas
            familiares, nos proponemos llevar al alcance de todos nuestra visión de alimentos.
          </p>
        </div>
        <div class="tile">
          <figure class="image is-half">
            <img class="is-half" src="/img/inicio/home-2-our-story.jpg" alt="">
          </figure>
        </div>
      </div>
    </div>

    <div class="hero">
      <div class="tile reverse">
        <div class="tile">
          <figure class="image is-half">
            <img class="is-half" src="/img/inicio/home-5-our-culture.jpg" alt="">
          </figure>
        </div>
        <div class="tile">
          <div class="tile has-text">
            <h3>Tradición</h3>
            <p>
              Preparamos nuestra comida tradicional y diariamente, para que sepa que está obteniendo la mejor comida de
              calidad que existe. Nuestro proceso de pedido es tan simple como nuestros ingredientes. Nos encanta
              cuidarlo y hemos diseñado un ambiente familiar en el que puede celebrar el evento de comer.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="hero">
      <div class="tile">
        <div class="tile has-text">
          <h3>Formas</h3>
          <p>
            Y como punto de cierre finalizamos esta propuesta con nuestro metodo para poner al alcance de la mayoria de
            personas posible, hacemos envios los lunes y viernes en C.A.B.A. y Gran Buenos Aires
          </p>
        </div>
        <div class="tile">
          <figure class="image is-half">
            <img class="is-half" src="/img/inicio/home-4-our-culture.jpg" alt="">
          </figure>
        </div>
      </div>
    </div>
    <div class="hero">
      <a href="/productos">
        <div class="products-banner box">

          <div class="title">
            <h4 class="subtitle">Conoce Nuestros</h4>
            <h3 class="after-title-icon">Productos</h3>
          </div>
          <div class="tira-de-imagenes">
            <img src="/img/menu/babaganoush.jpg" alt="">
            <img src="/img/menu/chipotle-hummus.jpg" alt="">
            <img src="/img/menu/cilantro-sauce.jpg" alt="">
            <img src="/img/menu/greek-vin.jpg" alt="">
            <img src="/img/menu/iced-tea.jpg" alt="">
            <img src="/img/menu/lemonade.jpg" alt="">
            <img src="/img/menu/orig-hummus.jpg" alt="">
          </div>
        </div>
      </a>
    </div>
    <div class="hero">
      <div class="whatsapp-banner box">
        <div class="columns">
          <div class="column left">
            <p>Preguntas</p>
            <p>Consultas</p>
            <p>Pedidos</p>
          </div>
          
          {{-- <a href="https://wa.link/1o8bet" class="column right" target="_blank"><i --}}
          <a href="http://web.whatsapp.com/send?phone=541121715239&text=Hola, quer%C3%ADa hacerte una consulta sobre los servicios de Aeuroweb." class="column right" target="_blank"><i
          class="lni lni-whatsapp"></i><span>011 2672-4405</span></a>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection