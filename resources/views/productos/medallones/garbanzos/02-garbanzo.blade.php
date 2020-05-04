@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
	<div class="hero-body">
			<figure class="image is-fullwidth">
				<img src="/img/banner-gral.jpg">
			</figure>
			<div class="container">
				<h2 class="subtitle">Medallones de Garbanzo</h2>
			<h1 class="title">Medallon de Garbanzo + Calabaza</h1>
		</div>
	</div>
</section>
<main class="container">
		    
    <div class="columns section">
			<div class="column  is-two-fifths ">
				<figure class="image is-fullwidth">
					<img src="/img/productos/medallones/medallones-garbanzos.jpg">
				</figure>
			</div>
			<div class="column  is-three-fifths ">
				<h1 class="title">Medallones de Garbanzo</h1>
				<div class="precio">$500</div>
				<div class="producto-resumen">
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam tenetur est qui doloribus corrupti consequuntur ut aut quas distinctio neque dolorum nesciunt provident a magnam adipisci laborum, alias laudantium doloremque.</p>
				</div>
			</div>
			<div class="column is-full">
				<input type="radio" id="pic" name="nav-tab">
				<input type="radio" id="music" name="nav-tab">
				<input type="radio" id="video" name="nav-tab">
				<input type="radio" id="doc" name="nav-tab">
				
				<div class="tabs is-centered is-boxed">
					<ul>
						<li><label for="pic"><a>Pictures</a></label></li>
						<li><label for="music"><a>Music</a></label></li>
						<li><label for="video"><a>Videos</a></label></li>
						<li><label for="doc"><a>Documents</a></label></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane content-pic">My Fotos</div>
					<div class="tab-pane content-music">My Musica</div>
					<div class="tab-pane content-video">Mis Videos</div>
					<div class="tab-pane content-doc">My Documentos</div>
				</div>
			</div>
		</div>
</main>
@endsection
