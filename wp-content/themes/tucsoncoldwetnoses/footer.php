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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="container">
			<nav id="footer-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->

			<p>&copy; Copyright 2016 Tucson Cold Wet Noses | Web Design by <a href="https://www.alishaescoto.com">Alisha Escoto</a></p>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery Plugin -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
						sr.reveal('aside#secondary', {delay: 1000});
          })
    //]]>
</script><!-- End Preloader -->
</body>
</html>
