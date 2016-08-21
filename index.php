<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<div class="hero">

	<div class="hero-item">
		<h2 class="hero-title">We're An Awesome Agency</h2>
		<a href="#" class="button hollow">See Our Projects</a>
	</div>

</div>


<div class="row column">
	<div>
		<h2>Testimonial component</h2>
		<div class="testimonial-container">
			<div class="testimonial-img">
				<img src="https://fillmurray.com/150/150" alt="">
			</div>
			<div class="testimonial-name">
				<h3>Steve Zehngut</h3>
				<div>Zeek Interactive</div>
				<p>
					Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh
					onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.Gumbo
					beet greens corn soko endive gumbo gourd. Parsley shallot courgette
					tatsoi pea sprouts fava bean collard greens dandelion okra wakame
					tomato. Dandelion cucumber earthnut pea peanut soko zucchini.
				</p>
			</div>
		</div>
	</div>

	<div>Logos</div>
	<div>Footer component</div>

</div>


<?php get_footer(); ?>
