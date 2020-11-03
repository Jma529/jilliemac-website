<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jill_Augustus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jilliemacdesigns' ); ?></a>

	<header class="site-header">
		<div class="header-left">
			<a href="<?php echo get_home_url(); ?>" class="header-logo">
      	<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/jm_designs.svg" alt="<?php bloginfo( 'name' ); ?>" />
      </a>
    </div>
			</div>
		</div><!-- .site-branding -->
		
		<nav class="main-navigation">
		<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false"><?php esc_html_e( 'Main Menu', 'jilliemacdesigns' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'container'         => false,
					'theme_location' => 'main-menu',
					'menu_class'        => 'main-menu',
					'depth'					 => 1
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header>
