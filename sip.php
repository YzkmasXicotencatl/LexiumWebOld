<?php
$archivo_previo = __FILE__;
include 'header.php' ?>
<?php include('menu.php'); ?>
<?php include('resolucion.php'); ?> 
<section class="text-center titulocontenido">
    <h1>Sistema de Ingreso y Permanencia</h1>
    <p>Descubre las increíbles posibilidades que brinda esta innovadora propuesta para admisión, selección, acompañamiento, tutoraje y desarrollo de cada alumno que ingresa en tu institución.</p>
</section>

<section class="text-center contsgral py-5">
	<h5>Tu mejor opción para atraer y retener alumnado.</h5>
	<a href="#!" data-toggle="modal" data-target="#SIP" title="Ver video" class="btn btn-primary">Ver video</a>
        <div class="container" style="margin-top: 4%;">
             <div class="row">
            	 <div class="col-md-6 datasgral" id="admision">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6">
                                 <img class="img-fluid" src="./resources/icons/sip/admision_icon.png" alt="Admisión" title="Admisión">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6">
                                 <h5>Admisión</h5>
                                 <p>Evaluación de ingreso basada en habilidades de aprendizaje que genera un diagnóstico para la toma de decisiones.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="guia">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6 orderdata3">
                                 <img class="img-fluid" src="./resources/icons/sip/guia_vocacional_icon.png" alt="Guía vocacional" title="Guía vocacional">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6 orderdata4">
                                 <h5>Guía vocacional</h5>
                                 <p>Listado de las mejores opciones profesionales para el candidato de acuerdo a su perﬁl de aprendizaje.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="pronostico">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6">
                                 <img class="img-fluid" src="./resources/icons/sip/pronostico_permanencia_icon.png" alt="Pronóstico de permanencia" title="Pronóstico de permanencia">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6">
                                 <h5>Pronóstico de permanencia</h5>
                                 <p>Herramienta para identiﬁcar las fortalezas y áreas de oportunidad de cada alumno en relación con lo que se espera de él en la institución.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="riesgo">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6 orderdata3">
                                 <img class="img-fluid" src="./resources/icons/herramientas/riesgo_abandono_icon.png" alt="Riesgo de abandono" title="Riesgo de abandono">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6 orderdata4">
                                 <h5>Riesgo de abandono</h5>
                                 <p>Herramienta que apoya al tutor, mentor, orientador, psicólogo en su importante labor de acompañamiento de cada alumno.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
             </div>
        </div>
</section>


<!-- Modal Video -->
<div class="modal fade" id="SIP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa de Desarrollo Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <iframe src="https://player.vimeo.com/video/489617317?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->


<?php include('solicitar_demo.php'); ?>
<?php include('otrosclientes.php'); ?>
<?php include('footer.php'); ?>