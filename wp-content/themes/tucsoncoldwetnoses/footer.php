<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TucsonColdWetNoses
 */

?>
<?php wp_footer(); ?>
	</div><!-- #content -->
	<div class="container" id="footer_widgets">
		<?php dynamic_sidebar( 'footer-1' ); ?>
		<?php dynamic_sidebar( 'footer-2' ); ?>
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div>
	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="container">
			<nav id="footer-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->

			<p><a href="https://www.facebook.com/TucsonColdWetNoses" target="_blank">Facebook</a></p>

			<p>&copy; Copyright 2016 Tucson Cold Wet Noses | Web Design by <a href="https://www.alishaescoto.com">Alisha Escoto</a></p>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        jQuery(window).on('load', function() { // makes sure the whole site is loaded
            jQuery('#status').fadeOut(); // will first fade out the loading animation
            jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            jQuery('body').delay(350).css({'overflow':'visible'});
						sr.reveal('aside#secondary', {origin: 'right', scale: 1, delay: 70, mobile: false, useDelay: 'onload', distance: '40%'});
						sr.reveal('.reveal', {delay: 650, mobile: false, useDelay: 'onload', origin: 'top'}, 50);
          })
    //]]>
</script><!-- End Preloader -->
</body>
</html>
