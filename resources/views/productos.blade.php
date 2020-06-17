@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
			<h1 class="title">
					Nuestros Productos
			</h1>
			</div>
	</div>
</section>
<main class="container">
		<p class="section has-text-centered is-size-5">En Alimentos de Transición, todos nuestros alimentos se elaboran frescos todos los días con recetas auténticas, ingredientes simples y un estilo de vida simple en mente.
    </p>
    
	<section class="section productos">
      <h2 class="after-title-icon">Medallones</h2>
     
		
		<div class="columns">

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="productos/medallones-garbanzos">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-garbanzos.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Garbanzo</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="productos/medallones-lentejas">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-lenteja.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Lentejas</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="productos/medallones-arroz">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-arroz.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Arroz</h3>

							<div class="content">
								Esta receta vegetariana es sumamente sencilla y rápida de hacer, no se necesita ser un chef o amante de la
								cocina para hacerla, ya que no nos tomará ni 15 minutos en prepararla y solo contiene un par de
								ingredientes principales, que los puedes conseguir en...
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="productos/medallones-variedades">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-calabaza.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">Variedades</h3>

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
