<?php include ('restaurants.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class='new-styles no-js oldie ie6' lang='es-PE'></html>
<![endif]-->
<!--[if IE 7]>
<html class='new-styles no-js oldie ie7' lang='es-PE'></html>
<![endif]-->
<!--[if IE 8]>
<html class='new-styles no-js oldie ie8' lang='es-PE'></html>
<![endif]-->
<!--[if gt IE 8]><!-->
<html class='new-styles no-js' lang='es-PE'>
   <!--<![endif]-->
   <head>
      <meta content='text/html; charset=utf-8' http-equiv='content-type' />
      <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
      <meta content='American Express,Amex,Taste,invites,Gourmet,Amex Gourmet,Descuento en restaurantes,Restorando' name='keywords' />
      <meta content='width=device-width, initial-scale=1.0' name='viewport' />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' />
      <title>TASTE from AMERICAN EXPRESS INVITES</title>
      <meta content='Disfrute de hasta 30% de descuento en Restaurantes con American Express con su reserva online.' name='description' />
	  <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
      <link rel="canonical" href="http://www.amexrestorando.com.pe/" />
      <link href="css/layout.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link href="css/styling.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link href="css/bootstrap.css?v=1" media="screen" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.0/build/cssreset/cssreset-min.css" />
      <link rel="stylesheet" href="css/grid.css?v=1" />
      <script src="https://code.jquery.com/jquery.js"></script>
      <link rel="stylesheet" href="css/modal.css?v=1" />
   </head>
   <body>
   <!-- WIDGET SCRIPT -->       
<script>
        (function (m, r, c, h, n, t, s) {
            m[n] = m[n] || function () {
                (m[n].add = m[n].add || []).push(arguments)
            };
            t = r.createElement(c), s = r.getElementsByTagName(c)[0];
            t.async = 1;
            t.src = h;
            s.parentNode.insertBefore(t, s)
        })
        (window, document, 'script', '//widgets.restorando.com/reservations-widget-2.0.js', 'wido');
        wido('init', {
            type: 'vertical'
            , width: 260
            , height: 510
            , credit_card_required: false
            , partner_id: 'amexanuallima2016'
        });
    </script>
<!-- END WIDGET SCRIPT -->
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TX9QH"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TX9QH');</script>
        <!-- End Google Tag Manager -->
      <header>
         <div class='container'>
            <div class="row">
               <div class="logo-container clearfix">
                  <div class="like-logo"> <a class='logo' href='http://lima.restorando.com.pe/'>Restorando, reservas online en restaurantes en Lima</a></div>
               </div>
            </div>
         </div>
      </header>
<div class="container"> <img src="images/central.jpg" class="header-banner" />    </div>
    <div class='container'>
        
<ul class="restaurant-boxes">
      <?php foreach($restaurants as $restaurant): ?>
     <li><a name="<?php echo $restaurant["slug"] ?>"></a>
        <div class="resto">
           <div class="badge-desc"> <span class="number"><?php echo $restaurant["discount"] ?></span> <span class="percentage">%</span> <span class="text">OFF</span> </div>
           <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
           <div class='name'><a href="javascript:void(0);" onClick="openReservation(<?php echo $restaurant["id"] ?>);"><?php echo $restaurant["name"] ?> <span><?php echo $restaurant["sub"] ?></span></a></div>
           <div class='address'><?php echo $restaurant["address"] ?></div>
           <div class='icons-cuisine list-icon'></div>
           <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
           <div class='icons-price list-icon'></div>
           <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
           <div class='terms'><?php echo $restaurant["terms"] ?></div>
           <div class='container-button'><a href="javascript:void(0);" onClick="openReservation(<?php echo $restaurant["id"] ?>);"><button class="reservar">RESERVAR</button></a></div>
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
                            </div>
           </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
      <?php endforeach; ?>
    </ul>  
        
        
       <div class="legal" style="text-align:left;">Promoción válida del 18/04/16 al 17/04/17, exclusiva para clientes con Tarjetas American Express emitidas en el Perú y el mundo. Beneficio de hasta 30% de descuento sobre el total de la cuenta en restaurantes seleccionados, reservando en www.amexrestorando.com.pe. El cliente deberá mencionar que realizó la reserva y que hará uso del beneficio al llegar al establecimiento. Válido para almuerzos y cenas durante la vigencia mencionada todos los días en los cuales los restaurantes brinden atención. Para consultar el listado actualizado de los restaurantes adheridos y el descuento ofrecido por cada uno de ellos ingresar a www.amexrestorando.com.pe. El descuento previsto es administrado por Restorando S.A. y aplicado por cada restaurante. Promoción no acumulable ni transferible. American Express no se responsabiliza por los productos y/o servicios ofrecidos por el establecimiento.</div>
    </div>
    
         <footer>
         <div class='container'>
            <a class='logo' href='https://lima.restorando.com.pe'></a> <span class='slogan'> Queremos hacerle la vida más fácil<br>a restaurantes y comensales.<br><a href="https://lima.restorando.com.pe/pages/about">Acerca de Restorando</a> </span> 
            <a class='brochure' href='http://restaurantes.restorando.com.pe'> ¿Tienes un restaurante? </a>
            <ul class='three-columns row'>
               <li class='span6'>
                  <h4>¡Reserva desde tu smartphone!</h4>
                  <a href="https://lima.restorando.com.pe/mobile" class="mobile-apps">¡Reserva desde tu smartphone!</a>
                  <div class='texts'> <span class='text-top'>Visítanos desde tu teléfono</span> <span class='text-bottom'>restorando.com.pe</span> </div>
               </li>
               <li style="width: 23%">&nbsp;</li>
               <li class='span3'>
                  <h4>Síguenos</h4>
                  <div class='social'>
                     <a class='facebook' href='http://www.facebook.com/RestorandoPeru' rel='nofollow' target='_blank'></a> <a class='twitter' href='http://twitter.com/restorandope' rel='nofollow' target='_blank'></a>
                     <div class='like-box'></div>
                  </div>
               </li>
            </ul>
         </div>
         <nav class='bottom-links'> <span>Copyright © 2016 Restorando</span> <a href="https://lima.restorando.com.pe/pages/points">Programa de puntos</a> <a href="https://lima.restorando.com.pe/pages/faq">Preguntas frecuentes (FAQ)</a> <a href="https://lima.restorando.com.pe/pages/privacy">Política de Privacidad</a> <a href="https://lima.restorando.com.pe/pages/terms">Términos y Condiciones</a> <a href="https://lima.restorando.com.pe/pages/jobs">Trabaja con nosotros</a> </nav>
      </footer>
    <script type="text/javascript" src="http://widgets.restorando.com/reservation-widget.js"></script>
    <script type="text/javascript" src="js/random.js"></script>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-79273805-1', 'auto');
 ga('send', 'pageview');

</script>
<script src="js/modal.js" type="text/javascript"></script>
    <div class="modal modal-data">
        <div class="modal-inner">
            <div class="close"></div>
            <div class="content">
            </div>
            <!--<center>
                 <div class="legal"><a href="terminos.html" target="_blank" style="color:#6b6b6b">Ver Políticas de Privacidad y Confidencialidad</a></div>
              </center>-->
        </div>
    </div>
    <!--[if lt IE 7]>
         <script src='//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js'></script>
         <script>
            window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})});
         </script>
         <![endif]-->
   </body>
</html>
