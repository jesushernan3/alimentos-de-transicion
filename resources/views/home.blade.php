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
<main class="container">

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
                    <img class="is-half" src="/img/tofu.webp" alt="">
                </figure>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="tile reverse">
            <div class="tile">
                <figure class="image is-half">
                    <img class="is-half" src="/img/tofu.webp" alt="">
                </figure>
            </div>
            <div class="tile">
            <div class="tile has-text">
                <h3>Sin dogmas</h3>
                <p>Proponemos desde ya un cambio también en la forma de denomir cosas, tendencia, formas de vida. proponemos hacerlas más simple. Todos nos vimos atrapados en algún momento en una defición, por eso, estamos siempre en transición.</p>
                
            </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="tile">
            <div class="tile has-text">
                <h3>Simple siempre es lo mejor.</h3>
                    <p>
                        Nuestra comida se crea con ingredientes básicos que se obtienen de manera responsable directamente de la naturaleza. Tratamos siempre de elejir proveedores que van hacía otra forma de relación con el entorno.
                    </p>
            </div>
            <div class="tile">
                <figure class="image is-half">
                    <img class="is-half" src="/img/tofu.webp" alt="">
                </figure>
            </div>
        </div>
    </div>

</main>
@endsection
