<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 

<?php include('email_contacto.php'); ?>

<?php include('resolucion.php'); ?> 
      <section class="text-center titulocontenido">
         <h1>Contacto</h1>
      </section>
      <section class="b2_map">
        <div class="container py-5">
          <h2>En Lexium queremos saber de ti.</h2>
          <div class="row">
            <div class="col-md-6">
              <p>Danos tus datos y nos pondremos en contacto muy pronto.</p>
              <div class="form">
                <form action="contacto.php" method="POST" role="form" autocomplete="off" id="myForm">
                <input type="hidden" value="-1" name="validacion" id="validacion">
                  <div class="form-group">
          						<input type="text" name="name" class="form-control" placeholder="Nombre" value="<?php echo (isset($_POST ['name']) ? $_POST['name'] : ''); ?>" required>
          						<?php if (array_key_exists('name', $has_error)): ?>
          						<span class="text-danger has-error">
          							<i><?php echo $has_error['name'] ?></i>
          						</span>
          						<?php endif; ?>
                  </div>

                  <div class="form-group">
                       <label for="tipo"><p style="font-size: 1rem;">Quieres saber más sobre Lexium para:</p></label>
                       <select class="form-control" id="tipo" name="tipo" onChange="mostrar(this.value);">
                         <option value="institucion">Una institución educativa</option>
                         <option value="psicopedagogo">Un consultorio psicopedagogo</option>
                       </select>
                  </div>

                  <div id="personal2">
                       <p>¡No esperes más!  Súmate a las miles de personas que se apoyan en Lexium para su desarrollo personal, estamos listos para apoyarte, <a href="https://lexiumlite.zohocommerce.com/">haz clic aquí</a></p>
                  </div>

                  <div id="ingresoadmision2" style="display: none; margin-bottom: 2%;">
                       <p>Descarga la
                          <a target="_blank" class="guia3" href="pdf/guia_lexium_exa_admision.pdf" title="descarga la EVALUACIÓN INGRESO/ ADMISIÓN">Guía</a> de admisión

                       </p>
                  </div>

                  <div id="gradoaca" class="form-group" style="display: none;">
                       <p>¡No esperes más!   Agenda un demo con uno de nuestros ejecutivos.</p>
                          <div class="form-group">
                               <input type="text" name="institucion" class="form-control" placeholder="Institución" value="<?php echo (isset($_POST ['institucion']) ? $_POST['institucion'] : ''); ?>">
                          </div>
                         </br>
                          <div class="form-group">
                         <input type="text" name="alumnos" class="form-control" placeholder="Cantidad de alumnos" value="<?php echo (isset($_POST ['alumnos']) ? $_POST['alumnos'] : ''); ?>">
                         </div>
                         </br>
                         <div class="row">
                              <div class="col-md-6">
                                   <p>Niveles Escolares</p>
                              </div>
                              <div class="col-md-6">
                                   <input type="checkbox" id="Educacion_basica" name="niveles[]" value="Educación básica">
                                   <label for="Educación básica">Básica</label><br>
                                   <input type="checkbox" id="Preparatoria" name="niveles[]" value="Preparatoria">
                                   <label for="Preparatoria">Media Superior</label><br>
                                   <input type="checkbox" id="Universidad" name="niveles[]" value="Universidad">
                                   <label for="Universidad">Superior</label>
                              </div>
                         </div> 
                         </br>  
                         <input type="text" name="puesto" class="form-control" placeholder="Puesto" value="<?php echo (isset($_POST ['puesto']) ? $_POST['puesto'] : ''); ?>">
                         </br>
                  </div>

                  <div id="consultorio" style="display: none;">
                       <p>No esperes más!  Súmate a los profesionistas que se apoyan en Lexium para eficientizar su consulta privada, orientación y/o acompañamiento, estamos listos para apoyarte, <a href="https://lexiumlite.zohocommerce.com/">haz clic aquí</a></p>
                  </div>

                  

                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Describe lo que necesitas o estás buscando, seguro te podemos apoyar."><?php echo (isset($_POST ['message']) ? $_POST['message'] : ''); ?></textarea>
                    <?php if (array_key_exists('message', $has_error)): ?>
                      <span class="text-danger has-error">
                        <i><?php echo $has_error['message'] ?></i>
                      </span>
                    <?php endif; ?>
                  </div>

          <div class="form-group">
            <p>En dónde te encontramos</p>
          </div>
				  <div class="form-row">

  					<div class="form-group col-md-6">
  					  <input type="email" name="email" class="form-control" placeholder="Correo" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>" required>
            <?php if (array_key_exists('email', $has_error)): ?>
              <span class="text-danger has-error">
                <i><?php echo $has_error['email'] ?></i>
              </span>
            <?php endif; ?>
  					</div>
  					<div class="form-group col-md-6">
  					  <input type="text" name="phone" class="form-control" placeholder="Teléfono" value="<?php echo (isset($_POST ['phone']) ? $_POST['phone'] : ''); ?>" required="" maxlength="10" onkeypress="phoneno()">
  					  <?php if (array_key_exists('phone', $has_error)): ?>
  					  <?php endif; ?>
  					</div>
				  </div>

				  <div class="form-row">
                    <div class="form-group col-md-6">
						<div id="g-recaptcha-1"></div>
						<?php if (array_key_exists('g-recaptcha-response', $has_error)): ?>
						<span class="text-danger has-error">
						  <i><?php echo $has_error['g-recaptcha-response'] ?></i>
						</span>
						<?php endif; ?>
                    </div>
                    <div class="form-group col-md-6 text-right">
                      <input type="hidden" name="Plataforma" value="<?php echo $_SERVER['HTTP_REFERER'];?>">
                      <input type="hidden" name="completo" value="1">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <br/><br/><br/>
              <p>Aunque estamos en Monterrey, tenemos presencia en toda Latinoamérica.</p>
              <h5>Dirección</h5>
              <p>
                Calzada del Valle 400 Suite 127
                San Pedro Garza García, NL
                <br/>
                TEL   <a href="tel:8113666070">81 1366 6070</a>
              </p>
              <h5>Email</h5>
              <p>
                <a href="mailto:servicio@lexiumonline.com">servicio@lexiumonline.com</a>
              </p>
            </div>
          </div>
        </div>
      </section>

<?php $varLocation = 'https://www.lexiumonline.com/gracias.php'; ?>
<script type="text/javascript">
  function mostrar(id) {
    if (id == "personal") {
        $("#personal2").show();
    }
    if (id !== "personal") {
        $("#personal2").hide();
    }

    if (id == "ingresoadmision") {
        $("#ingresoadmision2").show();
    }
    if (id !== "ingresoadmision") {
        $("#ingresoadmision2").hide();
    }

    if (id == "institucion") {
        $("#gradoaca").show();
    }
    if (id !== "institucion") {
        $("#gradoaca").hide();
    }

    if (id == "psicopedagogo") {
        $("#consultorio").show();
    }
    if (id !== "psicopedagogo") {
        $("#consultorio").hide();
    }
  }
</script>
<script type="text/javascript">
      function phoneno(){   
      $('#phone').keypress(function(e) { 
       var a = []; 
       var k = e.which; 

       for (i = 48; i < 58; i++) 
        a.push(i); 

       if (!(a.indexOf(k)>=0)) 
        e.preventDefault(); 
      }); 
     } 
</script>

<script type="text/javascript">
	$(document).ready(function () {
    var tksLocation = '<?php echo $varLocation; ?>';
    $("#validacion").val("<?php echo date("d");?>");
		<?php if(isset($success) and $success):?>
				//toastr["success"]("Pronto estaremos en contacto contigo!", "Hemos recibido tu mensaje");
        location.href = tksLocation;
				$("form").find('input:text,input:email, textarea').val('');
				$("form").find('input:checkbox').removeAttr('checked').removeAttr('selected');
                $('#myForm').trigger("reset");
		<?php elseif(isset($success) and !$success):?>
				toastr["error"]("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                $('#myForm').trigger("reset");
		<?php endif;?>

	});

  if($("#g-recaptcha-1").length > 0){
          var recaptcha1;
          var myCallBack = function() {

            recaptcha1 = grecaptcha.render('g-recaptcha-1', {
            'sitekey' : '6LfLfW8UAAAAAF7n_cXsJa5fTfBA1hSyKNiLbVL6',
            'theme' : 'light'
            });
          };
        }
</script>

<?php include('footer.php'); ?>