<?php include ('restaurant-discount.php'); ?>
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
    <script src="js/bootstrap.js"></script>
	
	<title>VISA / RESTORANDO / CURITIBA</title>
</head>
<body>
	 <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-FMGZ2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-FMGZ2');
        </script>
     <!-- End Google Tag Manager -->
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
		<div class="header-logo-visa">
		<img src="img/visa-white.png" class="visa" />
			</div>
		<div class="header-slogan">
		<h1>Os clientes Visa têm ofertas exclusivas nos melhores restaurantes com Restorando.<br>
			Aproveite descontos de até 30% e menus especiais a preços diferenciados.<br><br>
			Confira seleção que preparamos abaixo:
		</h1>
			</div>
		</div>
	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#all">Todos</a> <!-- selected option on mobile -->
					</li> 
					<!--li class="filter"><a class="selected" href="#0" data-type="all" onClick="ga('send', 'event', 'VISA-navigation-bar', 'click', 'TODOS');" >Todos</a></li-->
					<li class="filter" data-filter=".bogota"><a class="selected" href="#bogota" data-type="bogota" onClick="ga('send', 'event', 'VISA-navigation-bar', 'click', 'DESCONTO');">Bogotá</a></li>
					<li class="filter" data-filter=".medellin"><a href="#medellin" data-type="medellin" onClick="ga('send', 'event', 'VISA-navigation-bar', 'click', 'MENU');">Medellin</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

<?php include ('gallery.php'); ?>

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Pesquisa</h4>
					<div class="cd-filter-content">
						<input type="search" placeholder="Nome do restaurante">
					</div>
				</div>
				
				<div class="cd-filter-block">
					<h4>Bairros</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Todos</option>
								<option value=".alto-da-rua-xv">Alto da Rua XV</option>
								<option value=".batel">Batel</option>
								<option value=".bigorrilho">Bigorrilho</option>
								<option value=".juveve">Juvevê</option>
								<option value=".reboucas">Rebouças</option>
								<option value=".santa-felicidade">Santa Felicidade</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Cozinha</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Todas</option>
							    <!--<option value=".arabe">Árabe</option>-->
								<option value=".argentina">Argentina</option>
								<!--<option value=".asiatica">Asiática</option>-->
								<!--<option value=".bar">Bar</option>-->
								<option value=".brasileira">Brasileira</option>
								<!--<option value=".carnes">Carnes</option>-->
								<!--<option value=".churrascaria">Churrascaria</option>-->
								<option value=".contemporanea">Contemporânea</option>
								<!--<option value=".espanhola">Espanhola</option>-->
								<!--<option value=".francesa">Francesa</option>-->
								<!--<option value=".hamburgueria">Hamburgueria</option>-->
								<!--<option value=".iberica">Ibérica</option>-->
								<!--<option value=".internacional">Internacional</option>-->
								<!--<option value=".italiana">Italiana</option>-->
								<!--<option value=".japonesa">Japonesa</option>-->
								<!--<option value=".marroquina">Marroquina</option>-->
								<option value=".mexicana">Mexicana</option>
								<!--<option value=".peixes-e-frutos-do-mar">Peixes e Frutos de Mar</option>-->
								<!--<option value=".peruana">Peruana</option>-->
								<!--<option value=".portuguesa">Portuguesa</option>-->
								<option value=".tailandesa">Tailandesa</option>
								<!--<option value=".variada">Variada</option>-->
								<!--<option value=".vietnamita">Vietnamita</option>-->
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->	
				
					<div class="cd-filter-block">
					<h4>Desconto</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".discount" type="radio" name="radioButton" id="radio0">
							<label class="radio-label" for="radio0">Todos</label>
						</li>
						<li>
							<input class="filter" data-filter=".10" type="radio" name="radioButton" id="radio1">
							<label class="radio-label" for="radio1">10%</label>
						</li>
						<li>
							<input class="filter" data-filter=".20" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">20%</label>
						</li>
						<!--<li>
							<input class="filter" data-filter=".25" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">25%</label>
						</li>-->
						<li>
							<input class="filter" data-filter=".30" type="radio" name="radioButton" id="radio4">
							<label class="radio-label" for="radio4">30%</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->			
				
				<div class="cd-filter-block">
					<h4>Tipo de Menu</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".menu" type="radio" name="radioButton" id="radio5">
							<label class="radio-label" for="radio5">Todos</label>
						</li>
						<!--<li>
							<input class="filter" data-filter=".almoco-7990" type="radio" name="radioButton" id="radio6">
							<label class="radio-label" for="radio6">Almoço R$ 79,90</label>
						</li>-->
						<li>
							<input class="filter" data-filter=".almoco-9990" type="radio" name="radioButton" id="radio7">
							<label class="radio-label" for="radio7">Almoço R$ 99,90</label>
						</li>
						<!--<li>
							<input class="filter" data-filter=".jantar-7990" type="radio" name="radioButton" id="radio8">
							<label class="radio-label" for="radio6">Jantar R$ 79,90</label>
						</li>-->
						<li>
							<input class="filter" data-filter=".jantar-9990" type="radio" name="radioButton" id="radio9">
							<label class="radio-label" for="radio7">Jantar R$ 99,90</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				
			</form>

			<a href="#0" class="cd-close">Fechar</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger" onClick="ga('send', 'event', 'VISA-navigation-bar', 'click', 'FILTRAR');" >Filtrar</a>
	</main> <!-- cd-main-content -->
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script>
<script src="js/validatebin.js"></script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20556952-2', 'restorando.com.br');
  ga('send', 'pageview');
</script>
</body>
</html>