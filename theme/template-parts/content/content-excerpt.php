<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

?>

<article class="stack card max-w-md shadow-[5px_5px_0px_0px_theme(colors.primary)] <?php if (get_post_type() === 'services') echo "hero-pattern"; ?>">

	<?php _test_1_post_thumbnail(); ?>

	<header class="<?php if (get_post_type() === 'services') echo "bg-dark text-light"; ?>">
		<?php
		the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header><!-- .entry-header -->


	<div class="stack">
		<div class="bg-light"><?php the_excerpt(); ?></div>
	<a href="<?php echo get_the_permalink(get_the_ID())?>" class="btn text-center border-2 bg-secondary text-light">View</a>
	</div><!-- .entry-content -->
	
	<!-- .entry-footer -->

</article><!-- #post-${ID} -->
