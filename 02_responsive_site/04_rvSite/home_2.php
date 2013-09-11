<!DOCTYPE html>
<html>
	<head>
<!-- TIPOGRAPHY -->
	<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="css/text" href="style.css" >

<!-- JS SLIDER -->
<script type="text/javascript" src="imghome/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
$(function() {
    setInterval( "slideSwitch()", 5000 );
});
</script>

<style type="text/css">
/*** set the width and height to match your images **/
#slideshow {
    position:relative;
    height:300px;
}
#slideshow IMG {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}
#slideshow IMG.active {
    z-index:10;
    opacity:1.0;
}
#slideshow IMG.last-active {
    z-index:9;
}
</style>

</head>



<!-- BODY -->
<body>



<!-- IMPORTAR CODIGO DE SLIDER EN CSS -->



<!-- RELATED PROJECTS-->

<!-- HEADER -->
<header>

<!-- HEADER TITS -->
	<div id="headertit">
		<h1><a href="home.php" target="_self">Ricardov h1</a></h1>
		<h2>Art + Design h2</h2>
	</div>
	
<!-- HEADER NAVTOP  1 -->	
	<div id="navtop1">
		<h2>WEB</h2>
		<ul>
			<li><a href="project.php" target="_self">Week 1</a></li>
			<li><a href="project.php" target="_self">Week 2</a></li>
			<li><a href="project.php" target="_self">Week 3</a></li>
		</ul>	
	</div>

<!-- HEADER NAVTOP  2 -->	
	<div id="navtop2">
		<h2>CODE</h2>
		<ul>
			<li><a href="project.php" target="_self">Week 1</a></li>
			<li><a href="project.php" target="_self">Week 2</a></li>
			<li><a href="project.php" target="_self">Week 3</a></li>
		</ul>	
	</div>

<!-- HEADER NAVTOP  3 -->	
	<div id="navtop3">
		<h2>DESIGN</h2>
		<ul>
			<li><a href="project.php" target="_self">Week 1</a></li>
			<li><a href="project.php" target="_self">Week 2</a></li>
			<li><a href="project.php" target="_self">Week 3</a></li>
		</ul>	
	</div>

<!-- HEADER NAVTOP  4 MEDIA-->	
	<div id="navtop4">
		<h2>INFO</h2>
		<ul>
			<li><a href="about.php" target="_self">About...</a></li>
			<li><a href="http://www.issuu.com" target="_self">Other...</a></li>
		</ul>	
	</div>

</header>
  


<!-- SECTION HOME -->		
<div id="sectionhome">

	<!-- SLIDER HOME -->			
	<div id="sliderhome">
		<div id="slideshow">
    		<img src="imghome/homeslider01.jpg" alt="Slideshow Image 1" class="active" />
    		<img src="imghome/homeslider02.jpg" alt="Slideshow Image 2" />
    		<img src="imghome/homeslider03.jpg" alt="Slideshow Image 3" />
		</div>

			<!-- SLIDER BOX1 -->			
			<div id="sliderbox">
				<h1>Who I Am</h1>
				<p>Ricardo Vega is an Independent graphic designer born in Santiago de Chile. As a designer and artist he has collaborated in differents books and exhibitions in Chile and abroad. He is based in <del>Santiago</del> New York with his <del>girlfriend</del> wife Maria Jose Rios and his little mouse, Alicia Beatríz </p>
			</div>	<!-- CIERRE SLIDERBOX -->	

			<!-- SLIDER BOX2 -->			
			<div id="sliderbox">
				<h1>What I Have Done / What I Want to Do</h1>
				<p>I have explored in comix, design, drawing, new media, and other forms of art and creation. My current interests are about how to understand the recent technological processes, in a broad framework (social, economic, etc.). Currently I'm participating in the MFA Design and Technology, Parsons The New School of Design.. </p>
			</div>	<!-- CIERRE SLIDERBOX -->	

	</div><!-- CIERRE SLIDERHOME-->

</div><!-- CIERRE SECTIONHOME-->


<!-- BOX HOME -->			
<div id="boxhome">

<!-- BOXES -->
	<div id="box">
		
<!-- BOX TITS -->
		<h1>WEB WORKS</h1>
	
<!-- HOME BOX1 -->	
	<div id="boxitem">
			<img src="imghome/home_box_w1.png">
		<h2>Web Sketch</h2>
	</div>

<!-- HOME BOX2 -->	
	<div id="boxitem">
			<img src="imghome/home_box_w2.png">
		<h2>Inspirations</h2>
	</div>

<!-- HOME BOX3 -->	
	<div id="boxitem">
			<img src="imghome/home_box_w3.png">
		<h2>Mockups</h2>
	</div>


  
	</div><!-- CIERRE BOX -->
	
	<div id="box">
		
<!-- BOX TITS -->
		<h1>CODE WORKS</h1>
	
<!-- HOME BOX1 -->	
	<div id="boxitem">
		<img src="imghome/home_box_c1.png">
		<h2>Code Mondrian</h2>
	</div>

<!-- HOME BOX2 -->	
	<div id="boxitem">
			<img src="imghome/home_box_c2.png">
		<h2>Code Miro</h2>
	</div>

<!-- HOME BOX3 -->	
	<div id="boxitem">
			<img src="imghome/home_box_c3.png">
		<h2>Code Grandmother</h2>
	</div>


  
	</div><!-- CIERRE BOX -->

	<div id="box">
		
<!-- BOX TITS -->
		<h1>DESIGN WORKS</h1>
	
<!-- HOME BOX1 -->	
	<div id="boxitem">
		<img src="imghome/home_box_d1.png">
		<h2>Positive Negative Form</h2>
	</div>

<!-- HOME BOX2 -->	
	<div id="boxitem">
			<img src="imghome/home_box_d2.png">
		<h2>Color</h2>
	</div>

<!-- HOME BOX3 -->	
	<div id="boxitem">
			<img src="imghome/home_box_d3.png">
		<h2>Typography</h2>
	</div>


  
	</div><!-- CIERRE BOX -->
	
	<div id="box">
		
<!-- BOX TITS -->
		<h1>OTHER...</h1>
	
<!-- HOME BOX1 -->	
	<div id="boxitem">
		<img src="imghome/home_box_other1.png">
		<h2>Sketching...</h2>
	</div>

<!-- HOME BOX2 -->	
	<div id="boxitem">
			<img src="imghome/home_box_other2.png">
		<h2>The City...</h2>
	</div>

<!-- HOME BOX3 -->	
	<div id="boxitem">
			<img src="imghome/home_box_other3.png">
		<h2>Origin...</h2>
	</div>


  
	</div><!-- CIERRE BOX -->
	
	
</div><!-- CIERRE BOXHOME-->


<!-- FOOTER -->			
	<!-- FOOTER PHP -->
	<footer>
		<p><a href="http://www.ricardov.cl" target="_blank">Old Web Site</a></p>
		<p><a href="http://www.derechosdigitales.cl" target="_blank">Licenced Under Creative Commons: By - NO$ - ND</a></p>		
		<p><a href="http://www.derechosdigitales.cl" target="_blank">Santiago Chile / New York, USA.</a></p>		
	</footer>

  

</body>

</html>
