<?php

namespace Demo\Components;

function get_post_grid( $posts_per_page = 4 ) {

	$args = [
		'post_type'      => 'post',
		'posts_per_page' => esc_html( $posts_per_page ),
	];
	$query = new \WP_Query( $args );

	if ( empty( $query->post_count ) ) {
		return;
	}

	ob_start(); ?>

	<div class="posts-container">
		<?php
		while ( $query->have_posts() ) :

			$query->the_post();

			echo get_post_card();

		endwhile;

		wp_reset_postdata(); ?>
	</div>
	<?php
	return ob_get_clean();
}

