<?php
/*
Displays pages
also available: 
page-{id}
page-{slug}
*/
?>
<?php 
	
	if(is_cart() || is_checkout()){


		get_header('landing'); 

	?>

		<div class="bg-cartcheck"></div>

	<?php

	

	} else{

		get_header();

	}

?>
	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
			<?php if(have_posts()) : while( have_posts()) : the_post(); ?>

				<?php get_template_part( 'template-parts/content','page'); ?>

			<?php endwhile;  endif; ?>

					
		
		</main>
	</div>	
<?php get_footer(); ?>	