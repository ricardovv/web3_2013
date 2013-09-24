<?php get_header(); ?>

<div id="content">

<?php include(TEMPLATEPATH."/sidebar1.php");?>
<?php include(TEMPLATEPATH."/sidebar2.php");?>

<div id="contentmiddle">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(__('Read more'));?>
	<!--
	<?php trackback_rdf(); ?>
	-->

	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
	

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>