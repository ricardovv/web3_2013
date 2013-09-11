<!DOCTYPE html>
<html>
	<head>
<!-- TIPOGRAPHY -->
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>

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
<?php include("header.php"); ?>  


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
		<?php include("boxesweb.php"); ?>  
	</div><!-- CIERRE BOX -->
	
	<div id="box">
		<?php include("boxescode.php"); ?>  
	</div><!-- CIERRE BOX -->

	<div id="box">
		<?php include("boxesdesign.php"); ?>  
	</div><!-- CIERRE BOX -->
	
	<div id="box">
		<?php include("boxesother.php"); ?>  
	</div><!-- CIERRE BOX -->
	
	
</div><!-- CIERRE BOXHOME-->


<!-- FOOTER -->			
	<?php include("footer.php"); ?>  

</body>

</html>
