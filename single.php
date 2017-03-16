<?php
get_header(); ?>

<div class="row">
	<?php
	while ( have_posts() ) :

		the_post();

		the_title( '<h1>', '</h1>' );

		the_content();

	endwhile;

	echo Demo\Components\get_post_grid( 4 ); ?>
</div>
<?php
get_footer();

