<?php include ('restaurant.php'); ?>
<?php include ('restaurant-menu.php'); ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/restaurants.css?v1">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<link href="css/bootstrap.css?v=1" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/form.css?v=1" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="css/modal.css?v=1" />
	
	<title>AMEX / RESTORANDO / MEXICO</title>
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
            , partner_id: 'amexanualmexicocity2016'
        });
    </script>
<!-- END WIDGET SCRIPT -->
	 <!-- Google Tag Manager >
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-FMGZ2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-FMGZ2');
        </script>
     <!-- End Google Tag Manager >
	<div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- End Facebook Script -->
	<header class="cd-header">
		<div class="top-bar"><img src="img/restorando.png" class="logo" /></div>
		<div class="header-container">
		</div>
	</header>

	<main class="cd-main-content">

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
            <center>
                 <div class="legal"><a href="terminos.html" target="_blank" style="color:#6b6b6b">Ver Políticas de Privacidad y Confidencialidad</a></div>
              </center>
        </div>
    </div>
<!-- END Empty Div -->
<!--script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20556952-2', 'restorando.com.br');
  ga('send', 'pageview');
</script-->
</body>
</html>