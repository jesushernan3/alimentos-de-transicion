@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h2 class="subtitle">
					Budines Integrales
			</h2>
			<h1 class="title">
					Vainilla + Algarrobo
			</h1>
			
			</div>
	</div>
</section>
<main class="container">
		    
    <div class="columns section">
			<div class="column  is-half is-half-mobile">


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
			<div class="column  is-half is-half-mobile">
				<h1 class="title">Algarrobo</h1>
				<div class="sku"><span>Cod.Referencia:</span> ref1010</div>
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
							<li>• Harina integral agroecológia</li>
							<li>• Harina de algarroba</li>
							<li>• Almendras</li>
							<li>• Azucar mascabo</li>
							<li>• Aceite de coco</li>
							<li>• Huevo de campo</li>
							<li>• Cítrico (limón o naranja)</li>
							<li>• Pulpa de manzana y zanahoria</li>
							<li>• Semillas de lino</li>
							<li>• Bicarbonato de sodio</li>
							<li>• Escencia de vainilla</li>
						</ul>
					</div>
					<div class="tab-pane content-info">
						<h5>Como Comprar</h5>
							<ul>
								<li>· Debajo del título del productos se encuentra el código de referencia.</li>
								<li>· Con ese código indiquenos la cantidad que desea</li>
								<li>· Le mandamos un link de pago</li>
								<li>· Una vez recibido el pago, procederemos a despachar su pedido.</li>
							</ul>
					</div>
				</div>
			</div>
		</div>
</main>
@endsection
