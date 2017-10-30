<div class="movie-browse-agile">		     
<div class="browse-agile general">
	<div class="tittle-head">
		<h4 class="latest-text">Family Movies </h4>
		<div class="container">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/A"?>">A</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/B"?>">B</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/C"?>">C</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/D"?>">D</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/E"?>">E</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/F"?>">F</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/G"?>">G</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/H"?>">H</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/I"?>">I</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/J"?>">J</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/K"?>">K</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/L"?>">L</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/M"?>">M</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/N"?>">N</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/O"?>">O</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/P"?>">P</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/Q"?>">Q</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/R"?>">R</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/S"?>">S</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/T"?>">T</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/U"?>">U</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/V"?>">V</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/W"?>">W</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/X"?>">X</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/Y"?>">Y</a></li>
			  <li><a href="<?php echo base_url()?><?php echo"Welcome/listar/Z"?>">Z</a></li>
			</ul>						
		</div>
	</div>
		<div class="container">
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
</div>