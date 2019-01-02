<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<footer class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>
			<div class="row">
          <div class="col-12 text-center" id="socialMedia">
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wordpress%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/facebook%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/twitter%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/linkedin%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/pinterest%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/g%2064.png" alt=""></a>
              <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/youtube%2064.png" alt=""></a>
          </div>
            <div class="col-12 text-center" id="address">21 Raft Island DR NW, Gig Harbor, WA 98335 | 253.238.7933</div>
            <div class="col-12 text-center" id="copyright">2009-2014 Northwest Creative Imaging, LLC | All Rights Reserved</div>
        </div>
		</div>

	</footer><!-- #wrapper-footer-full -->

<?php endif; ?>
