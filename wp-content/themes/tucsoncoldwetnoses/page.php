<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TucsonColdWetNoses
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			if (has_post_thumbnail()) { ?>
			<div data-stellar-background-ratio=".7" style="margin-left: -1em; height: 200px; width: calc(100% + 1em); border-radius: 10px; background: url(<? the_post_thumbnail_url() ;?>); background-size: 110%; margin-top: 2em; margin-bottom: -6.5em; " id="featured-image">
				<div style="height: 100%; width: 100%; background: rgba(255,255,255,.3);"></div>
			</div>
			<?php }
			?>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
