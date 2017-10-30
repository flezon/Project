<div class="general-agileits">
	<div class="medile-movies-grids">
	    <div class="movie-browse-agile">		     
			<div class="browse-agile general">
				<div class="tittle-head">
					<h4 class="latest-text">Family Movies </h4>
					<div class="container">
					</div>
				</div>
					<div class="container">
						<div class="browse-inner">
						<?php
						if(!empty($pelis) ) {
						foreach ($pelis as $fila) { ?>

							<div class="col-md-2 movie-gride-agile">
								
							<a href="<?php echo base_url()?><?php echo"Welcome/muestra/".$fila['id'];?>" class="hvr-shutter-out-horizontal"><img src="<?php echo base_url()?><?php echo $fila['Imagen']?>" title="album-name" alt=" " />
						     	<div class="action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1">
								<div class="movie-text">
									<h6><a href="single.html"><?php echo $fila['Titulo'] ?></a></h6>							
								</div>
								<div class="mid-2">							
									<p><?php echo $fila['Anio'] ?></p>
									<div class="block-stars">
										<ul class="ratings">
										     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											 
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>											
							</div>
						</div>
							
						<?php }
						}?>				
					<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>