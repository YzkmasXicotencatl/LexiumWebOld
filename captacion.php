<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 
<?php include('resolucion.php'); ?> 
<section class="text-center titulocontenido">
    <h1>Captación</h1>
    <p>Capta alumnos con la ayuda de una evaluación breve y eficaz que identifica las preferencias de aprendizaje y vocacionales en 20 minutos.</p>
</section>

<section class="text-center contsgral py-5">
	<h5>Incrementa la captación de alumnos. </h5>
	<a href="#!" data-toggle="modal" data-target="#capta" title="Ver video" class="btn btn-primary">Ver más</a>

        <div class="container" style="margin-top: 4%;">
             <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                       <img class="img-fluid" src="resources/images/insight_grafica.png" />
                  </div>
                  <div class="col-md-2"></div>
             </div>
        </div>
</section>


<!-- Modal Video -->
<div class="modal fade" id="capta" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
      </div>
      <div class="modal-body">
          <img class="img-fluid" src="resources/images/captacion/insight_1.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_2.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_3.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_4.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_5.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_6.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_7.png" />
          <img class="img-fluid" src="resources/images/captacion/insight_8.png" />
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->


<?php include('solicitar_demo.php'); ?>
<?php include('otrosclientes.php'); ?>
<?php include('footer.php'); ?>