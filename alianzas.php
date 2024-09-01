<style type="text/css">
     .container{
          padding: 5% 1%;
     }
     .carousel-item{
        background-color: #f5f7fb!important;
     }

     .tarjeta{
        padding: 3%;
     }

     .tarjeta a{
       text-decoration: none;
       color: #888;
     }

     .card{
        background-color: transparent!important;
        border: none!important;
     }

     .card-text{
        padding-top: 15%;
     }

     .carousel-indicators li{
         background-color: #27beef;
     }

     .clogos{
        display: none;
     }

     @media (max-width:780px){
         .carousel{
            display: none;
         }

         .clogos{
            display: block;
         }

     }

</style>

<div class="container">
      <h1 style="text-align: center;">Alianzas estratégicas de Lexium</h1>
      <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev">
            <img src="images/alianzas/back.png">
        </a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next">
           <img src="images/alianzas/next.png">
        </a>
      </div>
      <!--/.Controls-->


      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4 tarjeta">
                <a href="https://red-larousse.com.mx/" target="_blank">
                   <img class="card-img-top" src="images/alianzas/<?php lang('alianza02');?>"alt="<?php lang('alianza01');?>">
                   <p class="card-text"><?php lang('alianza03');?></p>
                </a>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                 <a href="http://sea.anahuac.mx/" target="_blank">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza05');?>"alt="<?php lang('alianza04');?>">
                    <p class="card-text"><?php lang('alianza06');?></p>
                 </a>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                 <a href="http://www.e-libro.mx/" target="_blank">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza08');?>"alt="<?php lang('alianza07');?>">
                    <p class="card-text"><?php lang('alianza09');?></p>
                 </a>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 tarjeta">
                 <a href="https://www.caceca.org/" target="_blank">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza11');?>"alt="<?php lang('alianza10');?>">
                    <p class="card-text"><?php lang('alianza12');?></p>
                 </a>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                 <a href="https://www.potentor.com.mx/" target="_blank">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza14');?>"alt="<?php lang('alianza13');?>">
                    <p class="card-text"><?php lang('alianza15');?></p>
                 </a>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                 <a href="https://www.eduk2.org/" target="_blank">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza17');?>"alt="<?php lang('alianza16');?>">
                    <p class="card-text"><?php lang('alianza18');?></p>
                 </a>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 tarjeta">
                <img class="card-img-top" style="width: 50%; display: block; margin: 0 auto;" src="images/alianzas/<?php lang('alianza20');?>"alt="<?php lang('alianza19');?>">
                <p class="card-text"><?php lang('alianza21');?></p>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block tarjeta">
                 <a href="http://www.riosdetinta.com/">
                    <img class="card-img-top" src="images/alianzas/<?php lang('alianza23');?>"alt="<?php lang('alianza22');?>">
                    <p class="card-text"><?php lang('alianza24');?></p>
                 </a>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

    <div class="clogos">
          <div class="row" style="margin-bottom: 10%;">
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="https://red-larousse.com.mx/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza02');?>"alt="<?php lang('alianza01');?>">
                    </a>
               </div>
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="http://sea.anahuac.mx/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza05');?>"alt="<?php lang('alianza04');?>">
                    </a>
               </div>
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="http://www.e-libro.mx/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza08');?>"alt="<?php lang('alianza07');?>">
                    </a>
               </div>
          </div>
          <div class="row" style="margin-bottom: 10%;">
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="https://www.caceca.org/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza11');?>"alt="<?php lang('alianza10');?>">
                    </a>
               </div>
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="https://www.potentor.com.mx/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza14');?>"alt="<?php lang('alianza13');?>">
                    </a>
               </div>
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="https://www.eduk2.org/" target="_blank">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza17');?>"alt="<?php lang('alianza16');?>">
                    </a>
               </div>
          </div>
          <div class="row">
               <div class="col-sm-4" style="width: 33.3%">
                    <img style="width: 50%; display: block; margin: 0 auto;"  class="card-img-top" src="images/alianzas/<?php lang('alianza20');?>"alt="<?php lang('alianza19');?>">
               </div>
               <div class="col-sm-4" style="width: 33.3%">
                    <a href="http://www.riosdetinta.com/">
                       <img class="card-img-top" src="images/alianzas/<?php lang('alianza23');?>"alt="<?php lang('alianza22');?>">
                    </a>
               </div>
          </div>
    </div>
</div>