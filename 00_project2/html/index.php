<!DOCTYPE html>
<html> 

<head>
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
		<h1>WebProtest 0.1  | </h1>
		<p>Create your own manifestation and paste it in your site!. Go to the street too!  |  <p id="infobutton">More info here.</p> </p>
		<hr>

		<nav>
		 <p>1- Select backgrounds, people, protesters |  </p>
			
 		   <!-- L A N D S C A P E S -->
        <form id="allselect" class="myforms" action="preview.php" method="get" name="allselect" >
		    <select id="selbg" name="selbg">
		     <option value="bg1">BG 1</option>
		     <option value="bg2">BG 2</option>
		     <option value="bg3">BG 3</option>
		     <option value="bg4">BG 4</option>
		     <option value="bg0">Without BG</option>
		   </select> 

		   <!-- P E O P L E -->
		   <select id="selpeople" name="selpeople">
		     <option value="people1">People1</option>
		     <option value="people2">People2</option>
		     <option value="people3">People3</option>
		     <option value="people4">People4</option>
		     <option value="people0">Without People</option>
		   </select> 
   
		   <!-- C A R T E L -->
		   <select id="selcartel" name="selcartel">
		    <option value="cartel1">Cartel1</option>
		    <option value="cartel2">Cartel2</option>
		    <option value="cartel3">Cartel3</option>
		    <option value="cartel4">Cartel4</option>
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

		</form>   

   		<hr>
			
			<!-- M E S S A G E -->
            <form id="message" action="preview.php" method="get" name="messageform" >
                <p>2- White your message in the flag (100 ch max):</p>
                <input id="inputmessage" type="text" name="inputmessage" placeholder="writeyourmessagehere" size="10">
                <button id="buttonplace" class="mybuttons">Place Message in the flag:</button>
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
                <p>3- Get the code - - - - - > </p>
			<button id="getcodebutton"  class="mybuttons">GET CODE!!!</button>
	
 
		</nav>

	</header>


	<!-- Show or hide covers --> 
	<div id="show_hide_top">
		<a href="javascript:hide_covers('')" id="onoff_covers"> <img src='img/ojo_a.png'></a> 
	</div>

</div><!-- close wrapper_top-->

	
	<div id="test">Select and Copy Code:
	<p>
 			<!-- B U T T O N   P A S S   V A R I A B L E S  -->
<!--  			<div id="sendvariable">
 				<?php
	 				//$scartel="texto para el cartel";
	 				$stelefono="5570862";
	 				$slandscape= $_GET['allforms'];
	 				$scartel= $_GET['allforms'];
 				?>
 				<p><a href="
 					preview.php?
 					tel='<?php echo $stelefono;?>' 
 					&landscape='<?php echo $slandscape; ?>'
					&cartel='<?php echo $scartel; ?>' 
 					" 

 					target="_blank">Via php: rut y telefono<a></p>
			</div>		
 -->
	</p>
	</div>



	
	<div id="wrapper">
	

		
		<section id="bg">
			
			<section id="cartel">
			<h2>Este es el texto del cartel.</h2>  
				
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
			<p>Copy the link and paste it into your website... : )</p>
			<hr>
			<h2 ></h2>
			<hr>

			<p id="close"> - Close - </p>
		</div>

		<div id="info">
			<h2>About Protester 1.0</h2>
			<p>This project was originaly developed  as a hpomework for Web3 class at Parsons The New School. The idea is that anybody can use this tool to online protest and invite orher people to participate in the protests : )
			</p>
			<p>Please visit ricardov.cl for more info and get the code on github</p>
			<p>New York / Santiago, 2013</p>
			<hr>
			<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" height="15"/></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Web Manifestarion</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.ricardov.cl" property="cc:attributionName" rel="cc:attributionURL">Ricardo Vega M. </a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://ricardov.cl/p/protest/" rel="dct:source">http://ricardov.cl/p/protest/</a>.
			<hr>
			<p id="close"> - Close - </p>
		</div>
	</div>


	<!-- C A L L  S C R I P T S -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="js/main.js"></script>	


</body>

</html>

	
