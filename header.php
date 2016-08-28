<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flexbox_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php echo file_get_contents(
  get_template_directory() . '/assets/dist/sprite/sprite.svg' );
?>


<header class="site-header">
  <div class="site-logo">
    WP Agency
  </div>
  <nav class="site-navigation">
    <ul class="site-navigation-list">
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Portfolio</a></li>
    </ul>
  </nav>
</header>


<div id="content" class="site-content">
