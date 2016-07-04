<?php include ('restaurant-personnalite.php'); ?>
<?php include ('../itau/restaurant-itau.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class='new-styles no-js oldie ie6' lang='es-AR'></html>
<![endif]-->
<!--[if IE 7]>
<html class='new-styles no-js oldie ie7' lang='es-AR'></html>
<![endif]-->
<!--[if IE 8]>
<html class='new-styles no-js oldie ie8' lang='es-AR'></html>
<![endif]-->
<!--[if gt IE 8]><!-->
<html class='new-styles no-js' lang='es-AR'>
   <!--<![endif]-->
   <head>
      <meta content='text/html; charset=utf-8' http-equiv='content-type' />
      <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
      <meta content='width=device-width, initial-scale=1.0' name='viewport' />
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' />
      <title>Itaú Personnalité - Restorando</title>
      <meta content='Beneficio Exclusivo para clientes Itaú Personnalité' name='description' />
       <meta content='Itaú Personnalité - Restorando' property='og:title' />
        <meta content='website' property='og:type' />
        <meta content='Beneficio Exclusivo para clientes Itaú Personnalité' property='og:description' />
        <meta content='Restorando' property='og:site_name' />
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
      <link href="css/layout.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link href="css/styling.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link href="css/bootstrap.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="css/grid.css?v=1" />
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--<script src="js/init.js"></script>
      <script src="js/mobilyselect.js"></script>
      <script src="js/selectnav.min.js"></script>-->
   </head>
   <body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NG9FF5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NG9FF5');</script>
<!-- End Google Tag Manager -->

      <div class="container"> <img src="images/central.jpg" class="header-banner" /></div>
      <div class='container'>
         <div class="selecter">

          <div id="section-restaurants">
            <div class="selecterContent">
               <ul class="restaurant-boxes nolist">
				  <?php foreach($restaurants_personnalite as $restaurant): ?>
                  <li class="personnalite">
                     <div class="resto">
                        <div class="badge-desc-personnalite"> <span class="number"><?php echo $restaurant["discount"] ?></span><span class="percentage">%</span> <span class="text">off</span> </div>
                        <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                        <div class='name-personnalite'><?php echo $restaurant["name"] ?> <span><?php echo $restaurant["sub"] ?></span></div>
                        <div class='icons-cuisine-personnalite list-icon'></div>
                        <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                        <div class='icons-price-personnalite list-icon'></div>
                        <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
                        <div class='address'><?php echo $restaurant["address"] ?></div>
                        <div class='container-button'><button id="<?php echo $restaurant["slug"] ?>-button" class="reservar" data-toggle="modal" data-target="#<?php echo $restaurant["slug"] ?>">Reservar</button></div>
                     </div>
                     <div class='shadow'> </div>
                  </li>
                  <!-- Modal -->
                  <div class="modal fade" id="<?php echo $restaurant["slug"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
                               <div id="<?php echo $restaurant["slug"] ?>-widget" style="background: url('images/loading.gif') no-repeat center center">
							   </div>
							   <div class="legal" style="text-align:center; margin:0 0 0 0!important"><a href="politicas.html" target="_blank" style="font-size:11px;text-decoration:underline!important;">Ver Políticas de Privacidad y Confidencialidad</a></div>
<script>
    $(document).ready(function(){
        $('#<?php echo $restaurant["slug"] ?>-button').click(function () {
            $('#<?php echo $restaurant["slug"] ?>-widget').load('widget/<?php echo $restaurant["slug"] ?>.html');
        });
    });
</script>
							</div>
                        </div>
                        <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <?php endforeach; ?>

				  <?php foreach($restaurants_itau as $restaurant): ?>
                  <li class="itau">
                     <div class="resto">
                        <div class="badge-desc-personnalite"> <span class="number"><?php echo $restaurant["discount"] ?></span><span class="percentage">%</span> <span class="text">off</span> </div>
                        <img src='http://mkt.restorando.com.ar/partner/itau/restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                        <div class='name-personnalite'><?php echo $restaurant["name"] ?> <span><?php echo $restaurant["sub"] ?></span></div>
                        <div class='icons-cuisine-personnalite list-icon'></div>
                        <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                        <div class='icons-price-personnalite list-icon'></div>
                        <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
                        <div class='address'><?php echo $restaurant["address"] ?></div>
                        <div class='container-button'><button id="<?php echo $restaurant["slug"] ?>-button" class="reservar" data-toggle="modal" data-target="#<?php echo $restaurant["slug"] ?>">Reservar</button></div>
                     </div>
                     <div class='shadow'> </div>
                  </li>
                  <!-- Modal -->
                  <div class="modal fade" id="<?php echo $restaurant["slug"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
                               <div id="<?php echo $restaurant["slug"] ?>-widget" style="background: url('images/loading.gif') no-repeat center center">
							   </div>
							   <div class="legal" style="text-align:center"><a href="politicas.html" target="_blank" style="font-size:11px;text-decoration:underline!important;">Ver Políticas de Privacidad y Confidencialidad</a></div>
<script>
    $(document).ready(function(){
        $('#<?php echo $restaurant["slug"] ?>-button').click(function () {
            $('#<?php echo $restaurant["slug"] ?>-widget').load('http://mkt.restorando.com.ar/partner/itau/widget/<?php echo $restaurant["slug"] ?>.html');
        });
    });
</script>
							</div>
                        </div>
                        <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <?php endforeach; ?>

               </ul>
            </div>
			 </div>

         </div>
         <div class="legal"><a id="legales" data-toggle="modal" data-target="#ver-legales" style="text-decoration:underline!important;">Ver legales</a></div>
                  <!-- Modal -->
                  <div class="modal fade" id="ver-legales" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog" style="width:400px">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
<p class="terms" style="float:none; font-size:12px; line-height:18px;">Promoción válida en Argentina exclusivamente para las compras realizadas con tarjetas de crédito Visa y/o MasterCard Personnalité Itaú emitidas por Banco Itaú Argentina S.A. todos los días en los comercios participantes en la presente promoción. El beneficio será válido exclusivamente para todas las reservas online que se realicen en el calendario de reserva que se indica en cada restaurante cuya reserva se realiza mediante la plataforma de reservas online que posee Restorando. El descuento se realizará en el punto de venta siempre que la reserva se haya realizado online a través del sitio www.itaubeneficios.com.ar/itaupersonnalite/restaurantes.php. El descuento se realizará sobre el total de la compra. Consultar disponibilidad, día y horario disponible en el calendario de reserva de cada comercio participante. Promociones válidas para las reservas realizadas entre el 04/03/2016 hasta el 31/07/2016. No es combinable ni acumulable con otras ofertas y/o promociones. Quedan excluidas las compras realizadas con tarjetas corporativas. Las políticas de privacidad sobre los datos que envíe para gestionar la reserva son de exclusiva responsabilidad de Restorando S.A. y los mismos serán enviados al restaurant por Usted seleccionado. Banco Itaú Argentina es una sociedad anónima según la ley argentina. Sus accionistas responden por las operaciones del Banco, sólo hasta la integración de las acciones suscriptas (Ley 25.738).</p>
							</div>
                        </div>
                        <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->




      </div>
         <footer style="background:none;">
       <nav class='bottom-links'>
       <!-- <span>Copyright © 2016 Restorando</span>
       <a href="http://buenos-aires.restorando.com.ar/pages/points">Programa de puntos</a> 
       <a href="http://buenos-aires.restorando.com.ar/pages/faq">Preguntas frecuentes (FAQ)</a>
       <a href="http://buenos-aires.restorando.com.ar/pages/privacy">Política de Privacidad</a>-->
       <a href="http://buenos-aires.restorando.com.ar/pages/terms" style="text-decoration:underline!important;" target="_blank">Términos y Condiciones</a>
       <!-- <a href="http://buenos-aires.restorando.com.ar/pages/jobs">Trabajá con nosotros</a> -->
       </nav>
    </footer>
      <script src="js/random.js"></script>
<script>
  var _eaq = _eaq || [];
  var dataLayer = dataLayer || [];

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
</script>
<script>
  ga('create', 'UA-20556952-4', 'restorando.com.ar');
</script>
<script>
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
    <!--[if lt IE 7]>
         <script src='//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js'></script>
         <script>
            window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})});
         </script>
         <![endif]-->
   </body>
</html>
