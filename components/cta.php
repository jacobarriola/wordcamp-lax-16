<?php

namespace Demo\Components;

function get_cta( $header ) {
    ob_start(); ?>

    <div class="cta">
        <div class="cta__image">
            <img src="https://unsplash.it/600/600/?image=<?php echo rand(0, 40); ?>" alt="">
        </div>
        <div class="cta__body">
            <?php
            printf( '<h2 class="cta__header">%s</h2>',
                esc_html( $header )
            ); ?>
            <p class="cta__copy">Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.
                Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.</p>
        </div>
    </div>

    <?php
    return ob_get_clean();
 }
