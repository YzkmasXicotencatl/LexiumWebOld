<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 

<section class="text-center titulocontenido">
    <h1>Orientación Profesional</h1>
    <p>Programa que cuenta con una batería de evaluaciones, más diversas herramientas que dirigen a la persona a una decisión muy acertada.</p>
</section>

<section class="text-center contsgral py-5">
	<h5>Ofrece una orientación profesional efectiva y acertada.</h5>
	<a href="#!" data-toggle="modal" data-target="#OP" title="Ver video" class="btn btn-primary">Ver video</a>
        <div class="container" style="margin-top: 4%;">
             <div class="row">
            	 <div class="col-md-6 datasgral" id="evaluaciones">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6">
                                 <img class="img-fluid" src="resources/images/op/evaluaciones.png" alt="Evaluaciones" title="Evaluaciones">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6">
                                 <h5>Evaluaciones</h5>
                                 <p>5 evaluaciones que permiten el autoconocimiento.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="teoria">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6 orderdata3">
                                 <img class="img-fluid" src="resources/images/op/teoria.png" alt="Teoría" title="Teoría">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6 orderdata4">
                                 <h5>Teoría</h5>
                                 <p>Información pertinente sobre el mercado laboral, tendencias, y aspectos importantes a tomar en cuenta.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="practica">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6">
                                 <img class="img-fluid" src="resources/images/op/practica.png" alt="Práctica" title="Práctica">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6">
                                 <h5>Práctica</h5>
                                 <p>Ejercicios y actividades enfocados al autoconocimiento y a la toma de decisiones efectiva.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
                 <div class="line"></div>
	   	    	 <div class="col-md-6 datasgral" id="plan_vida">
	   	    	 	  <div class="row">
	   	    	 	        <div class="col-md-4 col-6 orderdata3">
                                 <img class="img-fluid" src="resources/images/op/plan_vida.png" alt="Plan de vida" title="Plan de vida">
	   	    	 	        </div>
	   	    	 	        <div class="col-md-8 col-6 orderdata4">
                                 <h5>Plan de vida y carrera</h5>
                                 <p>Actividad que encamina a la decisión final.</p>
	   	    	 	        </div>
	   	    	 	  </div>
	   	    	 </div>
<?php if(0):?>
                 <div class="line"></div>
                 <div class="col-md-12 pt-5" style="text-align: center;">
                      <h5>Además <img style="width: 10%;" class="img-fluid" src="resources/images/op/lexium_op_1.png" alt="Orientación Profesional" title="Orientación Profesional"> permite a cualquier persona tener acceso a un increíble programa de Orientación Profesional en formato electrónico y a distancia.</h5>

                      <a href="https://opbylexium.zohocommerce.com/"><img style="width: 40%;" class="img-fluid" src="resources/images/op/lexium_op_1.png" alt="Orientación Profesional" title="Orientación Profesional"></a>
                 </div>
<?php endif;?>
             </div>
        </div>
</section>


<div class="modal fade" id="OP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Orientación Profesional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <iframe width="100%" height="360" src="https://www.youtube.com/embed/6jjhP1-qSuY?controls=0&amp;start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


<?php include('solicitar_demo.php'); ?>
<?php include('otrosclientes.php'); ?>
<?php include('footer.php'); ?>