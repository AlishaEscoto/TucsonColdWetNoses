<?php
/**
 * TucsonColdWetNoses Theme Customizer.
 *
 * @package TucsonColdWetNoses
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tucsoncoldwetnoses_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/* Create custom footer background setting */
	$wp_customize->add_setting( 'footer_color', array(
		 'default' => '#666a8f',
		 'type' => 'theme_mod',
		 'sanitize_callback' => 'sanitize_hex_color',
		 'transport' => 'postMessage',
	));

//Add control
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color', array(
			'label' => __( 'Footer Background Color', 'tucsoncoldwetnoses' ),
			'section' => 'colors',
			)
		)
	);

}
add_action( 'customize_register', 'tucsoncoldwetnoses_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tucsoncoldwetnoses_customize_preview_js() {
	wp_enqueue_script( 'tucsoncoldwetnoses_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tucsoncoldwetnoses_customize_preview_js' );

/* Inject Customizer CSS when appropriate */

function tucsoncoldwetnoses_customizer_css() {
	$footer_color = get_theme_mod('footer_color');

	?>
<style type="text/css">
	footer.site-footer {
		background-color: <?php echo $footer_color; ?>
	}
	</style>
		<?php
}
add_action( 'wp_footer', 'tucsoncoldwetnoses_customizer_css' );
