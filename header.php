<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arentu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'arentu' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-full">
			<div class="row clear">
				<div class="col-11">
					<div class="site-branding">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .site-branding -->
				</div>
				<div class="col-1">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Trigger</button>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'main',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
