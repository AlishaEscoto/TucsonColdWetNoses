<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TucsonColdWetNoses
 */


?>

<aside id="secondary" class="widget-area" role="complementary">
	<div>
		<h2 class="widget-title">Featured Pets</h2>
		<script src="/wp-content/themes/tucsoncoldwetnoses/js/random_pets.js"></script>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
</aside><!-- #secondary -->
