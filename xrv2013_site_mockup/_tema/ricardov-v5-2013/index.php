<!-- THIS IS NOT THE INTERIOR sept 2013-->
<?php get_header(); ?>

<!-- EX <div id="content">  -->
<section id="section_home">

	<?php include(TEMPLATEPATH."/sidebar1.php");?>
	<!-- <?php include(TEMPLATEPATH."/sidebar2.php");?> -->

	<div id="contentmiddle">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

	<div class="contentpost">
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php the_time('M'); ?> - <?php the_time('j'); ?> | Filed Under <?php the_category(', ') ?>&nbsp;
		<?php edit_post_link('(Edit Post)', '', ''); ?>
	</div>
		
		<?php the_content(__('Read more'));?>
		<?php endwhile; else: ?>
		
	<p>?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	
	<h1>Comments</h1>
		<?php comments_template(); // Get wp-comments.php template ?>
	</div>

</section><!-- CIERRE  section_home , ex Cierre Content -->


<?php get_footer(); ?>