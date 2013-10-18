<!--  THI IS THE INTERIOR PAGE, 2013-->
<?php get_header(); ?>

<!--  H O M E - - - - S E C T I O N  -->     
<!-- EX <div id="content">  -->
<section id="section_interior">

	<aside id="aside_interior">
		<?php include(TEMPLATEPATH."/sidebar1.php");?>
	</aside>

	<!-- EX <div id="contentmiddle"> -->
		<div id="article_interior">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(__('Leer más'));?>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no encontramos lo que buscaba'); ?></p><?php endif; ?></p>
	</div>
	

</section><!-- CIERRE  section_interior , ex Cierre Content -->

<?php get_footer(); ?>