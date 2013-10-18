<?php get_header(); ?>

<!--  H O M E - - - - S E C T I O N  -->     
<!-- EX <div id="content">  -->
<section id="section_home">
<a href="javascript:hide_featured('')"><p id="onoff_featured">[hide featured]</p></a> <!-- Show or hide --> 

<!--  A R T I C L E - G A L L E R Y  -->         
<article id="article_gallery_home">
	<?php shslideshow(1); ?>
	<!--  S U M A R Y  - S E C T I O N  -->         
	<summary id="summary_gallery_home">
		<p>Independent graphic designer, artost and cultural manager. He has participated in different art collectives: Kiltraza, Alambique Veloz (experimental punk band), Ergocomics (comic), and media art collective Troyano (with Ignacio Nieto & Italo Tello.)</p>
	</summary>
	<summary id="summary_gallery_home">
		<p>As a designer and artist he has collaborated in differents books and exhibitions in Chile and abroad. Live and work in Santiago de Chile.</p>
	</summary>
</article>    

	<div id="contenthome"> <h1>Recent Projects + Works...</h1> </div>			
	<!-- de las paginas de los trabajos  -->		

		<?php query_posts(array('showposts=>21', 'post_type' => 'page')) ?>
		<?php if (have_posts()) : while (have_posts()) : the_post( ); ?>
			
			<div id="contentpost">
				<a href="<?php the_permalink(); ?>"> <?php mi_imagen($tamano = 'mini') // Para tamaño chico ?> </a>
				<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a></h1>
			</div>		
			
			<?php endwhile; else: ?>		
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

			<!-- para los POST recientes  -->
			<div id="contenthome"> <h1>News + Blog...</h1> </div>		
			<?php query_posts('showposts=4') ?>
			<?php if (have_posts()) : while (have_posts()) : the_post( ); ?>
			
			<div id="contentpost">
			<a href="<?php the_permalink(); ?>"> <?php mi_imagen($tamano = 'mini') // Para tamaño medio ?> </a>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a></h1>
			</div>		
			<?php endwhile; else: ?>		
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>


</section><!-- CIERRE  section_home , ex Cierre Content -->


<?php get_footer(); ?>