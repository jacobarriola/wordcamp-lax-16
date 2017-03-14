<?php
namespace Demo\Components;

function get_post_card() {

    ob_start(); ?>

    <div class="post-item">
        <img src="http://unsplash.it/500/500/?random" alt="">
        <div class="post-content">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}
