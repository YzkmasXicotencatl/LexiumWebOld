<script type='text/javascript'>
window.__lo_site_id = 289469;

  (function() {
    var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
    wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
    })();
</script>
<?php
if($_SERVER['HTTP_HOST'] == 'localhost')
{
?>
<script>
  var customData = {
     'name' : 'Eloy Marroquín',
     'email' : 'eloy@lexiumonline.com'
  }
  window._loq = window._loq || []    
  window._loq.push(['custom', customData])
</script>
<?php 
}
?>
<footer>
	<div class="container">
		 <div class="row formulario">
		 	  <div class="col-md-6">
		 	  	  <h1>Descubre lo que Lexium puede hacer por ti</h1>
		 	  </div>
		 	  <div class="col-md-6">
		 	  	   <form class="pt-5 pb-3 form" method="post" action="contacto.php">
                        <div class="form-row align-items-center">
                            <div class="col-auto col-6" style="width: 60%;">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control mb-4" id="inlineFormInputGroup" placeholder="Email *" required />
                                </div>
                            </div>
                            <div class="col-auto col-6">
                                <input type="hidden" name="completo" value="0">
                                <button type="submit" class="btn btn-success mb-4" style="margin-top:0">Solicitar Demo</button>
                            </div>
                        </div>
                    </form>
		 	  </div>
		 </div>

     <div class="row menuses">
          <div class="col-md-8 col-12">
               <h3>Soluciones</h3>
               <div class="row">
                    <div class=" col-xl-3 col-md-6 col-6">
                         <ul>
                             <li><a class="strongetxt" href="/skillmap.php">Skill Map</a></li>
                             <li>
                                 <a  href="/evaluacion.php">Evaluación</a>
                                 <a target="_blank" class="guia" href="/pdf/guia_lexium_skill_map.pdf" title="descarga la Guia Lexium Skill Map">Guía</a>
                             </li>
                             <li><a  href="/diagnostico.php">Diagnóstico</a></li>
                             <li><a  href="/herramientas.php">Herramientas</a></li>
                         </ul>
                    </div>
                    <div class=" col-xl-4 col-md-6 col-6">
                         <ul>
                            <li><a class="strongetxt"  href="/skillmaptrainingpu.php">Skill Training</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DP" title="Ver video">Entrenamiento Skill T</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#Offline" title="Ver video">Offline</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#DC" title="Ver video">DC</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#PPC" title="Ver video">PPC</a></li>
                            <li><a href="/op.php">OP</a></li>
                         </ul>
                    </div>
                    <div class=" col-xl-5 col-md-12">
                         <ul>
                             <li><a class="strongetxt"  href="/sip.php">Captación/ Ingreso / Permanencia</a></li>
                             <li><a href="/captacion.php">Captación</a></li>
                             <li>
                                <a href="/admision.php">Admisión</a>
                                <a target="_blank" class="guia2" href="/pdf/guia_lexium_exa_admision.pdf" title="descarga la EVALUACIÓN INGRESO/ ADMISIÓN">Guía</a>
                              </li>
                             <li><a href="/sip.php">Sistema de ingreso y permanencia</a></li>
                         </ul>
                    </div>
               </div>
          </div>
          <div class="col-md-2 col-6">
               <h3>Niveles</h3>
               <ul>
                  <li><a  href="/k9.php">K9</a></li>
                  <li><a  href="/preparatoria.php">Preparatoria / Universidad</a></li>
                  <li><a  href="/consultor.php">Consultor / orientador / psicopedagogo</a></li>
               </ul>
          </div>
          <div class="col-md-2 col-6">
               <h3>Más</h3>
               <ul>
                  <li><a  href="/nosotros.php">Nosotros</a></li>
                  <li><a  href="http://blog.lexiumonline.com/">Blog</a></li>
                  <li><a  href="/contacto.php">Contacto</a></li>
               </ul>
          </div>
     </div>

	   <div class="row privacidad">
          <div class="col-md-12">
                <div class="privacy_advise text-center">
                    Copyright © <?php 
                    $Year = date("Y");
                    echo "$Year";
                    echo "\n";
                    ?> Lexium All Rights Reserved.
                   <br/><a href="/politicas.php">Aviso de Privacidad</a>
                </div>
          </div>
     </div>
	</div>

  <!-- Modal Video -->
<div class="modal fade" id="DP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa de Desarrollo Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <iframe src="https://player.vimeo.com/video/365836245?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="DC" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Desarrollo de competencias docentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://player.vimeo.com/video/379313906?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>
<!-- Termina Modal Video -->
<!-- Modal Video -->
<div class="modal fade" id="PPC" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Programa Potenciador de Competencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <iframe src="https://player.vimeo.com/video/380284937?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="OP" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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
<!-- Termina Modal Video --><!-- Modal Video -->
<div class="modal fade" id="Offline" tabindex="-1" role="dialog" aria-labelledby="individualLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="individualLabel">Orientación Profesional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <img class="img-fluid" src="/resources/images/offline/offline_1.png" />
          <img class="img-fluid" src="/resources/images/offline/offline_2.png" />
          <img class="img-fluid" src="/resources/images/offline/offline_3.png" />
          <img class="img-fluid" src="/resources/images/offline/offline_4.png" />
          <img class="img-fluid" src="/resources/images/offline/offline_5.png" />
          <img class="img-fluid" src="/resources/images/offline/offline_6.png" />
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Video -->
</footer>
