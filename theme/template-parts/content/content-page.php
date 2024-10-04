<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

?>

<article id="post-<?php the_ID(); ?>" class="">

	<header class="bg-dark text-light hero-pattern py-8">
	<div class="wrapper center">	
		<h1><?php echo get_the_title(); ?></h1>
	</div>
	</header><!-- .entry-header -->

	<?php _test_1_post_thumbnail(); ?>

	<div class="flow wrapper text-start center py-8" style="--wrapper-max-width:70rem">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article>
