<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="bg-dark text-light hero-pattern hero-normal py-8">
	<div class="wrapper stack z-10">	
		<h1><?php echo get_the_title(); ?></h1>
		<div class="flex gap-2">
			<a href="/contact" class="btn bg-primary text-light">Contact</a>
			<a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>" class="btn bg-light text-dark">See all <?php echo get_post_type(); ?></a>
		</div>
	</div>
	<?php _test_1_post_thumbnail(); ?>
	</header><!-- .entry-header -->
</article><!-- #post-${ID} -->

<article class="flow prose wrapper text-start py-8" style="--wrapper-max-width:70rem">
		<?php
		the_content();
		?>
</div><!-- .entry-content -->

<?php get_template_part( 'template-parts/components/contact-form' ); ?>
