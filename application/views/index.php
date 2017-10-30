<?php 
  $this->load->Helper('html');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php// echo $titulo?></title>
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/medile.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css"> 
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/funciones.js"></script>
</head>
	
<body>
	<div class="header">		
		<div class="layouts_logo">
			<a href="<?php echo base_url();?><?php echo'Welcome/index' ?>"><h1>One<span>Movies</span></h1></a>
		</div>
		<form action="BuscarCriterio" method="post">
			 <div class="search">				
				<input type="text" name="Search" id="search" placeholder="Search" required="">
				<input type="submit" value="Go" id="Go" >		
				<div id="Search2" ></div>		
			</div>
			
		</form>
	</div>
<!-- //header -->
<!-- nav -->

<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/bootstrap.min.js"></script>	

