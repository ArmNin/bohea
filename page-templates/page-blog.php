<?php /* Template Name: blog */ ?>

<?php get_header() ?>

<div class="blog-page">
	<div class="blog-banner">
		<div class="blog-info">
			<?php 
			$the_query = new WP_Query(array(
				'post_type'      => 'post',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'orderby'        => 'date',
				'posts_per_page' => 1
			));
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post();
			?>

			<h2 class="blog-info__title"><?php echo get_the_title(); ?></h2>
			<p class="blog-info__extract">
				<?php
				$excerpt = strval(get_the_excerpt());
				$excerpt_length = strlen($excerpt);
				$limit = 40;
				$excerpt = ($excerpt_length > $limit) ? substr($excerpt, 0, $limit).'...' : $excerpt;
				echo $excerpt;
				?>
			</p>
			<a href="<?php echo get_permalink(); ?>" class="blog-info__read-more">Leer m&aacute;s</a>

			<?php
			$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$attachment_url = wp_get_attachment_url( $post_thumbnail_id);
			endwhile; wp_reset_postdata(); endif; 
			?>
		</div>

		<img src="<?php echo $attachment_url; ?>" alt="" class="blog-img">
	</div>

	<?php get_template_part('/template-parts/content', 'search-nav'); ?>

	<div class="blog-main">
		<div class="blog-articles">
			<div style="display: flex; flex-wrap: wrap;">
				<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$the_query = new WP_Query(array(
				'post_type'      => 'post',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'orderby'        => 'ID',
				'posts_per_page' => 9,
				'paged'          => $paged,
			));
			if ($the_query->have_posts()) : 
				while($the_query->have_posts()) : 
					$the_query->the_post();
					$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
					$attachment_url = wp_get_attachment_url( $post_thumbnail_id);
					$args = [
						'title' => get_the_title(),
						'excerpt' => get_the_excerpt(),
						'img_url' => $attachment_url,
						'permalink' => get_permalink(),
					];
					get_template_part('/template-parts/content', 'article-card', $args); 
				endwhile;
				$max_num_pages = $the_query->max_num_pages;
				wp_reset_postdata();
				//echo '<a href="'.get_page_link().'/?paged='.($paged+1).'">Siguiente</a>' ;
				//echo get_page_link();
				//echo $the_query->next_posts_link( 'Siguiente >' );
				//$the_query->next_post_link();
				//echo $next_posts; 
			endif;
			?>
			</div>

			<div class="blog-pagination"> <!-- PAGINATION NOT WORKING... -->
				<?php
				$previous_page = $paged - 1;
				$first_page = $paged;
				$second_page = $paged + 1;
				$next_page = $paged + 2;
				if ($previous_page >= 1 && $previous_page <= $max_num_pages) :
				?>
				<a href="<?php echo get_page_link().'/?paged='.$previous_page; ?>" class="blog-pagination__nav-control"
					style="background: url('<?php echo get_template_directory_uri().'/assets/images/back.png' ?>') no-repeat top center / 24px 24px transparent;">
				</a>
				<?php
				endif;
				if ($first_page <= $max_num_pages):
				?>
				<a href="<?php echo get_page_link().'/?paged='.$first_page; ?>" class="blog-pagination__page--active"><?php echo $first_page; ?></a>
				<?php 
				else:
					echo "Aun no se ha publicado ningún post.";
				endif;
				if ($second_page <= $max_num_pages) :
				?>
				<a href="<?php echo get_page_link().'/?paged='.$second_page; ?>" class="blog-pagination__page">
					<?php echo $second_page; ?>
				</a>
				<?php
				endif;
				if ($next_page <= $max_num_pages) :
				?>
				<a href="<?php echo get_page_link().'/?paged='.$next_page; ?>" class="blog-pagination__nav-control"
					style="background: url('<?php echo get_template_directory_uri().'/assets/images/next.png' ?>') no-repeat top center / 24px 24px transparent;">
				</a>
				<?php 
				endif;
				?>
			</div>
		</div>

		<div class="blog-sidebar">
			<div class="blog-author">
				<img src="<?php echo get_template_directory_uri().'/assets/images/user.png'; ?>" alt="" class="blog-author__img">
				<h3 class="blog-author__title">¡Hola! Soy Sof&iacute;a</h3>
				<p class="blog-author__description">parrafo</p>
			</div>

			<?php get_template_part('/template-parts/content', 'follow-us'); ?>
			<?php get_template_part('/template-parts/content', 'popular-posts'); ?>
		</div>
	</div>

	<div class="blog-subscribe">
		<h2 class="blog-subscribe__title">
			<span>&Uacute;nete a nuestra comunidad</span>
		</h2>

		<div class="blog-subscribe-content">
			<p class="blog-subscribe__description">
				Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eveniet, illum?
			</p>
			<div class="blog-subscribe-form">
				<input type="text" class="blog-subscribe__email" placeholder="Correo Electr&oacute;nico">
				<button class="blog-subscribe-me">Suscribirme</button>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>

