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
<main class="container">
  <p class="section has-text-centered is-size-5">Descubra el amor de Alimentos por Transición por la simplicidad y las
    comidas frescas. Somos un grupo de familia que usamos metodos artesanales para la elaboración de casí todos nuestros
    productos. También surge este proyecto de la necesidad propia y de nuestros amigos a tener otra opción que la
    tradicional de ir a la "dietetica" para conseguir productos no convencionales. Y ampliar la idea de una "dietética"
    al alcance de todo el territorio nacional.
  </p>

  <div class="hero">
    <div class="tile">
      <div class="tile has-text">
        <h3>Siginficado</h3>
        <ul>
          <li><b>"Alimento"</b> Del latin. <em>alimentum</em>
            <ol>
              <li>Conjunto de sustancias que los seres vivos comen o beben para subsistir. </li>
              <li>Cada una de las sustancias que un ser vivo toma o recibe para su nutrición</li>
            </ol>
          </li>
          <li><b>"Transición"</b> Del latin. <em>transitio, -ōnis.</em>
            <ol>
              <li>Acción y efecto de pasar de un modo de ser o estar a otro distinto.</li>
              <li>Cambio repentino de tono y expresión.</li>
            </ol>
          </li>
        </ul>
      </div>
      <div class="tile">
        <figure class="image is-half">
          <img class="is-half" src="/img/acerca/philosophy-1-heritage.jpg" alt="">
        </figure>
      </div>
    </div>
  </div>

  <div class="hero">
    <div class="tile reverse">
      <div class="tile">
        <figure class="image is-half">
          <img class="is-half" src="/img/acerca/philosophy-2-simple.jpg" alt="">
        </figure>
      </div>
      <div class="tile">
        <div class="tile has-text">
          <h3>Propuesta</h3>
          <p>
            Proponemos desde ya un cambio también en la forma de denomir cosas, tendencia, formas de vida. proponemos
            hacerlas más simple. Todos nos vimos atrapados en algún momento en una defición, por eso, estamos siempre en
            transición
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="hero">
    <div class="tile">
      <div class="tile has-text">
        <h3>Inteción</h3>
        <p>
          Queremos que nuestros huéspedes amen nuestra comida tanto como nosotros. Es por eso que ponemos el máximo
          valor en asegurarnos de que cada una de las experiencias en Alimentos de TRansició sea excelente.

        </p>
      </div>
      <div class="tile">
        <figure class="image is-half">
          <img class="is-half" src="/img/acerca/philosophy-3-balance.jpg" alt="">
        </figure>
      </div>
    </div>
  </div>

</main>
@endsection