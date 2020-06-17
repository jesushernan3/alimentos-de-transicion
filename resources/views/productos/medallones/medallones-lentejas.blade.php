@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h1 class="title">Medallones de Lentejas</h1>
				<h2 class="subtitle">Medallones</h2>
			</div>
	</div>
</section>
<main class="container">
		<p class="section has-text-centered is-size-5">
			Toda la gama de variedades de Lentejas
    </p>
    
    <section class="section productos">
      <h2 class="after-title-icon">Variaciones de Lentejas</h2>
    	<div class="columns">

			<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="/productos/medallones/lentajapura">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{asset('img/productos/medallones/medallones-lenteja.jpg')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">con Poroto</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="/productos/medallones/lentejayverdeo">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{asset('img/productos/medallones/medallones-lenteja.jpg')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Verdeo</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="/productos/medallones/lentejaycurry">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{asset('img/productos/medallones/medallones-lenteja.jpg')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">con Curry</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="/productos/medallones/lentejayespecias">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{asset('img/productos/medallones/medallones-lenteja.jpg')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">con Especias</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

		</div>
    </section>

</main>
@endsection
