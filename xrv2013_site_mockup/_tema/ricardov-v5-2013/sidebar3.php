<!-- begin sidebar3 -->

	<div id="sidebar3">
	<ul id="sidebar3widgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>

	<li id="Blogroll">
	<h2>Blogroll</h2>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
	</li>
		
	<?php endif; ?>
	</ul>
			
</div>

<!-- end r_sidebar -->