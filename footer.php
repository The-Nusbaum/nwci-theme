<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nwci.js" charset="utf-8"></script>
</body>
</html>
