<!DOCTYPE html>
<html> 

<head>
	<link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> </link>
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
	
</head>


<body>

<!--  OBJECT W PAGE TO PREVIEW -->
<object id="bgweb" data="xxx" width="100%" height="600px"> <embed wmode="transparent" src="" width="100%" height="600px" /> Error: Embedded data could not be displayed. </object>


	<header id="top"><!-- selection elements-->	
		<h1>WebProtest 0.1  | </h1>
		<p>Cerate your own manifestation and pasteir in your site!. Go to the street too!  |  More info here.</p>
		<hr>

	   <!-- -->
		<nav>
		 <p>1- Select backgrounds, people, protesters |  </p>
			
 		   <!-- L A N D S C A P E S -->
		    <select id="selectlandscape" name="selectlandscapes">
		     <option value="landscape1">Landscape1</option>
		     <option value="landscape2">Landscape2</option>
		     <option value="landscape3">Landscape3</option>
		     <option value="landscape0">Without Landscape</option>
		   </select> 

		   <!-- P E O P L E -->
		   <select id="selectpeople" name="selectpeople">
		     <option value="people1">People1</option>
		     <option value="people2">People2</option>
		     <option value="people3">People3</option>
		     <option value="people0">Without People</option>
		   </select> 
   
		   <!-- C A R T E L -->
		   <select id="selectcartel" name="selectcartel">
		    <option value="cartel1">Cartel1</option>
		    <option value="cartel2">Cartel2</option>
		    <option value="cartel3">Cartel3</option>
		   </select> 

		   <!-- P R O T E S T E R  A -->
		   <select id="selectprotester_a" name="selectprotester_a">
		    <option value="protester_a1">Protester A 1</option>
		    <option value="protester_a2">Protester A 2</option>
		    <option value="protester_a3">Protester A 3</option> 
		   </select>			

		   <!-- P R O T E S T E R  B -->
		   <select id="selectprotester_b" name="selectprotester_b">
		    <option value="protester_b1">Protester B 1</option>
		    <option value="protester_b2">Protester B 2</option>
		    <option value="protester_b3">Protester B 3</option> 
		   </select>			

		   <!-- P R O T E S T E R  C -->
		   <select id="selectprotester_c" name="selectprotester_c">
		    <option value="protester_c1">Protester C 1</option>
		    <option value="protester_c2">Protester C 2</option>
		    <option value="protester_c3">Protester C 3</option> 
		   </select>			
			
   		<hr>
			
			<!-- M E S S A G E -->
            <form id="message">
                <label for="message">2- White your message in the flag (100 ch max):</label>
                <input id="inputmessage" type="text" name="message" placeholder="writeyourmessagehere" size="10">
                
                <button id="buttonplace" class="mybuttons">Place Message in the flag:</button>
			</form>
			<!-- CLEAR  BUTTON    <button id="clearAll">Clear All</button> -->

	
 			<!-- U S E R   W E B S I T E -->
 			<!-- 
	   	<hr>
	        <form id="userweb">
                 <label for="userweb">3- Preview in your website (http://www.yoursite.com):</label>
                 <input id="inputuserweb" type="text" name="inputuserweb" size="30" placeholder="write your website here">
            
                 <button id="userwebbutton" class="mybuttons">Preview!!!</button>
 			</form>
			-->

 			<!-- B U T T O N   G E T   C O D E  -->
			<button id="getcodebutton"  class="mybuttons">GET CODE!!!</button>
				   
			<!-- 
			<hr>
			-->
		
 
		</nav>

	</header>

	<div id="show_hide_top">
		<a href="javascript:hide_covers('')" id="onoff_covers">[ Hide ]</a> 
		<!-- Show or hide covers --> 
	</div>
	
	//TEST TO GET CODE
	<div id="test">Select and Copy Code:
	<input id="code" value="SubmitValue">
	<p></p>
	</div>
	
	<div id="wrapper">
		
		
		<section id="landscape">
			
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

			<a href="http://www.ricardov.cl" target="_blank"><img id="ricardovlogo" src="img/ricadov.png"></a></img>

			</div>

		</section><!-- landscape ends-->



	</div><!-- wrapper ends -->	

	<!-- G E T   C O D E  W I N D O W -->
 				<div class="overlay">
		<div id="box">
			<p>Copy the link and paste it into your website... : )</p>
			<hr>
			<h2></h2>
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

	
