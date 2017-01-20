<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TucsonColdWetNoses
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			if (has_post_thumbnail()) { ?>
			<div data-stellar-background-ratio=".7" style="background: url(<? the_post_thumbnail_url() ;?>); background-size: 115%;" id="featured-image">
				<div></div>
			</div>
			<?php }
			?>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div><!-- .container -->


<?php
get_sidebar();
?>
</div><!-- #primary -->
<?php
get_footer();
