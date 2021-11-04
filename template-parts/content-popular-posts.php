<div class="blog-popular-posts">
	<h3 class="blog-popular-posts__title">Publicaciones Populares</h3>
	<?php
	// change the code to get pupular posts...
	$query_args = array(
		'post_type'      => 'post',
        'post_status'    => 'publish',
		'posts_per_page' => 3,
	); 
	$the_query = new WP_Query($query_args);
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$attachment_url = wp_get_attachment_url( $post_thumbnail_id);
	?>
	<div class="blog-popular-post">
		<a href="<?php echo get_permalink(); ?>" class="blog-popular-post__link">
			<img src="<?php echo $attachment_url; ?>" alt="" class="blog-popular-post__img">
			<span class="blog-popular-post__title"><?php echo get_the_title(); ?></span>
		</a>
	</div>
	<?php endwhile; wp_reset_postdata(); endif; ?>
</div>

