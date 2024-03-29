<?php
/*
Displays single posts
*/
?>
<?php get_header() ?>

	<header>
			
		<div class="flexslider slide-js" id="pics-proyect">

			<div class="overlay"></div>

			<div class="slides">

        	     <?php if( have_rows('slider_inicio', 'options') ): ?>
        	        
        	         <?php while( have_rows('slider_inicio', 'options') ): the_row(); 
        	             
        	             // Load sub field value.
			            $type = get_sub_field('type_link');	

        	            ?>

        	            <div class="slide"><!--more-->
                	
		                	<div class="content">
		                		
		                		<div class="content-main wc flex-normal" >

		        	    			<div class="img flex-normal" id="bg1" style="background: transparent url(<?php echo the_sub_field('imagen') ?>) no-repeat center; background-size: cover;">
		        	    			</div>

		        	    			

			        	    			<div class="info-slide">

			        	    				<?php if( "si" === get_sub_field('texto_conditional') ){ ?>

			        	    					<h1><?php the_sub_field('texto') ?></h1>	

			        	    				<?php } ?>

			        	    				

			        	    				<?php switch ( $type ) {

		            	    					case '0':
		            	    						// code...

		            	    						//echo "nothing";

		            	    						break;

		            	    					case '1':
		            	    						// code...

		            	    						$link = get_sub_field('link');

		            	    						break;	

		            	    					case '2':
		            	    						// code...

		            	    						$get_link = get_sub_field('link_cat');

		            	    						//$link = get_term_link( $get_link, 'product_cat' );

		            	    						$link = get_site_url().'/shop/?ixwpst[product_cat][]='.$get_link;

		            	    						break;

		            	    					case '3':
		            	    						// code...

		            	    						$link = get_sub_field('link_external');

		            	    						break;				
	            	    					
	            	    					} ?>

	            	    					<?php if( $type !== "0" ){ ?>	

					        	    			<div class="btn-info flex-normal">
					        	    				
					        	    				<a href="<?php echo $link; ?>">

					        	    					<div class="m-btn m-btn--main">Comprar</div>

					        	    				</a>

					        	    				<div class="img"></div>

					        	    			</div>

					        	    		<?php } ?>	

			        	    			</div>

		        	    			

		        	    		</div>

		        	    	</div>

		        	    </div>

        	        <?php endwhile; ?>
        	      
        	    <?php endif; ?>

			</div>
				 
		</div>	



	</header>

	<section class="kit">
		
		<h2>Arma tu kit</h2>

		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kit.jpg" alt="">

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque temporibus velit, distinctio alias ipsum iste?</p>
		<div class="m-btn m-btn--main">Quiero armar mi kit</div>

	</section>

	<section class="bg np">
		
		<div class="intro-info flex-normal">

			<h3>Lo más popular</h3>

			<!--<div class="m-btn">Ver todos los productos</div>-->

		</div>

		<div class="products-wrapper-shortcode">
			
			<?php echo do_shortcode('[products limit="8" columns="4" orderby="popularity" ]'); ?>

		</div>

		<div class="btn-container flex-normal">
			
			<a href="<?php echo get_site_url() ?>/shop">
				<div class="m-btn m-btn--main">Visita nuestra tienda</div>
			</a>

			<div class="img"></div>

		</div>

	</section>

	<?php 

		$desc = get_field('des_ace_inicio', 'options');

		if( $desc ) {

	?>

		<div class="what-are">

			<div class="info">
			
				<h3 class="title"><?php echo $desc['titulo'] ?></h3>

				<p><?php echo $desc['descripcion'] ?></p>

			</div>

		</div>

	<?php } ?>

	<div class="video-main">

		<div class="custom-cursor">
			
			<div>
			<span>click para</span> </br> Conocernos
			</div>

		</div>
		
		<a href="<?php echo get_site_url() ?>/conocenos">

		<video class="vid" src="<?php echo get_field('video_inicio', 'options') ?>" autoplay muted loop></video>

		</a>

	</div>

	

<?php get_footer() ?>