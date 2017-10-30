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
						if( !empty($pelis)) {
							foreach ($pelis as $fila) {
								?>
								<h1><?php echo $fila['Titulo'];?>(<?php echo $fila['Anio'];?>)</h1>

								<img src="<?php echo base_url()?><?php echo $fila['Imagen']?>" title="album-name" alt=" " class="imagen"/>
								
								<div class="Content">Titulo Original <?php echo $fila['Titulo_original'];?></div>
								
								<div class="Content">Genero <?php echo $fila['Genero'];?></div>
								
								<div class="Content">Año <?php echo $fila['Anio'];?></div>
								<h2>Sinopsis</h2>
								<div class="Content-descripcion"><?php echo $fila['Descripcion'];?></div>
							<?php		
								break;					
							}						
						}
						?>
										
					<div class="clearfix"> </div>
					</div>
				</div>

			</div>
		</div>


<h1>Comentarios</h1>
	<!--mostramos el post si es que hay-->
	
		<?php
		if(!empty($posts)) {
		    foreach ($posts as $post) {
		        ?>
		        <div id="posts">
			        <h2 ><?php echo $post['titulo']; ?></h2>
			        <div id="autorfecha"><span id="autor">Autor: <?php echo $post['autor']; ?></span><span id="fecha">Fecha de publicación: <?php echo $post['fecha']; ?></span></div>
			        <div id="entrada"><?php echo $post['entrada']; ?></div>
		        </div>
		        <div id="Espacio"></div>
		        <?php
		    }
		} else {
		    ?>
		    <div id="sinPosts">Actualmente no hay ningún comentario</div>
		    <?php
		}
		?>	
	<!--fin del div que muestra el post-->
	<!--mostramos los comentarios si es que los hay-->      	
	<!--fin del div que muestra los comentarios-->

	<div id="comentarios">
		<?php $atributos = array('id' => 'formularioComentar'); ?>
		<?php foreach ($pelis as $fila) {
			echo form_open(base_url()."Welcome/nuevoComentario/".$fila['id'], $atributos);

		}?>
		
		<label>Escribe un comentario</label>
		<textarea cols="50" rows="6" name="comentario" id="comentario"></textarea><br />
		<input type="submit" value="Publicar comentario" />
		<?php echo form_close() ?>
	</div>
	
	<!--fin del formulario para publicar comentarios-->
	</div>
</div>