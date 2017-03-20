<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TucsonColdWetNoses
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div><!-- Preloader -->
<?php include_once("analyticstracking.php") ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tucsoncoldwetnoses' ); ?></a>

<?php if ( get_header_image() ) { ?>
	<header id="masthead" class="site-header" role="banner" style="background-image: url(<?php header_image(); ?>);">
<?php } else { ?>
	<header id="masthead" class="site-header" role="banner" style="background-image: url(/wp-content/themes/tucsoncoldwetnoses/images/Pet-rescue.jpg);">
<?php } //End Header Image Check ?>
<p id="home-btn"><a href="http://www.tucsoncoldwetnoses.com">Return to homepage</a></p>
<div class="container">
	<?php if ( has_custom_logo() ) {
		the_custom_logo();
	} else { ?>
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
	<?php } ?> <!--End header if-->
	<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'tucsoncoldwetnoses' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
</nav><!-- #site-navigation -->
		</div><!-- .container -->

	</header><!-- #masthead -->
<?php if (is_front_page()) { ?>
	<?php
echo do_shortcode('[smartslider3 slider=3]');
	?>
  <div id="CTA" class="container">
    <a href="/become-a-foster-parent/"><img class="cta-image" alt="Foster a Pet" title="Foster a Pet" src="/wp-content/themes/tucsoncoldwetnoses/images/Foster-a-Pet.png"></a>
    <a href="/adoptable-pets/"><img class="cta-image" alt="Adopt a Pet" title="Adopt a Pet" src="/wp-content/themes/tucsoncoldwetnoses/images/Adopt-a-pet.png"></a>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LT92J6FPX9GUN" target="_blank" class="cta-image" alt="Donate"><img src="/wp-content/themes/tucsoncoldwetnoses/images/Donate_Button.png"></a>
  </div>
	<?php } ?>
	<div id="content" class="site-content">
