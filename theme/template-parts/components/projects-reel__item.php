<li class="projects-reel switcher" style="--switcher-space:1em">
	<div class="stack basis-[0.5]">
		<h3> <?php echo $args['name']; ?> </h3>
		<p><?php echo $args['description']; ?></p>
		<div class="flex gap-2">
		<a href="<?php echo $args['link']; ?>" class="btn border-2">View Website</a>
		<a href="/projects" class="btn bg-primary text-light">View All Projects</a>
		</div>
	</div>
	<div class="rounded-md shadow-[5px_5px_0px_0px_theme(colors.primary)] ">
		<img src=<?php echo wp_get_attachment_image_src( $args['image'], 'large' )[0]; ?> alt="<?php echo $args['image_alt']; ?>" />
	</div>
</li>
