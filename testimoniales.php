<?php
$archivo_previo = __FILE__;
include 'header.php'; 
include 'menu.php';
?> 
<?php include('resolucion.php'); ?> 
<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        videoV = new Array('https://player.vimeo.com/video/337564752?title=0&byline=0', 'https://player.vimeo.com/video/337564765?title=0&byline=0', 'https://player.vimeo.com/video/339176472?title=0&byline=0', 'https://player.vimeo.com/video/340304718?title=0&byline=0', 'https://player.vimeo.com/video/340262886?title=0&byline=0', 'https://player.vimeo.com/video/340236661?title=0&byline=0', 'https://player.vimeo.com/video/340490513?title=0&byline=0', 'https://player.vimeo.com/video/340473378?title=0&byline=0', 'https://player.vimeo.com/video/342330223?title=0&byline=0');

        var p2 ="Coordinadora de Desarrollo";
        var p3 ="Directora";
        var p4 ="Líder de Proyecto";
        var p5 ="Docente";
        var p6 ="Directora Académica";
        var p7 ="Directora de Bachillerato";
        var p8 ="Orientadora Educativa y Docente";
        var p9 ="Maestra de Apoyo Psicopedagógico";
        
        nameP = new Array('Celeste Cortés', 'Georgina Amezcua', 'Margarita Castro', 'Mónica Espinosa', 'Elizabeth Navarro', 'Litzabel Legaria Lajud', 'Beatriz Báez López', 'Alejandra del Carmen Dardón', 'Jacqueline Fournier Hamz');
        position = new Array(p2,p3,p3,p4,p5,p6,p7,p8,p9,);
        title = new Array('Centro Escolar Hábitat S.C.', 'Colegio Albatros', 'Instituto Vasco de Quiroga', 'Instituto Juarez Lincoln', 'Instituto Juarez Lincoln', 'Instituto Juarez Lincoln', 'Instituto La Paz de Puebla', 'Instituto Juárez Lincoln', 'Liceo de Monterrey');

        var points = [0, 1, 2, 3, 4, 5, 6, 7, 8];
        points.sort(function(a, b){return 0.5 - Math.random()});

        for (var i = 0; i <= 8; i++){

            var videoUno = videoV[points[i]];
            var videoUnonameP = nameP[points[i]];
            var videoUnoposition = position[points[i]];
            var videoUnotitle = title[points[i]];
            document.getElementById("mostrarVideos").innerHTML += '<div class="col-md-4 col-sm-6"><iframe src="'+ videoUno +'" width="100%" height="315" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><h5 class="my-4 text-center">'+ videoUnonameP +'</h5><h6 class="my-4 text-center">'+ videoUnoposition +' del <span>'+ videoUnotitle +'</span></h6></div>';

        };

    });

</script>


<section class="text-center titulocontenido">
    <h1>Testimonios</h1>
</section>

<div class="container py-5">
    <!--<h2>Estos videos te darán una idea clara y contundente de por qué somos <br/>la empresa líder en aprendizaje.</h2><br/>-->
    <br/>
    <div class="row us_customers" id="mostrarVideos"></div>

</div>

<?php include('footer.php'); ?>