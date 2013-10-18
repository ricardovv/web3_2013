<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="es, en" />
<meta charset="utf-8">
		
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/ricardov-3column/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/normalize.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/navbar.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/dropdowns.js"></script>


<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>
</head>

<body>

<!-- 
<a href="http://www.artnumerica.net" target="_blank" style="position:absolute; top:30px; right:0px; border:0" 
onmouseover="src='http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkartn_2.gif'" 
onmouseout="src='http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkartn_1.gif'">
<img src="http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkartn_2.gif" alt="ArtNumerica arte electronico" style="border:0px"/></a>

<a href="http://www.vivisandvasquez.cl" target="_blank" style="position:absolute; top:60px; right:0px; border:0" 
onmouseover="src='http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkvyv_2.gif'" 
onmouseout="src='http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkvyv_1.gif'">
<img src="http://ricardov.net/site08/wp-content/themes/ricardov-v4-2011/images/linkvyv_2.gif" alt="Vivis and Vasquez" style="border:0px"/></a>
-->

<!--  S H O W   H I D E   C O N T E N T   --> 
	<div id="show_hide_top">
	<a href="javascript:hide_covers('')"><p id="onoff_covers">[See Covers...]</p></a> <!-- Show or hide covers --> 
</div>

<!--  C O V E R S  --> 
	<div id="section_covers">
	<section id="covers_content">
		<div id="x"><img src="images/cover01.jpg" alt="cover01"></div>	
		<p>Recent Projects: Geometric Poster</p>
	</section>
	</div>



<!--  W R A P P E R  --> 
	<div id="wrapper">

<!--  N A V - R E L A T E D  --> 
	<nav id="nav_related">
	<ul>
	    <li>Relacionados:</li>
	    <li><a href="http://www.artnumerica.net" target="_blank">Art Numerica</a></li>
	    <li><a href="http://www.t-r-o-y-a-n-o.cl" target="_blank">Troyano</a></li>
	    <li><a href="http://www.vivisandvasquez.cl" target="_blank">Vivis & Vasquez</a></li>
	</ul>
	</nav>


<!--  H E A D E R  M A I N  --> 
	<header id="header_top">
		<div id="tits">
			<a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?> </a></br>
			<?php bloginfo('description'); ?> - santiago, chile</br>
		</div>

		<nav id="nav_main"><!-- Ex navbar2 --> 
		<?php if (function_exists('pixopoint_menu')) {pixopoint_menu();} ?>
        <ul>
	        <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">NavMain-1</a></li>
	        <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">NavMain-2</a></li>
	    	<li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">NavMain-3</a></li> 
		</ul>
		</nav>
	</header><!-- CIERRE HEADER MAIN-->



<!-- GOOGLE ANALYTICS-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9095354-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vega.js"></script>

</body>
</html>