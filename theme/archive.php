<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

get_header();
?>

		<main id="main">

		<?php if ( have_posts() ) : ?>

			<header class="py-10 bg-dark text-light hero-pattern">
				<div class="wrapper">
					<h1><?php echo strtoupper( get_post_type() ); ?></h1>
				</div>
			</header><!-- .page-header -->
<section class="py-10 card-grid">
	
				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content', 'excerpt' );

					// End the loop.
				endwhile;

				// Previous/next page navigation.
				_test_1_the_posts_navigation();

			else :

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
</section>
		</main><!-- #main -->

<?php get_template_part( 'template-parts/components/contact-form' ); ?>
<?php
get_footer();
