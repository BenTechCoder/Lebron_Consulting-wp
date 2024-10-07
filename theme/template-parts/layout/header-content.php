<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

?>

<header id="masthead" class="navbar wrapper | p-2 bg-light">

<a href="/"><img src=<?php echo wp_get_attachment_image_src( 58, 'large' )[0]; ?> alt="Lebron Consulting Logo"></a>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'Lebron_Consulting' ); ?>">
		<!-- <button class="md:hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'Lebron_Consulting' ); ?></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
