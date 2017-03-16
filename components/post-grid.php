<?php

namespace Demo\Components;

function get_post_grid( $posts_per_page = 8 ) {

	$args = [
		'post_type'      => 'post',
		'posts_per_page' => esc_html( $posts_per_page ),
	];
	$query = new \WP_Query( $args );

	if ( empty( $query->post_count ) ) {
		return;
	}

	ob_start(); ?>

    <h2 class="row section-header">Our Latest Posts</h2>

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

