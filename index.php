<?php
/*
Displays single posts
*/
?>
<?php get_header() ?>

	<header>
		<div class="bg">
			<img class="img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-main.webp" alt="">
		</div>
		
		<div class="columns columns--triple flex-normal">
			
			<div class="item left">
				
				<div class="img"></div>

				<div class="plant plant--up"></div>

			</div>

			<div class="item middle">
				
				<div class="slider">

					<h1>Aceites escenciales</h1>
					
						<div class="flexslider slide-js" id="pics-proyect">

							<div class="slides">

				                <div class="slide"><!--more-->
				                	
				                	<div class="content">
				                		
				                		<div class="content-main flex-normal" >

			            	    			<div class="img flex-normal" id="bg1" style="background: transparent url(https://www.bohea.com.mx/images/seccion_n.jpg) no-repeat center; background-size: cover;">

			            	    			</div>

			            	    		</div>

			            	    	</div>

			            	    </div>

				                <div class="slide"><!--more-->
				                	
				                	<div class="content">
				                		
				                		<div class="content-main flex-normal" >

			            	    			<div class="img flex-normal" id="bg1" style="background: transparent url(https://images.pexels.com/photos/5337636/pexels-photo-5337636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500) no-repeat center; background-size: cover;">

			            	    			</div>

			            	    		</div>

			            	    	</div>

			            	    </div>

    	    	                <div class="slide"><!--more-->
    	    	                	
    	    	                	<div class="content">
    	    	                		
    	    	                		<div class="content-main flex-normal" >

    	                	    			<div class="img flex-normal" id="bg1" style="background: transparent url(https://images.pexels.com/photos/6620948/pexels-photo-6620948.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat center; background-size: cover;">

    	                	    			</div>

    	                	    		</div>

    	                	    	</div>

    	                	    </div>

    	                	    <div class="slide"><!--more-->
				                	
				                	<div class="content">
				                		
				                		<div class="content-main flex-normal" >

			            	    			<div class="img flex-normal" id="bg1" style="background: transparent url(https://www.bohea.com.mx/images/seccion_n2.jpg) no-repeat center; background-size: cover;">

			            	    			</div>

			            	    		</div>

			            	    	</div>

			            	    </div>

    	                	    <div class="slide"><!--more-->
				                	
				                	<div class="content">
				                		
				                		<div class="content-main flex-normal" >

			            	    			<div class="img flex-normal" id="bg1" style="background: transparent url(https://images.pexels.com/photos/931007/pexels-photo-931007.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat center; background-size: cover;">

			            	    			</div>

			            	    		</div>

			            	    	</div>

			            	    </div>



							    <?php /*

							    // Check rows exists.
							    if( have_rows('slider_principal', 'option') ):

							        // Loop through rows.
							        while( have_rows('slider_principal', 'option') ) : the_row();

							            // Load sub field value.
							            $type = get_sub_field('type_link');
							            // Do something...

							            ?>


						                <div class="slide"><!--more-->
						                	
						                	<div class="content">
						                		
						                		<div class="content-main flex-normal" >

					            	    			<div class="img flex-normal" id="bg1" style="background: transparent url(<?php the_sub_field('img') ?>) no-repeat center; background-size: cover;">

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

					            	    						$link = get_term_link( $get_link, 'product_cat' );

					            	    						break;

					            	    					case '3':
					            	    						// code...

					            	    						$link = get_sub_field('link_external');

					            	    						break;				
					            	    					
					            	    				} ?>

					            	    				<?php if( $type !== "0" ){ ?>

						            	    				<a href="<?php echo $link; ?>">
						            	    					


						            	    				</a>

					            	    				<?php } ?>

					            	    			</div>

						                		</div>

						                	</div>

						                </div>


							            <?php

							        // End loop.
							        endwhile;

							    // No value.
							    else :
							        // Do something...
							    endif; */

							    ?>

							</div>
								 
						</div>

						<div class="img"></div>

				</div>

				

			</div>

			<div class="item right">
				
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, laborum ipsam dolor quos.</p>

				<div class="btn-info flex-normal">
					
					<div class="m-btn m-btn--main">Comprar</div>

					<div class="img"></div>

				</div>

				<div class="plant plant--up-rotate">
					<div class="img"></div>
				</div>

			</div>

		</div>

	</header>

	<section class="kit">
		
		<h2>Arma tu kit</h2>

		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kit.jpg" alt="">

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque temporibus velit, distinctio alias ipsum iste?</p>
		<div class="m-btn m-btn--main">Quiero armar mi kit</div>

	</section>

	<section class="bg">
		
		<div class="intro-info flex-normal">

			<h3>Lo más popular</h3>

			<div class="m-btn">Ver todos los productos</div>

		</div>

		<div class="products-wrapper-shortcode">
			
			<?php echo do_shortcode('[products limit="6" columns="3" orderby="popularity" ]'); ?>

		</div>

	</section>

	

	<!--

	<section class="special">
		
		<div class="about-index">
			
			<div class="columns columns--double flex-normal">
				
				<div class="item left">
					
					<div class="img1"></div>

					<div class="img2"></div>	

				</div>

				<div class="item right">
					
					<h4>Empresa 100% mexicana con calidad mundial</h4>

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, est? Lorem ipsum dolor sit amet consectetur adipisicing elit. A, aperiam dolorum velit rem eos quam?</p>

					<div class="m-btn m-btn--main">Saber más</div>

				</div>

			</div>

		</div>

	</section>

	-->

<?php get_footer() ?>