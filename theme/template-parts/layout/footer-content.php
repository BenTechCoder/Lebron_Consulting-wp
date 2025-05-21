<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

?>

<footer class="py-10 bg-dark text-light" id="colophon">

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'Lebron_Consulting' ); ?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
		<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'Lebron_Consulting' ); ?>" class="center font-display">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => '',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	<?php endif; ?>

	<div class="center">
		<?php
		$_test_1_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $_test_1_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">®<?php bloginfo( 'name' ); ?></a>
			<?php
		endif;

		/* translators: 1: WordPress link, 2: WordPress. */
		?>
	</div>

</footer><!-- #colophon -->
