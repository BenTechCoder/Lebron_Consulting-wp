
<a href=<?php echo esc_url( get_permalink( get_the_ID() ) ); ?> class="btn">
		<li class="card center overflow-hidden center | bg-dark text-light">
  
		<img src=<?php echo wp_get_attachment_image_src( $args['icon'] )[0]; ?> />
  
		<h2>
			<p><?php echo $args['name']; ?></p>
		</h2>
		<p><?php echo $args['description']; ?></p>
		</li>
  
</a>
