@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h2 class="subtitle">
					Medallones de Lenteja
			</h2>
			<h1 class="title">
					Clásica
			</h1>
			
			</div>
	</div>
</section>
<main class="container">
		    
    <div class="columns section">
			<div class="column  is-two-fifths is-half-mobile">
				{{-- <figure class="image is-fullwidth">
					<img src="/img/productos/medallones/medallones-garbanzos.jpg">
				</figure> --}}

				<!-- Slider main container PRUEBA SLIDER SWIPER.JS-->
				<div class="swiper-container">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide"><img src="{{asset('img/productos/medallones/de-garbanzo/clasico/01.garbanzo-clasico.jpg')}}" alt=""></div>
								<div class="swiper-slide"><img src="{{asset('img/productos/medallones/de-garbanzo/clasico/02.garbanzo-clasico.jpg')}}" alt=""></div>
								<div class="swiper-slide"><img src="{{asset('img/productos/medallones/de-garbanzo/clasico/03.garbanzo-clasico.jpg')}}" alt=""></div>
								...
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<div class="swiper-scrollbar"></div>
				</div>				
			</div>
			<div class="column  is-three-fifths is-half-mobile">
				<h1 class="title">Lenteja Clásica</h1>
				<div class="precio">$500</div>
				<div class="producto-resumen">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam tenetur est qui doloribus corrupti consequuntur ut aut quas distinctio neque dolorum nesciunt provident a magnam adipisci laborum, alias laudantium doloremque.</p>
				</div>
			</div>
			<div class="column is-three-quarters is-full-mobile informacion-adicional">
				<input type="radio" id="descripcion" name="nav-tab">
				<input type="radio" id="ingredientes" name="nav-tab" checked>
				<input type="radio" id="info" name="nav-tab">
				
				<div class="tabs is-centered is-boxed">
					<ul>
						<li><label for="descripcion"><a>Descripción</a></label></li>
						<li><label for="ingredientes"><a>Ingredientes</a></label></li>
						<li><label for="info"><a>Info Adicional</a></label></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane content-descripcion">
						<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. In suscipit dolorem similique, modi exercitationem ea molestias possimus autem? Velit quaerat illo quis pariatur excepturi odit, sequi voluptatem officiis cumque architecto.
						</p>
					</div>
					<div class="tab-pane content-ingredientes">
						<ul>
							<li>ingrediente 1</li>
							<li>ingrediente 2</li>
							<li>ingrediente 3</li>
							<li>ingrediente 4</li>
							<li>ingrediente 5</li>
						</ul>
					</div>
					<div class="tab-pane content-info">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quaerat commodi fugiat explicabo. Delectus dolore recusandae, hic in nam vitae!</p>
					</div>
				</div>
			</div>
		</div>
</main>
@endsection
