<!DOCTYPE html>
<html> 

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> </link>
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic|Kavoon|Architects+Daughter' rel='stylesheet' type='text/css'>
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
</head>

<body>

<!--  OBJECT W PAGE TO PREVIEW -->
<!-- <object id="bgweb" data="xxx" width="100%" height="600px"> <embed wmode="transparent" src="" width="100%" height="600px" /> Error: Embedded data could not be displayed. </object>

sanitize the url
-->
<div  id="wrapper_top">

	<header id="top"><!-- selection elements-->	
		<h1>ProtestaWeb 0.1  | </h1>
			<p>Crea tu protesta y pégala en tu sitio!!! (No olvides salir a la calle también!)  | </p>  
			<p id="infobutton">[ +Info ]</p> 

		<hr>

		<nav>
			<p>1- Select backgrounds, people, protesters |  </p>
			
 			<!-- L A N D S C A P E S -->
	        <form id="allselect" class="myforms" action="preview.php?cmensaje='alicia'" method="get" name="allselect" >
			    <select id="selbg" name="selbg">
			    	<option value="bg_1">BG 1</option>
			    	<option value="bg_2">BG 2</option>
			    	<option value="bg_3">BG 3</option>
			    	<option value="bg_4">BG 4</option>
			    	<option value="bg_0">Without BG</option>
				</select> 

			   	<!-- P E O P L E -->
				<select id="selpeople" name="selpeople">
			    	<option value="people_1">People1</option>
			    	<option value="people_2">People2</option>
			    	<option value="people_3">People3</option>
			    	<option value="people_4">People4</option>
			    	<option value="people_0">Without People</option>
				</select> 
	   
			   	<!-- C A R T E L -->
				<select id="selcartel" name="selcartel">
			    	<option value="cartel_1">Cartel1</option>
			    	<option value="cartel_2">Cartel2</option>
			    	<option value="cartel_3">Cartel3</option>
			    	<option value="cartel_4">Cartel4</option>
			   	</select> 

				<!-- P R O T E S T E R  A -->
				<select id="selprotester_a" name="selprotester_a">
					<option value="protester_a1">Protester A 1</option>
					<option value="protester_a2">Protester A 2</option>
					<option value="protester_a3">Protester A 3</option> 
					<option value="protester_a4">Protester A 4</option> 
				</select>			

				<!-- P R O T E S T E R  B -->
			   	<select id="selprotester_b" name="selprotester_b">
			    	<option value="protester_b1">Protester B 1</option>
				    <option value="protester_b2">Protester B 2</option>
				    <option value="protester_b3">Protester B 3</option> 
				    <option value="protester_b4">Protester B 4</option> 
				</select>			

				   <!-- P R O T E S T E R  C -->
				<select id="selprotester_c" name="selprotester_c">
				    <option value="protester_c1">Protester C 1</option>
				    <option value="protester_c2">Protester C 2</option>
				    <option value="protester_c3">Protester C 3</option> 
				    <option value="protester_c4">Protester C 4</option> 
				</select>			
				
			   	<!-- P R O T E S T E R  D -->
			   	<select id="selprotester_d" name="selprotester_d">
			    	<option value="protester_d1">Protester D 1</option>
			    	<option value="protester_d2">Protester D 2</option>
			    	<option value="protester_d3">Protester D 3</option> 
			    	<option value="protester_d4">Protester D 4</option> 
			   	</select>			
 
	<!--  </form> --> 	   
   			<hr>
			
			<!-- M E S S A G E TO C A R T E L -->
<!--  -->	    <form id="message" action="preview.php" method="get" name="messageform">  
 		         <p>2- Escribe el mensaje para el cartel (100 ch max):</p>
	            <input id="inputmessage" type="text" name="inputmessage" placeholder="writeyourmessagehere" size="10">
<!-- 	            <button id="buttonplace" class="mybuttons">Coloca el mensaje...</button>
 -->		
				<p id="linkmsg"><a href="#" onclick="colocatexto();return false;">Colocar mensage </a></p>

				</form>
			

			<!-- CLEAR  BUTTON    <button id="clearAll">Clear All</button> -->
	 		<!-- U S E R   W E B S I T E -->
	 		<!-- 
		    <form id="userweb">
	            <label for="userweb">3- Preview in your website (http://www.yoursite.com):</label>
	                <input id="inputuserweb" type="text" name="inputuserweb" size="30" placeholder="write your website here">
	                <button id="userwebbutton" class="mybuttons">Preview!!!</button>
	 		</form>
			-->

	 		<!-- B U T T O N   G E T   C O D E  -->
	        <p>| 3- Obtén el código para tu página - - - > </p>
			<button id="getcodebutton"  class="mybuttons">Obtener código!!!</button>
 
		</nav>

	</header><!-- cierre header top -->



	<!-- Show or hide covers --> 
	<div id="show_hide_top">
		<a href="javascript:hide_covers('')" id="onoff_covers"> <img src='img/ojo_a.png'></a> 
	</div>

</div><!-- close wrapper_top-->


	

<div id="wrapper"> <!-- estos son los contenidos a enviar al preview. -->

		
	<section id="bg">
	
		<section id="cartel">
			<h2>Acá va tu texto...</h2>  
			
			<section id="people">
				<section id="protesters">
					<article id="protester_a" class="drag"> <img src="img/protester_a1.gif"></img></article> 
					<article id="protester_b" class="drag"> <img src="img/protester_b1.gif"></img></article> 
					<article id="protester_c" class="drag"> <img src="img/protester_c1.gif"></img></article> 
					<article id="protester_d" class="drag"> <img src="img/protester_d1.gif"></img></article> 
				</section><!-- protesters text ends--> 
			</section> <!-- people ends-->

		</section><!-- cartel close-->

		<div id="ricardovlogo">
			<a href="http://www.ricardov.cl" target="_blank"><img id="ricardovlogo" src="img/ricardov.png"></a></img>
		</div>

	</section><!-- bg ends-->


</div><!-- wrapper ends -->	


<!-- G E T   C O D E  W I N D O W -->
	<div class="overlay">
	<div id="box">
		<p>Copia el código de abajo y ponlo en tu sito... : )</p>
		<hr>
		<h2></h2>
		<hr>
		<p id="close"> - Cerrar - </p>
	</div>

	<div id="info">
		<h2>Sobre ProtestaWeb 1.0</h2>
		<p>Este proyecto fue originalmete desarrollado com tareapara la clase Web3 guiada por Matthew Wilse en Parsons The New School, NY. La idea es que cualquera pueda usar esta herramienta para protestar online e invitar a otra gente a protestar : )</p>
		<p>Para más info, porfa visita ricardov.cl (el código pronto estará en Github)</p>
		<p>New York / Santiago, 2013</p>
		<hr>
		<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" height="15"/></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Web Manifestarion</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.ricardov.cl" property="cc:attributionName" rel="cc:attributionURL">Ricardo Vega M. </a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://ricardov.cl/p/protest/" rel="dct:source">http://ricardov.cl/p/protest/</a>.
		<hr>
		<p id="close"> - Cerrar - </p>
	</div> <!-- info cierre -->
</div> <!-- ciere overlay  -->


<!-- C A L L  S C R I P T S -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>	


</body>

</html>

	
