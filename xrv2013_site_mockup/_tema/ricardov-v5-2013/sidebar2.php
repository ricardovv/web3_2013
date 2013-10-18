<!-- begin sidebar2 -->

	<div id="sidebar2">

	<ul id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
	
	<li id="Recent">
	<h2>Recently Written</h2>
		<ul>
			<?php get_archives('postbypost', 10); ?>
		</ul>
	</li>

	<li id="Categories">
	<h2>Categories</h2>
		<ul>
			<?php wp_list_cats('sort_column=name'); ?>
		</ul>
	</li>
		
	<li id="Archives">
	<h2>Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
		
	<li id="Admin">
	<h2>Admin</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://www.wordpress.org/">Wordpress</a></li>
			<?php wp_meta(); ?>
			<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
		</ul>
	</li>

	<li id="Search">	
	<h2>Search</h2>
	   	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="s" id="s" size="30" value="search this site..."/></form>
	</li>
		
		<?php endif; ?>
		</ul>

		
</div>

<!-- end l_sidebar -->