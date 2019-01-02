<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="" id="top">
      <div class="container">
          <div class="row">
              <div class="col">
                  <div id="logo">
                      <a href="<?php echo get_home_url(); ?>" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Tradeshowhardware.com Home" class="img-responsive"/></a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="row">
                      <ul class="col nav cartControls">
                          <li class="col text-center"><a href="/cart/view_cart">Cart</a></li>
                          <li>|</li>
                          <li class="col text-center"><a href="/secure/login">Login</a></li>
                          <li>|</li>
                          <li class="col text-center"><a href="/secure/register">Register</a></li>
                      </ul>
                  </div>
                  <?php echo get_search_form(); ?>
                  <div class="row align-items-center">
                      <div class="phone col-md-6 text-center"><a href="tel:+12532657553">253.265.7553</a></div>
                      <div class="col-md-6 bbb"><a href="http://www.bbb.org/alaskaoregonwesternwashington/business-reviews/image-and-graphics-printing/northwest-creative-imaging-llc-in-gig-harbor-wa-22642401/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bbb.png" alt="BBB"/></a></div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <nav class="bar">
          <div class="container">
							<?php echo nwci_nav(); ?>
          </div>
      </nav>
  </header>
	<div class="container collapse" id="home-dropdown" aria-expanded="true" style="">
		<div class="row">
			<?php dynamic_sidebar( "header_nav" ); ?>
    </div>
	</div>
