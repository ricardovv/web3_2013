<?php get_header(); ?>
<div id="content">

<?php include(TEMPLATEPATH."/sidebar1.php");?>
<?php include(TEMPLATEPATH."/sidebar2.php");?>

<div id="contentmiddle">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="contenttitle">
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>


<!--	-->
	
		<p>
<!--
<?php the_time('M'); ?> - <?php the_time('j'); ?> | Filed Under <?php the_category(', ') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
-->

</p>
		</div>
		<?php the_content(__('Read +...'));?>
		
		<div class="postspace">
		</div>
		
		<!--
		<?php trackback_rdf(); ?>
		-->
	
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		<p><?php posts_nav_link(' &#8212; ', __('&larr; Previous Page'), __('Next Page &rarr;')); ?></p>
	</div>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>