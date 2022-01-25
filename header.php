<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package M3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/cookieconsent.js"></script>
	<?php wp_head(); ?>
</head>

<body onload="cookieConsent()" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'm3' ); ?></a>

	<div onload="check" id=cookieconsent>By using this website you consent to the Terms of Use and the privacy policy, including the use of third party cookies. <a href='<?php echo get_stylesheet_directory_uri() . "/inc/terms.html";?>'>Learn more here.</a> <button onclick="" </div>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<img id="site_logo_arrows" src="<?php bloginfo('stylesheet_directory')?>/inc/arrows.png"/><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<img id="site_logo_arrows" src="<?php bloginfo('stylesheet_directory')?>/inc/arrows.png"/><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$m3_description = get_bloginfo( 'description', 'display' );
			if ( $m3_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $m3_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '☰', 'm3' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
