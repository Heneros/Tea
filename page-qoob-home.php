<?php
/**
 * The template name: home page for qoob
 */

 get_header('home'); ?>
	<header id="home">
<?php
	while ( have_posts() ) : the_post();
			the_content();
	endwhile; // End of the loop.
	?>
</header>
<?php
get_footer('home');
