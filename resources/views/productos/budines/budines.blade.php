@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h1 class="title">Budines</h1>
				<h2 class="subtitle">seleeción de </h2>
			</div>
	</div>
</section>
<main class="container">
		<p class="section has-text-centered is-size-5">
			Toda la gama de variedades de Budines
    </p>
    
    <section class="section productos">
			<h2 class="after-title-icon">Variaciones de Budines</h2>
			
    	<div class="columns">

				<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="{{ route('budin-con-almendras') }}">
						<div class="card">
							<div class="card-image">
								<figure class="image is-4by3">
								<img src="{{asset('img/productos/budines/con-almendra/01.budin-almendra.jpg')}}" alt="Galleta tipo Muffin">
								</figure>
							</div>
							<div class="card-content">
								<h3 class="title">Vainilla + Algarrobo</h3>
								<div class="content">
									Budin integral con una leve suma de harina de algarrobo
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="column is-one-quarter is-one-quarter-desktop is-one-third-tablet is-half-mobile">
				<a class="section" href="{{ route('budin-con-nuez') }}">
						<div class="card">
							<div class="card-image">
								<figure class="image is-4by3">
								<img src="{{asset('img/productos/budines/con-nuez/05.budin-nuez.jpg')}}" alt="Galleta tipo Muffin">
								</figure>
							</div>
							<div class="card-content">
								<h3 class="title">Banana</h3>

								<div class="content">
									Budin integral con banana
								</div>
							</div>
						</div>
					</a>
				</div>

			</div>

    </section>

</main>
@endsection
