<section class="cd-gallery">
			<ul>
				  <?php foreach($restaurants as $restaurant): ?>
                        <li class='mix discount <?php echo $restaurant["filters"] ?>' data-order='<?php echo $restaurant["name"] ?>'>
                            <a name="<?php echo $restaurant["slug"] ?>"></a>
                            <div class='resto'>
                                <div class='badge-desc'><span class='number'><?php echo $restaurant["discount"] ?></span><span class='percentage'>%</span><span class='text'>OFF</span></div>
                                <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                                <div class='name'><?php echo $restaurant["name"] ?><br></div>
								<div class='container-zone'>
									<div class='icons-zone list-icon'></div>
									<div class='icons-zone-text'><?php echo $restaurant["address"] ?> - <?php echo $restaurant["zone"] ?></div>
								</div>
                                <div class='icons-cuisine list-icon'></div>
                                <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                                <div class='icons-price list-icon'></div>
                                <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
                                <div class='container-button'><a href="javascript:void(0);" onClick="openReservation(<?php echo $restaurant["id"] ?>);"><button class="reservar">RESERVAR</button></a></div>
                            </div>
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
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">Lamentamos, mas não existem resultados para a sua seleção.</div>
            <!--div class="terms"><a href="terms.php" target="_blank">Termos e Condições</a></div-->
		</section> <!-- cd-gallery -->