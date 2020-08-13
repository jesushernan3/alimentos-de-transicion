@extends('plantillas.plantilla')
@section('title', 'AdT - Productos')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h2 class="subtitle">conozca nuestros</h2>
			<h1 class="title">
					Productos
			</h1>
			</div>
	</div>
</section>
<main class="container">
		<p class="section has-text-centered is-size-5">En Alimentos de Transición, todos nuestros alimentos se elaboran frescos todos los días con recetas auténticas, ingredientes simples y un estilo de vida simple en mente.
    </p>
    
	<section class="section productos medallones">
    <h2 class="after-title-icon">Medallones</h2>
		<div class="columns">

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="{{ route('medallones-de-garbanzos') }}">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-garbanzos.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Garbanzo</h3>

							<div class="content">
								Garbanzo, una especie de leguminosa adaptada desde ámbito mediterraneo con profusas cualidades culinarias. Con posible origen del meditarráneo y con su llegada a través de los navegantes hispánicos precolombinos, nos trae las infinitas posibilidades para abrirnos a otra variante de alimentación que la ya tradicional comida argentina. Con excelentes atributos nutricionales es nuestra elección predilecta para este tipo de producto
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="{{ route('medallones-de-lenteja') }}">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-lenteja.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">de Lentejas</h3>

							<div class="content">
								Lens culinaris: Las lentejas constituyen uno de los componentes de la dieta humana más antiguos, pues su consumo se remonta a unos 9,500-13,000 años atrás. La planta en la que se producen es parte de la familia de las leguminosas, que incluye las plantas de frijol, chícharo, garbanzo y cacahuate. La palabra lenteja alude a la forma cóncava de sus semillas, que recuerdan la de las lentes.
								La lenteja es un alimento con una alta concentración de nutrientes. Los hidratos de carbono son los más abundantes y están formados fundamentalmente por almidón
							</div>
						</div>
					</div>
				</a>
			</div>

			{{-- A DESARROLLAR
			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="{{ route('medallones-de-arroz') }}">
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
			</div> --}}

			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
			<a class="section" href="{{ route('medallones-de-variedades') }}">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/medallones/medallones-calabaza.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">Variedades</h3>

							<div class="content">
								Gran variedad de legumbres para obtener el mayor beneficio nutricinal, desde quinoa hasta trigo burgol.
							</div>
						</div>
					</div>
				</a>
			</div>

		</div>
	</section>
	<section class="section productos galletas">
		<h2 class="after-title-icon">Galletas</h2>
		<div class="columns">
			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="/productos/galletas/con-chocolate">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="img/productos/galletas/galleta_tipo_muffin/01.GalletaTipoMofin.jpg" alt="Galleta tipo Muffin">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">con Chocolate</h3>

							<div class="content">
								Gran variedad de galletas con chocolate
							</div>
						</div>
					</div>
				</a>

			</div>
		</div>
	</section>
	<section class="section productos budines">
		<h2 class="after-title-icon">Budines</h2>
		<div class="columns">
			<div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
			<a class="section" href="{{ route('budines') }}">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
							<img src="{{asset('img/productos/budines/con-almendra/07.budin-almendra.jpg')}}" alt="Galleta tipo Muffin">
							</figure>
						</div>
						<div class="card-content">
							<h3 class="title">Integrales</h3>

							<div class="content">
								Budines con harinas integrales con sabores multiples
							</div>
						</div>
					</div>
				</a>

			</div>
		</div>
	</section>

</main>
@endsection
