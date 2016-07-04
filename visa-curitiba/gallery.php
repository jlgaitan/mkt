<section class="cd-gallery">
			<ul>
				  <?php foreach($restaurants_discount as $restaurant): ?>
                        <li class="mix discount <?php echo $restaurant["filters"] ?>" data-order="<?php echo $restaurant["name"] ?>">
                            <a name="<?php echo $restaurant["slug"] ?>"></a>
                            <div class="resto">
                                <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                                <div class='name'><?php echo $restaurant["name"] ?><br><span><?php echo $restaurant["sub"] ?></span></div>
								<div class='container-zone'>
									<div class='icons-zone list-icon'></div>
									<div class='icons-zone-text'><?php echo $restaurant["zone"] ?></div>
								</div>
                                <div class='icons-cuisine list-icon'></div>
                                <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                                <div class='icons-price list-icon'></div>
                                <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
								<div class="special-offer-text">Desconto Exclusivo</div> 
								<div class="special-offer-highlight"><?php echo $restaurant["discount"] ?>% OFF</div>
                                <div class='container-button'>
								<button class="reservar" data-toggle="modal" data-target="#<?php echo $restaurant["slug"] ?>" onClick="ga('send', 'event', 'VISA-button-reservar', 'click', '<?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?>');">RESERVAR</button>
                                </div>
                            </div>
							<script>
								  jQuery(function() {
									$("#form-<?php echo $restaurant["slug"] ?> form").submit(function() {
									  if (validateBin($("#bin-<?php echo $restaurant["id"] ?>").val() || "")) {
										  $("#reserve-visa-<?php echo $restaurant["slug"] ?>").show();
										  $("#form-<?php echo $restaurant["slug"] ?>").hide();
									  } else {
										$("#error-<?php echo $restaurant["slug"] ?>").show();
									  }
										return false;
									});
								  });
							</script>
                        </li>
                             <!-- Modal -->
     <div class="modal fade" id="<?php echo $restaurant["slug"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <div class="modal-tag">Desconto Exclusivo</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
             <div id="form-<?php echo $restaurant["slug"] ?>">
				 <center>
                 <p style="margin-top:20px;"><b>Exclusivo para todos cartões</b></p>
                 <div class="visa-widget"><img src="img/visa.png" /></div>
                 <p style="margin-top:30px;">Digite os 6 primeiros dígitos do seu cartão</p>
                 
                <form method="post" name="frm" id="frm" accept-charset="UTF-8">
                    <input id="bin-<?php echo $restaurant["id"] ?>" name="bin" class="field" type="text" size="14" maxlength="6" />
                    <input id="valida-<?php echo $restaurant["slug"] ?>" name="OK" type="submit" class="button-card" value="VALIDAR" data-target="reserve-visa-<?php echo $restaurant["slug"] ?>" onClick="ga('send', 'event', 'VISA-button-validar', 'click', '<?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?>');" />
                      <div id="error-<?php echo $restaurant["slug"] ?>" class="error">O BIN ingressado não é válido. Por favor, tente novamente.</div>
                </form>
				</center>
             </div>
<script>
$(document).ready( function() {
    $('#valida-<?php echo $restaurant["slug"] ?>').on("click", function() {
        $('#reserve-visa-<?php echo $restaurant["slug"] ?>').load('widgets/discount/<?php echo $restaurant["slug"] ?>.html');
    });
});
</script>
             <div id="reserve-visa-<?php echo $restaurant["slug"] ?>" style="display:none; background: url('img/loading.gif') no-repeat center center">
</div>
				  <div class="reminder">Não esqueça de efetuar seu pagamento com qualquer cartão VISA. <br>Conheça os <a href="terms.php" target="_blank">termos e condições</a>.</div>

			   </div>
		 </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
                        <?php endforeach; ?>
				<?php foreach($restaurants_menu as $restaurant): ?>
                        <li class="mix menu <?php echo $restaurant["filters"] ?>" data-order="<?php echo $restaurant["name"] ?>">
                            <a name="<?php echo $restaurant["slug"] ?>"></a>
                            <div class="resto">
                                <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                                <div class='name'><?php echo $restaurant["name"] ?><br><span><?php echo $restaurant["sub"] ?></span></div>
								<div class='container-zone'>
									<div class='icons-zone list-icon'></div>
									<div class='icons-zone-text'><?php echo $restaurant["zone"] ?></div>
								</div>
								<div class='icons-cuisine list-icon'></div>
                                <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                                <div class='icons-price list-icon'></div>
                                <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
								<div class="special-offer-text-menu"><?php echo $restaurant["menu-price"] ?></div> 
								<button class="special-offer-button" data-toggle="modal" data-target="#menu-<?php echo $restaurant["slug"] ?>" onClick="ga('send', 'event', 'VISA-button-ver-menu', 'click', '<?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?>');">Ver Menu</button>
                                <div class='container-button'>
								<button class="reservar" data-toggle="modal" data-target="#<?php echo $restaurant["slug"] ?>" onClick="ga('send', 'event', 'VISA-button-reservar', 'click', '<?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?>');">RESERVAR</button>									</div>
                            </div>
							<!-- Modal -->
     <div class="modal fade" id="menu-<?php echo $restaurant["slug"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <div class="modal-tag">Menu Especial</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   </div>
              <div class="modal-body">
              <h1 class="menu-restaurant"><?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?></h1>
				  <div class="menu-modal"><p><?php echo $restaurant["menu"] ?></p></div>
				  <div class="reminder" style="border-top: solid 1px #ccc; padding-top: 10px;">Não esqueça de efetuar seu pagamento com qualquer cartão VISA. <br>Conheça os <a href="terms.php" target="_blank">termos e condições</a>.</div>
           </div>
		 </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
							<script>
								  jQuery(function() {
									$("#form-<?php echo $restaurant["slug"] ?> form").submit(function() {
									  if (validateBin($("#bin-<?php echo $restaurant["slug"] ?>").val() || "")) {
										  $("#reserve-visa-<?php echo $restaurant["slug"] ?>").show();
										  $("#form-<?php echo $restaurant["slug"] ?>").hide();
									  } else {
										$("#error-<?php echo $restaurant["slug"] ?>").show();
									  }
										return false;
									});
								  });
							</script>
                        </li>
                             <!-- Modal -->
     <div class="modal fade" id="<?php echo $restaurant["slug"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <div class="modal-tag">Menu Especial</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
             <div id="form-<?php echo $restaurant["slug"] ?>">
				 <center>
                 <p><b>Exclusivo para todos cartões</b></p>
                 <div class="visa-widget"><img src="img/visa.png" /></div>
                 <p>Digite os 6 primeiros dígitos do seu cartão</p>
                 
                <form method="post" name="frm" id="frm" accept-charset="UTF-8">
                    <input id="bin-<?php echo $restaurant["slug"] ?>" name="bin" class="field" type="text" size="14" maxlength="6" />
                    <input id="valida-<?php echo $restaurant["slug"] ?>" name="OK" type="submit" class="button-card" value="VALIDAR" data-target="reserve-visa-<?php echo $restaurant["slug"] ?>" onClick="ga('send', 'event', 'VISA-button-validar', 'click', '<?php echo $restaurant["name"] ?> <?php echo $restaurant["sub"] ?>');" />
                      <div id="error-<?php echo $restaurant["slug"] ?>" class="error">O BIN ingressado não é válido. Por favor, tente novamente.</div>
                </form>
				</center>
             </div>
<script>
$(document).ready( function() {
    $('#valida-<?php echo $restaurant["slug"] ?>').on("click", function() {
        $('#reserve-visa-<?php echo $restaurant["slug"] ?>').load('widgets/menu/<?php echo $restaurant["slug"] ?>.html');
    });
});
</script>
             <div id="reserve-visa-<?php echo $restaurant["slug"] ?>" style="display:none; background: url('img/loading.gif') no-repeat center center"></div>
				  <div class="reminder">Não esqueça de efetuar seu pagamento com qualquer cartão VISA. <br>Conheça os <a href="terms.php" target="_blank">termos e condições</a>.</div>
           </div>
		 </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
                        <?php endforeach; ?>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">Lamentamos, mas não existem resultados para a sua seleção.</div>
            <div class="terms"><a href="terms.php" target="_blank">Termos e Condições</a></div>
		</section> <!-- cd-gallery -->