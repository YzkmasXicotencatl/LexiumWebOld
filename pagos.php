<?php
$archivo_previo = __FILE__;?> 
<?php include('email_contacto.php'); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<section class="text-center pt-5 mt-5">
    <h1 style="color: #27beef">Pago en línea Lexium</h1>
</section>
<div class="container py-5 about_us">
    <h4 class="mb-5 text-center">Sigue los pasos.</h4>
    <div class="row">
        <div class="col-12">
            <div style="color:black">
                <dl>
                    <dt>
                        1. Asegúrate de tener a la mano la clave (o claves) de inscripción que te proporcionó la institución educativa.  (Una por cada nivel escolar en el que tengas alumnos inscritos)
                    </dt>
<!--
                    <dd>
                        Esta clave corresponde al grupo del alumno, por lo que es necesario contar con ella.<br>
                        La clave será similar a: <code style="color:blue">AA99A</code> 
                    </dd>
-->
                    <dt>2. Desde tu celular o tableta descarga el APP: LexPay.</dt>
                    <dd class="text-center">
                        <a target="_blank" href="https://apps.apple.com/mx/app/lexpay/id1515773359">
                            <img src="resources/pagos/appstore.png" width="200">
                        </a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.lexium.lexpay&hl=es">
                            <img src="resources/pagos/googleplay.png" width="250">
                        </a>
                    </dd>
                    <dt>3. Sigue las instrucciones dentro del APP.</dt>
                </dl>
                
            </div>
        </div>
    </div>
</div>

<div style="width: 100%; height: 150px;"></div>


<?php include('footer.php'); ?>
