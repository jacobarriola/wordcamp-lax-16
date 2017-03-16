<?php

use Demo\Components;

get_header();

echo Components\get_hero();

echo Components\get_post_grid();

echo Components\get_logos();

echo Components\get_cta( 'Our company is so great!' );

echo Components\get_cta( 'We were ranked #1' );

echo Components\get_cta( 'Let us help you, today!' );

echo Components\get_cta( 'We can do it all!' );

get_footer();