<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 
<?php include('resolucion.php'); ?> 
<section class="text-center titulocontenido">
    <h1>Admisión</h1>
    <p>Aplica un examen de admisión de nueva generación que identifique las habilidades de aprendizaje necesarias para ingresar a la institución.</p>
</section>

<section class="text-center contsgral py-5">
	<h5>Obtén un diagnóstico de admisión inmediato y en formato electrónico.</h5>
	<a href="#!" data-toggle="modal" data-target="#admision" title="Ver video" class="btn btn-primary">Ver más</a>

        <div class="container" style="margin-top: 4%;">
             <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                       <img class="img-fluid" src="resources/images/grafica_ingreso.png" />
                  </div>
                  <div class="col-md-2"></div>
             </div>
        </div>
</section>


<!-- Modal Video -->
<div class="modal fade" id="admision" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
      </div>
      <div class="modal-body">
           <iframe src="https://player.vimeo.com/video/309567536?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<p><a href="https://vimeo.com/309567536">Admisi&oacute;n</a> from <a href="https://vimeo.com/lexium">Lexium</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->


<?php include('solicitar_demo.php'); ?>
<?php include('otrosclientes.php'); ?>
<?php include('footer.php'); ?>