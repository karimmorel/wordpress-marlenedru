<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package ferry
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div class="wrapper">
<a style="display:none;" class="skip-link screen-reader-text" href="#content">
<?php esc_html_e( 'Skip to content', 'ferry' ); ?>
</a>
<header class="ferry-trhead">
    <!--==================== MAIN MENU ====================-->
    <div class="ferry-main-nav">
      <nav class="navbar navbar-default navbar-wp">
        <div class="container">
          <div class="navbar-header col-md-2"> 
            <!-- Logo -->
            <div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>
		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
		</div><!-- .site-branding-text -->

	</div><!-- .wrap -->
</div><!-- .site-branding -->
            <!-- Logo -->

            <!-- navbar-toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp"> <span class="sr-only"><?php _e('Toggle Navigation','ferry'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!-- /navbar-toggle --> 
          
          <!-- Navigation -->
          <div class="collapse navbar-collapse" id="navbar-wp">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'ferry_custom_navwalker::fallback' , 'walker' => new ferry_custom_navwalker() ) ); ?>
             <ul class="nav navbar-nav navbar-right">
             <li>
			 <?php global $woocommerce; ?>
              <?php if( class_exists('woocommerce')) { ?><a href="<?php echo WC()->cart->get_cart_url(); ?>" 
			  title="<?php esc_attr_e( 'View your shopping cart','ferry' ); ?>" class="ferry-cart"> <i class="fa fa-shopping-bag"></i><span class="ferry-cart-count"> <span class="ferry-cart-item"><?php echo '<span class="contents">' . sprintf( _n( '%d item','%d', intval( $woocommerce->cart->get_cart_contents_count() ), 'ferry' ), intval( $woocommerce->cart->get_cart_contents_count() ) ) . '</span>';
			?>


			  </span></a>
     <?php } ?></li>
              </ul>
          </div>
        </div>
      </nav>
  </header>