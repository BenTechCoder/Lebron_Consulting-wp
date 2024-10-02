<?php

/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lebron_Consulting
 */

get_header();
?>

<?php get_template_part( 'template-parts/components/hero' ); ?>

<!-- Services info -->

<section class="wrapper switcher | py-10" data-switcher="items-center">
	<div class="stack">
		<!-- TODO: SLIDING TEXT WITH DESIGNED FOR YOUR -->
		<h2>Websites Made and Designed for <span class="text-secondary">Trades</span></h2>
		<p>Lebron Consulting has experience working with tradesmen. Based in North Carolina, we understand your business and are ready to help with a website made for your needs. See our services or contact us with any questions or requests.</p>
	</div>

	<ul class="stack">
	<?php
	// First lets set some arguments for the query:
	// Optionally, those could of course go directly into the query,
	// especially, if you have no others but post type.
	$args = array(
		'post_type'      => 'services',
		'posts_per_page' => 3,
	// Several more arguments could go here. Last one without a comma.
	);

	// Query the posts:
	$service_query = new WP_Query( $args );


	// Loop through the Service:
	while ( $service_query->have_posts() ) :
		$service_query->the_post();
		// Echo some markup
		$service_description = get_post_meta( $post->ID, 'service_description', true );
		$service_name        = get_post_meta( $post->ID, 'service_name', true );
		$service_icon        = get_post_meta( $post->ID, 'service_icon', true );

		get_template_part(
			'template-parts/components/service-card',
			null,
			array(
				'name'        => $service_name,
				'description' => $service_description,
				'icon'        => $service_icon,
			)
		);

endwhile;

	// Reset Post Data
	wp_reset_postdata();

	?>
</ul>
	<!-- cards for services -->
</section>

<!-- Testimonials/Portfolio slider -->

<section class="wrapper stack | gap-8 py-8">
	<h2 class="center">Our Best Projects</h2>
<ul class="reel py-8">
	<?php
	// First lets set some arguments for the query:
	// Optionally, those could of course go directly into the query,
	// especially, if you have no others but post type.
	$args = array(
		'post_type'      => 'projects',
		'posts_per_page' => 4,
		// Several more arguments could go here. Last one without a comma.
	);

	// Query the posts:
	$project_query = new WP_Query( $args );


	// Loop through the project:
	while ( $project_query->have_posts() ) :
		$project_query->the_post();
		// Echo some markup
		$project_description = get_post_meta( $post->ID, 'project-description', true );
		$project_image       = get_post_meta( $post->ID, 'project-image', true );
		// $project_title = get_post_meta($post->ID, 'project_name', true);
		$project_alt_text = get_post_meta( $project_image, '_wp_attachment_image_alt', true );
		$project_link     = get_post_meta( $post->ID, 'project-link', true );

		get_template_part(
			'template-parts/components/projects-reel__item',
			null,
			array(
				'name'        => get_the_title(),
				'description' => $project_description,
				'image'       => $project_image,
				'image_alt'   => $project_alt_text,
				'link'        => $project_link,
			)
		);

	endwhile;

	// Reset Post Data
	wp_reset_postdata();

	?>
	
</ul>
</section> 

<!-- CTA -->

<!-- Availability ticker (create component) -->

<!-- contact component -->

<?php get_template_part( 'template-parts/components/contact-form' ); ?>

<?php
get_footer();
