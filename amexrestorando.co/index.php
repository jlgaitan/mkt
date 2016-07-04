<?php include ('restaurant.php'); ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property='og:site_name' content='AMEX RESTORANDO' />
    <meta property='og:title' content='AMEX RESTORANDO' />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='http://www.amexrestorando.co/' />
    <meta property='og:description' content='Restorando para TASTE de American Express. 20% de descuento en restaurantes reservando en línea en amexrestorando.co todos los días cuando pagas el total de la cuenta con tu American Express.' />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/restaurants.css?v1">
  	<link href="css/bootstrap.css?v=1" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/form.css?v=1" rel="stylesheet" />
    <link rel="stylesheet" href="css/modal.css?v=1" />
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
	
	<title>AMEX / RESTORANDO / COLOMBIA</title>
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
                  , partner_id: 'amexanualbogota2016'
              });
        </script>
    <!-- END WIDGET SCRIPT -->
	 <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TC5K2X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TC5K2X');</script>
      <!-- End Google Tag Manager -->
	<header>
		<div class="top-bar"><a href="https://bogota.restorando.com.co/" target="_parent"><img src="img/restorando.png" class="logo" /></a></div>
		  <div class="header-container"><img src="img/header.jpg" class="content-images"/></div>
	</header>

	<main class="cd-main-content">
      <div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#all">Todos</a> <!-- selected option on mobile -->
					</li> 
					<!--li class="filter"><a class="selected" href="#0" data-type="all" onClick="ga('send', 'event', 'AMEX-navigation-bar', 'click', 'TODOS');" >Todos</a></li-->
					<li class="filter" data-filter=".bogota"><a class="selected" href="#bogota" data-type="bogota" onClick="ga('send', 'event', 'AMEX-navigation-bar', 'click', 'BOGOTA');">Bogotá</a></li>
					<li class="filter" data-filter=".medellin"><a href="#medellin" data-type="medellin" onClick="ga('send', 'event', 'AMEX-navigation-bar', 'click', 'MEDELLIN');">Medellín</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

      <?php include ('gallery.php'); ?>

	</main> <!-- cd-main-content -->
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js" type="text/javascript"></script>
<!-- This is an empty container used as the modal. Doesn't need to be duplicated -->
    <div class="modal modal-data">
        <div class="modal-inner">
            <div class="close"></div>
            <div class="content">
            </div>
        </div>
    </div>
<!-- END Empty Div -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80119376-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>