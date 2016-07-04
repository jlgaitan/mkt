<section class="cd-gallery">
			<ul>
				  <?php foreach($restaurants as $restaurant): ?>
                        <li class='mix discount <?php echo $restaurant["filters"] ?>' data-order='<?php echo $restaurant["name"] ?>'>
                            <a name="<?php echo $restaurant["slug"] ?>"></a>
                            <div class='resto'>
                                <div class='badge-desc'><span class='number'><?php echo $restaurant["discount"] ?></span><span class='percentage'>%</span><span class='text'>OFF</span></div>
                                <img src='restos/<?php echo $restaurant["slug"] ?>.jpg' class='restaurant-photo' />
                                <div class='name'><?php echo $restaurant["name"] ?> <span><?php echo $restaurant["sub"] ?></span><br></div>
								<div class='container-zone'>
									<div class='icons-zone list-icon'></div>
									<div class='icons-zone-text'><?php echo $restaurant["address"] ?> - <?php echo $restaurant["zone"] ?></div>
								</div>
                                <div class='icons-cuisine list-icon'></div>
                                <div class='icons-cuisine-text'><?php echo $restaurant["food-type"] ?></div>
                                <div class='icons-price list-icon'></div>
                                <div class='icons-price-text'><?php echo $restaurant["price"] ?></div>
                                <div class='container-button'>
                                  <a href="javascript:void(0);" onClick='openReservation(<?php echo $restaurant["id"]?>,<?php
                                  if ($restaurant["filters"] == 'bogota'){
                                    echo '"amexanualbogota2016"';
                                      }
                                  else{
                                    echo '"amexanualmedellin2016"';
                                      }?>);'>
                                    <button class="reservar">RESERVAR</button>
                                  </a>
                                </div>
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
				
				<div class=legal>PROMOCIÓN VÁLIDA DEL 18/04/16 AL 18/04/17 PARA TODAS LAS TARJETAS AMERICAN EXPRESS® EMITIDAS EN COLOMBIA POR AMERICAN EXPRESS. PARA ACCEDER AL BENEFICIO LOS CLIENTES: (I) DEBERÁN REALIZAR LA RESERVA A TRAVÉS DE LA WEB DE RESTORANDO (II) MENCIONAR QUE HARÁN USO DEL BENEFICIO AL MOMENTO DE LLEGAR AL ESTABLECIMIENTO; Y (III) ABONAR LA TOTALIDAD DE LA CUENTA CON CUALQUIER TARJETA AMERICAN EXPRESS. EL 20% DE DESCUENTO LO REALIZARÁ EL RESTAURANTE AL MOMENTO DE ABONAR Y SE APLICARÁ SOBRE EL TOTAL DE LA CUENTA (INCLUYENDO BEBIDAS, CUBIERTOS Y POSTRE). VÁLIDO PARA ALMUERZOS Y CENAS DURANTE LA VIGENCIA MENCIONADA TODOS LOS DÍAS EN QUE LOS RESTAURANTES ESTÉN ABIERTOS. PROMOCIÓN NO ACUMULABLE NI TRANSFERIBLE. LOS RESTAURANTES PARTICIPANTES PUEDEN VARIAR.</div>
			</ul>
		</section> <!-- cd-gallery -->