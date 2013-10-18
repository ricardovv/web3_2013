<!-- begin sidebar1 -->

	<div id="sidebar1">
	<ul id="sidebar1widgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

	<li id="Blogroll">
	<h2>Blogroll</h2>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
	</li>
		
	<?php endif; ?>
	</ul>
			
</div>

<!-- end sidebar1 -->