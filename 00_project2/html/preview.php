<!DOCTYPE html>
<html> 

<head>
	<link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> </link>
	<link href='http://fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic|Lobster' rel='stylesheet' type='text/css'>    
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	
</head>


<body>
		<div id="test">
		<?php 
		var_dump($_GET); 
		?>

		</div>
	
	<div id="wrapper">
		<?php  
			$vl=$_GET['selbg'];
			$vp=$_GET['selpeople'];
			$vc=$_GET['selcartel'];
			$vp_a=$_GET['selprotester_a'];
			$vp_b=$_GET['selprotester_b'];
			$vp_c=$_GET['selprotester_c'];
			$vp_d=$_GET['selprotester_d'];
						
			$ruta = "img/";
			$vp_a_source = $ruta.$vp_a.".gif";
			$vp_b_source = $ruta.$vp_b.".gif";
			$vp_c_source = $ruta.$vp_c.".gif";
			$vp_d_source = $ruta.$vp_d.".gif";
		?>

		
		<section id="bg">
			
			<section id="cartel">
 <!--			<h2><?php echo $rcartel; ?>  -->
			<h2>
				<?php
					echo $vp_a_source;
					echo "<br>";
					echo $vp_b_source;
					echo "<br>";
					echo $vp_c_source;
					echo "<br>";
					echo $vp_d_source;
				?>
			</h2>  
				
				<section id="people">

					<section id="protesters">

					<article id="protester_a" class="drag"> <img src="<?php echo $vp_a_source; ?>" ></img></article> 
					<article id="protester_b" class="drag"> <img src="<?php echo $vp_b_source; ?>" ></img></article> 
					<article id="protester_c" class="drag"> <img src="<?php echo $vp_c_source; ?>" ></img></article> 
					<article id="protester_d" class="drag"> <img src="<?php echo $vp_d_source; ?>" ></img></article> 
							
					</section><!-- protesters text ends-->
					 
				</section> <!-- people ends-->

			</section><!-- cartel close-->

			<div id="ricardovlogo">

			<a href="http://www.ricardov.cl" target="_blank"><img id="ricardovlogo" src="img/ricadov.png"></a></img>

			</div>

		</section><!-- landscape ends-->



	</div><!-- wrapper ends -->	


	<!-- C A L L  S C R I P T S -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="js/main.js"></script>	


</body>

</html>


	