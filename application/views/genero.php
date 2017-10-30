<div class="browse-agile general">	
	<h4 class="latest-text">Family Movies </h4>	
	<div class="agileits-single-top">
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Genres</li>
		</ol>
	</div>
		<div class="browse-inner">

		<?php
		if( !empty($pelis) ) {
		foreach ($pelis as $fila) {
		?>
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
			<?php /*if ($fila['estado'] == '1') {?>
	 	    <div class="ribben two">
				<p>NEW</p>
			</div>
			<?php }*/?>
		</div>
			
		<?php }}?>				
	<div class="clearfix"> </div>
	</div>
</div>