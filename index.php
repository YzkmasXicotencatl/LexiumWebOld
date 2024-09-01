<?php
$archivo_previo = __FILE__;
include 'header.php' ?>
<?php include('email_contacto2.php'); ?>
<script type='text/javascript'>
window.__lo_site_id = 289469;

  (function() {
    var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
    wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
    })();
</script>
<body>
	  <div class="gral">
        <?php include('resolucion.php'); ?> 

	    <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="resources/bg.mp4" type="video/mp4">
        </video>
        <div class="container2 h-100  d-flex align-items-center justify-content-center ">
          <div class="h-70 w-100 text-center selectbox">
            <div class="texbox w-100 h-75">
                 <div class="imgbox"> 
                    <img src="resources/images/logo_lexium_azul_160.png" alt="Lexium Logo" title="Lexium Logo">
                 </div>
                 <h5 class="display-5">Sonríe, has encontrado la plataforma más eficiente para impulsar el aprendizaje</h5>
                 <h5 class="display-5">Selecciona la opción deseada</h5>
                 <a type="button" href="k9.php" class="w-75 btn btn-primary" id="k9"> Institución educativa (K-9) </a>
                 <a type="button" href="preparatoria.php" class="w-75 btn btn-primary" id="pu">Preparatoria / Universidad </a>
                 <a type="button" href="consultor.php" class="w-75 btn btn-primary" id="cop">Consultor/ Orientador/ Psicopedagogo </a> 
                 <a type="button" data-toggle="modal" data-target="#exampleModal"><img style="max-width: 60%; display: block; margin: 0 auto;" class="img-fluid" src="resources/flecha-boton.png"></a>
            </div>
          </div>
        </div>
    </div>

     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <div class="modal-header">
              <h2 style=" font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2a328f;">En Lexium queremos saber de ti.</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
         </div>
      <div class="modal-body">
           <div class="contactcontact">
                <form action="index.php" class="needs-validation" method="POST" role="form" autocomplete="off" id="myForm">
                                <input type="hidden" value="-1" name="validacion" id="validacion">
                                <input type="hidden" name="Landing" value="Formulario_principal">

                                <div class="form-group" style="margin: 10px">
                                     <div class="input-group mb-3">
                                          <input class="form-control" required="true" type="text" placeholder="*Nombre" name="nombre" id="nombre" value="<?php echo (isset($_POST ['nombre']) ? $_POST['nombre'] : ''); ?>">
                                          <?php if (array_key_exists('nombre', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['nombre'] ?></i>
                                           </span>
                                          <?php endif; ?>
                                     </div>
                                      <div class="input-group mb-3">
                                          <input class="form-control" required="true" type="text" placeholder="*Institución" name="institucion" id="institucion" value="<?php echo (isset($_POST ['institucion']) ? $_POST['institucion'] : ''); ?>">
                                          <?php if (array_key_exists('institucion', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['institucion'] ?></i>
                                           </span>
                                          <?php endif; ?>
                                     </div>
                                     <div class="input-group mb-3">
                                          <input class="form-control" required="true" type="text" placeholder="*Puesto" name="puesto" id="puesto" value="<?php echo (isset($_POST ['puesto']) ? $_POST['puesto'] : ''); ?>">
                                          <?php if (array_key_exists('puesto', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['puesto'] ?></i>
                                           </span>
                                          <?php endif; ?>
                                     </div>
                                     <div class="input-group  mb-3">
                                          <input class="form-control" type="text" placeholder="*Teléfono de contacto" id="telefono" name="telefono" value="<?php echo (isset($_POST ['telefono']) ? $_POST['telefono'] : ''); ?>">
                                          <?php if (array_key_exists('telefono', $has_error)): ?>
                                          <span class="text-danger has-error">
                                              <i><?php echo $has_error['telefono'] ?></i>
                                          </span>
                                          <?php endif; ?>
                                     </div>

                                     <div class="input-group  mb-3">
                                                          <input class="form-control" required="true" type="email" placeholder="*Email" id="email" name="email" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
                                          <?php if (array_key_exists('email', $has_error)): ?>
                                          <span class="text-danger has-error">
                                                <i><?php echo $has_error['email'] ?></i>
                                          </span>
                                          <?php endif; ?>
                                     </div>

                                     <div class="input-group mb-3">
                                          
                                               <p class="mr-4">*Nivel:</p>
                                               <input style="margin-top: 1%; margin-right:-1.6%" type="checkbox" id="Educacion_basica" name="niveles[]" value="Educación básica">
                                               <label  for="Ingreso a Preparatoria"  class="mr-4">Ingreso a Preparatoria</label>
                                               <input style="margin-top: 1%; margin-right:-1.6%" type="checkbox" id="Preparatoria" name="niveles[]" value="Preparatoria">
                                               <label for="Ingreso a Universidad"  class="mr-4">Ingreso a Universidad</label>
                                               <input style="margin-top: 1%; margin-right:-1.6%" type="checkbox" id="otros" name="niveles[]" value="Otros">
                                               <label for="otros"  class="mr-4">Otros</label><br>
                                               <p>Seleccione las tres casillas para indicar todas las opciones.</p>
                                     </div>
                                    
                                                     <input class="form-control" type="hidden" placeholder="Asunto" id="asunto" name="subject" value="OP by Lexium">
                                     
                                     <div class="input-group  mb-3">
                                          <textarea class="form-control" name="mensaje" rows="5" placeholder="*Describe lo que necesitas o estás buscando, seguro te podemos apoyar."><?php echo (isset($_POST ['mensaje']) ? $_POST['mensaje'] : ''); ?></textarea>
                                           <?php if (array_key_exists('mensaje', $has_error)): ?>
                                             <span class="text-danger has-error">
                                               <i><?php echo $has_error['mensaje'] ?></i>
                                             </span>
                                           <?php endif; ?>
                                     </div>

                                     <p>Los campos marcados con * son requeridos</p>
                                
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group text-center">
                                    <?php
                                    $THE_REFER = '';
                                    if (isset($_SERVER['HTTP_REFERER']))
                                    {
                                        $THE_REFER=$_SERVER['HTTP_REFERER'];
                                    }
                                    ?>
                                      <input type="hidden" name="Plataforma" value="<?php echo $THE_REFER;?>">
                                      <input type="hidden" name="completo" value="1">
                                      <button type="submit" class="btn contactobtn">Contactar</button>
                                </div>
                </form>
           </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript">
            $('select').change(function() {
                if ($(this).children('option:first-child').is(':selected')) {
                    $(this).addClass('placeholder');
                } else {
                    $(this).removeClass('placeholder');
                }
            });

            $('#cambiar').change(function(){
                var valorCambiado =$(this).val();
                if((valorCambiado == 'Institucional')){
                   $('.institucional').css('display','block');
                 }
                 else{
                    $('.institucional').css('display','none');
                 }
            });




            <?php $varLocation = 'https://www.lexiumonline.com/gracias.php'; ?>
            $(document).ready(function () {
            var tksLocation = '<?php echo $varLocation; ?>';
            $("#validacion").val("<?php echo date("d");?>");
                <?php if(isset($success) and $success):?>
                        //toastr["success"]("Pronto estaremos en contacto contigo!", "Hemos recibido tu mensaje");
                        location.href = tksLocation;
                        $("form").find('input:text,textarea').val('');
                        $("form").find('input:checkbox').removeAttr('checked').removeAttr('selected');
                        $('#myForm').trigger("reset");
                <?php elseif(isset($success) and !$success):?>
                        //toastr["error"]("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                        alert("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                        $('#myForm').trigger("reset");
                <?php endif;?>
            });

</script>
<style type="text/css">
  .modal-dialog { max-width: 60%; margin: 1.75rem auto; }
.modal-content { border: none!important;  }
.modal-header { border-bottom: none!important; }
.close span { font-size: 3rem; color: #2a328f; }
.close span:hover{ color: #f78f1e; }
.modal-footer { border-top: none!important; }
.datacontact { padding-top: 10%; padding-bottom: 5%; background-position: center; background-repeat: no-repeat; background-size: cover; overflow: hidden; max-width: 1280px; margin: 0 auto }
.datacontact p { color: white; font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.5rem; margin-bottom: 10%;  }
.infocontact {padding-left: 5%; padding-top: 2%; padding-right: 3%; }
.contactcontact { background-color: white; padding: 2%; border-radius: 5%;  }
.contactobtn { font-family: 'Montserrat', sans-serif; font-weight: 600; background-color: #f78f1e; color: white; font-size: 1.5rem; padding: 3%; width: 70%; margin: 0 auto; display: block; text-align: center; }
.contactobtn:hover { background-color: #2a328f; color: #f78f1e; }
</style>

</body>
</html>