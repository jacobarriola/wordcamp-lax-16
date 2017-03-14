<?php

namespace Demo\Components;

function get_hero() {

    ob_start(); ?>

    <div class="hero">
        <div class="hero-item">
            <h2 class="hero-title">We're An Awesome Agency</h2>
            <a href="#" class="button hollow">See Our Projects</a>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

