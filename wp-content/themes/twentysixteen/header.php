<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:800" rel="stylesheet">
</head>

<body <?php if(!is_page_template('page-templates/Work.php')) {body_class();} ?> >
<div id="page" class="wrapper">
	<div class="wrapper-in">
	 <div class="header-wrapper mobile--large">
	        <!-- .header -->
	        <header class="header header--fixed">
	          <div class="container"> <span>
	           <!-- logo -->
	           <a href="<?php echo get_home_url(); ?>" /*data-scroll="#main"*/ class="link--unstyled header-logo">Messapps</a><!-- /logo -->
	           
	         </span>
	         <!-- nav-main -->
	         
	          <?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation nav-main" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'list--inline',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation nav-main" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'container' => false,
										'container_class' => 'newclass',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
	          <!-- /nav-main -->


	          <div class="header-controls"> <a href="/contacts" class="btn--unstyled btn--brand btn--proposal">Get Proposal</a> </div>
	        </div>
	      </header>
	      <!-- /.header -->
    </div>


