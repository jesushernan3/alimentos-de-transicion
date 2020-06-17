@extends('plantillas.plantilla')
@section('contenido')
<section class="hero banner is-medium">
  <div class="hero-body">
    <figure class="image is-fullwidth">
        <img src="/img/verduras-esparcidas.jpg">
    </figure>
    <div class="container">
      <h1 class="title">Info de Contacto</h1>
    </div>
  </div>
</section>

<main class="container section">
    <h1 class="title">Contacto</h1>
    <p>Para más información y pedidos no dude en contactarnos a: <a href="mailto:acrobata@prontonmail.com" target="_blank">info@alimentosdetransicion.com</a></p>

    <p>Estamos ubicados en: Boedo, Capital Federal <br>
      Argentina
    </p>

    <br>
    <div class="section">
      <form action="submit">

        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
          <input name="name" class="input" type="data" placeholder="e.g Alex Smith" value="<?php echo isset($_POST['name']) ? $name : '';  ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input name="email" class="input" type="text" placeholder="e.g. alexsmith@gmail.com" value="<?php echo isset($_POST['email']) ? $email : '';  ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Mensaje</label>
          <div class="control">
            <textarea name="message" class="textarea" placeholder="Textarea" value="<?php echo isset($_POST['message']) ? $message : '';  ?>"></textarea>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" name="submit" class="button is-link">Mandar Mensaje</button>
          </div>
        </div>
        
      </form>
    </div>

    <div class="has-text-centered">
      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-58.44091415405274%2C-34.64069351631237%2C-58.40804100036622%2C-34.62017711043739&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=15/-34.6304/-58.4245">Ver mapa más grande</a></small>
    </div>
</main>
@endsection
