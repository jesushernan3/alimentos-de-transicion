@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h2 class="subtitle">
					Medallones de Garbanzo
			</h2>
			<h1 class="title">
					Garbanzo Criollo
			</h1>
			
			</div>
	</div>
</section>
<main id="producto" class="container">
		    
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
				<h1 class="title">Garbanzo Criollo</h1>
				<div class="sku"><span>Cod.Referencia:</span> ref1020</div>
				<div class="precio">$200</div>
				<div class="cantidad"><span>Pack de:</span> 4 unidades</div>
				<div class="producto-resumen">
					<p>Medallones de garbanzo, con aproximadamente 150gr. de producto neto, casi un 70% más que el promedio que se vende en las dietéticas</p>
					<p>Fécula de maíz para unir, con cebolla, morron, sal y pimienta. Todos los  ingredientes están previamente cocidos. Sin conservantes, ni saborizantes.</p>
					<p>100% naturales. Sin harinas, sin trigo, sin soja, sin grasas trans.</p>
					<p class="envio-gratis">Envios gratis a partir de pedidos de $600</p>
					<p>Si tenes dudas sobre un producto podes consultarnos por Whatsapp: 54112171-5239</p>
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
						Receta clasica para tener la menor resistencia al cambio posible
						</p>
					</div>
					<div class="tab-pane content-ingredientes">
						<ul>
							<li>Garbanzo</li>
							<li>Cebolla</li>
							<li>Morron</li>
							<li>Fécula de maíz</li>
							<li>Avena</li>
							<li>Sal</li>
							<li>Pimineta</li>
						</ul>
					</div>
					<div class="tab-pane content-info">
						<h5>Como Comprar</h5>
							<ul>
								<li>Debajo del título del productos se encuentra el código de referencia.</li>
								<li>Con ese código indiquenos la cantidad que desea</li>
								<li>Le mandamos un link de pago</li>
								<li>Una vez recibido el pago, procederemos a despachar su pedido.</li>
							</ul>

						<h5>Formas de pago</h5>
						<ul>
							<li>Mercado Pago</li>
							<li>Transferencia bancaria</li>
							<li>Efectivo Rapipago, Pagofacil</li>
						</ul>

						<h5>Envíos</h5>
						<p>Solo en C.A.B.A.</p>
						<P>Dias de entrega: Lunes y Viernes</P>

					</div>
				</div>
			</div>
		</div>
</main>
@endsection
