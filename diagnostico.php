<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 
<?php include('resolucion.php'); ?> 
<section class="text-center titulocontenido">
    <h1>Diagnóstico</h1>
    <p>Apóyate en una plataforma diagnóstica que contiene el DNA de las habilidades de aprendizaje con las que cuenta tu comunidad educativa.</p>
</section>

<section class="text-center contsgral py-5">
	<h5>6 tipos de diagnósticos contenidos en una poderosa plataforma electrónica que te asombrará</h5>
        <div class="container">
            <div class="row">
                 <div class="col-md-6 datasgral">
	   	    	     	  <div class="row">
	   	    	     	        <div class="col-md-4 col-6">
                                     <img class="img-fluid" src="./resources/icons/diagnostico/individual_icon.png" alt="Individual" title="Individual">
	   	    	     	        </div>
	   	    	     	        <div class="col-md-8 col-6">
                                     <h5>Individual</h5>
                                     <p>Gráfica que muestra el perfil de cada persona en relación a la evaluación aplicada.</p>
                                     <a href="#!" data-toggle="modal" data-target="#individual" class="btn btn-primary" href="evaluacion.php">Ver más</a>
	   	    	     	        </div>
	   	    	     	  </div>
	   	    	     </div>
                 <div class="line"></div>
                 <div class="col-md-6 datasgral">
                    <div class="row">
                          <div class="col-md-4 col-6 orderdata3">
                                     <img class="img-fluid" src="./resources/icons/diagnostico/grupal_icon.png" alt="Grupal" title="Grupal">
                          </div>
                          <div class="col-md-8 col-6 orderdata4">
                                     <h5>Grupal</h5>
                                     <p>Empodera al docente con una tabla que muestra las habilidades de aprendizaje de cada alumno y, por consecuencia, del grupo completo.</p>
                                     <a href="#!" data-toggle="modal" data-target="#grupal" class="btn btn-primary" href="evaluacion.php">Ver más</a>
                          </div>
                    </div>
                 </div>
                 <div class="line"></div>
                 <div class="col-md-6 datasgral">
                   <div class="row">
                         <div class="col-md-4 col-6">
                                     <img class="img-fluid" src="./resources/icons/diagnostico/institucional_icon.png" alt="Institucional" title="Institucional">
                         </div>
                         <div class="col-md-8 col-6">
                                     <h5>Institucional</h5>
                                     <p>Obtén un reporte ejecutivo del nivel de desarrollo de las habilidades de aprendizaje de toda tu comunidad educativa.</p>
                                     <a href="#!" data-toggle="modal" data-target="#institucional" class="btn btn-primary" href="evaluacion.php">Ver más</a>
                         </div>
                   </div>
                </div>
                <div class="line"></div>
                <div class="col-md-6 datasgral">
                   <div class="row">
                         <div class="col-md-4 col-6 orderdata3">
                                     <img class="img-fluid" src="./resources/icons/diagnostico/comparativo_icon.png" alt="Comparativo" title="Comparativo">
                         </div>
                         <div class="col-md-8 col-6 orderdata4">
                                    <h5>Comparativo</h5>
                                    <p>Compara los resultados obtenidos en dos aplicaciones consecutivas.</p>
                                    <a href="#!" data-toggle="modal" data-target="#comparativo" class="btn btn-primary" href="evaluacion.php">Ver más</a>
                         </div>
                   </div>
                </div>
                <div class="line"></div>
                <div class="col-md-6 datasgral">
                   <div class="row">
                         <div class="col-md-4 col-6">
                                    <img class="img-fluid" src="./resources/icons/diagnostico/ppa_icon.png" alt="Perﬁl y Potencial de Aprendizaje" title="Perﬁl y Potencial de Aprendizaje">
                         </div>
                         <div class="col-md-8 col-6">
                                    <h5>Diagnóstico ejecutivo</h5>
                                    <p>Consulta fácilmente el perfil y potencial de aprendizaje de cada persona.</p>
                                    <a href="#!" data-toggle="modal" data-target="#PPA" class="btn btn-primary" href="evaluacion.php">Ver más</a>
                         </div>
                   </div>
                </div>
                <div class="line"></div>
                <div class="col-md-6 datasgral">
                   <div class="row">
                         <div class="col-md-4 col-6 orderdata3">
                                    <img class="img-fluid" src="./resources/icons/diagnostico/personalizado_icon.png" alt="Personalizado" title="Personalizado">
                         </div>
                         <div class="col-md-8 col-6 orderdata4">
                                    <h5>Personalizado</h5>
                                    <p>involucra a cada evaluado en un proceso de autoconocimiento y desarrollo intencionado.</p>
                                    <a href="#!" data-toggle="modal" data-target="#personalizado" class="btn btn-primary" href="evaluacion.php">Ver más</a>
                         </div>
                   </div>
                </div>
            </div>
        </div>
</section>


<!-- Modal Individual -->
<div class="modal fade" id="individual" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Individual</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_individual.jpg" alt="Individual" title="Individual">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Individual -->

<!-- Modal PPA -->
<div class="modal fade" id="PPA" tabindex="-1" role="dialog" aria-labelledby="ppaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ppaLabel">Perﬁl y Potencial de Aprendizaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_ppa.png" alt="Perﬁl y Potencial de Aprendizaje" title="Perﬁl y Potencial de Aprendizaje">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal PPA -->

<!-- Modal personalizado -->
<div class="modal fade" id="personalizado" tabindex="-1" role="dialog" aria-labelledby="personalizadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personalizadoLabel">Personalizado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_personalizado.png" alt="Personalizado" title="Personalizado">
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal personalizado -->

<!-- Modal Grupal -->
<div class="modal fade" id="grupal" tabindex="-1" role="dialog" aria-labelledby="GrupalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GrupalLabel">Grupal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_grupal.png" alt="Grupal" title="Grupal">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Grupal -->

<!-- Modal Institucional -->
<div class="modal fade" id="institucional" tabindex="-1" role="dialog" aria-labelledby="InstitucionalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="InstitucionalLabel">Institucional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_institucional.png" alt="Institucional" title="Institucional">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Institucional -->

<!-- Modal Comparativo -->
<div class="modal fade" id="comparativo" tabindex="-1" role="dialog" aria-labelledby="ComparativoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ComparativoLabel">Comparativo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="./resources/images/diagnostico/diagnostico_comparativo.png" alt="Comparativo" title="Comparativo">
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Comparativo -->

<?php include('solicitar_demo.php'); ?>
<?php include('otrosclientes.php'); ?>
<?php include('footer.php'); ?>