<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TucsonColdWetNoses
 */


?>

<aside data-stellar-ratio=".2" id="secondary" class="widget-area" role="complementary">
	<h2 class="widget-title">Featured Pets</h2>
	<script src="/wp-content/themes/tucsoncoldwetnoses/js/random_pets.js"></script>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
