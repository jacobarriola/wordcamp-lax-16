<?php

namespace Demo\Components;

function get_logos() {

    ob_start(); ?>

    <div class="logos-container">
        <ul class="row logo-list">
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/pepsi.png" alt=""></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/atari.png" alt=""></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/carlsjs.png" alt=""></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/kanami.png" alt=""></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/rebook.png" alt=""></li>
        </ul>
    </div>

    <?php
    return ob_get_clean();
}

