		
		<?php  

			if(is_page_template('page-templates/page-contacto.php')){ ?>

				<div class="last-contact"></div>

			<?php }else{

				if(is_front_page() || is_product()){ ?>

					<div class="join-us">
						
						<div class="columns columns--double flex-normal">
							
							<div class="item left">
								
								<h6 class="title">Únete a nuestra comunidad</h6>
								<p>Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Rerum delectus exercitationem, id. Quia nesciunt provident saepe! Dicta, laborum, excepturi!</p>

							</div>

							<div class="item right">
								
								<form action="">
									
									<input type="text" placeholder="dirección de correo">

									<input type="submit" value="Suscribirme">

								</form>

							</div>

						</div>

					</div>

				<?php } ?>

				<footer>

					<div class="mountains"></div>
					
					<div class="columns columns--triple flex-normal">


						<div class="item">

							<div class="logo">
								
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 1212.7 294.8" style="enable-background:new 0 0 1212.7 294.8;" xml:space="preserve">
								<g>
									<path d="M265.5,53.1c0-7.4-1.3-12.6-3.9-15.6c-2.6-3.1-8.2-5-16.7-5.7c-3.2-0.5-4.8-2.2-4.8-5.2c0-1.5,0.2-3.2,0.7-5.2
										c3.2,0,7.7-0.2,13.4-0.6c5.8-0.4,10.5-0.8,14.2-1.3c5.7-0.7,10.8-1.7,15.3-2.9c4.5-1.2,7.7-1.8,9.7-1.8c3.5,0,5.2,1.8,5.2,5.5
										c0,4.2-0.4,9-1.1,14.4c-0.7,5.4-1.1,12-1.1,19.9v92c9-12,17.9-20.7,26.7-25.9c8.8-5.3,19.5-7.9,32.2-7.9c8.3,0,16.3,1.7,24,5.2
										c7.7,3.4,14.4,8.5,20.3,15.3c5.8,6.8,10.5,15,14.1,24.8c3.5,9.8,5.3,21,5.3,33.5c0,13.7-2.6,25.9-7.7,36.4
										c-5.1,10.5-11.5,19.5-19.1,26.7c-7.6,7.2-15.9,12.8-25,16.6s-17.4,5.7-25,5.7c-9.3,0-18.3-1.1-26.8-3.3c-8.6-2.2-16.3-5-23.1-8.5
										c-2.7,0.2-5.3,1-7.7,2.2c-2.5,1.2-4.7,2.5-6.6,3.9c-2,1.3-3.7,2.6-5.3,3.7c-1.6,1.1-2.9,1.7-3.9,1.7c-2,0-3.8-0.5-5.5-1.5
										c0.2-3.9,0.5-7.4,0.7-10.5c0.2-3.1,0.5-6.1,0.7-9c0.2-2.9,0.4-5.9,0.6-9c0.1-3.1,0.2-6.6,0.2-10.5V53.1z M296.4,243
										c6.1,6.4,12.8,11.4,20.2,15.1c7.3,3.7,15.7,5.5,25.3,5.5c13.9,0,24.5-5.9,31.7-17.7c7.2-11.8,10.8-26.9,10.8-45.3
										c0-9.3-1-18.2-3.1-26.7c-2.1-8.5-5.1-15.9-9.2-22.3c-4-6.4-8.9-11.4-14.5-15.1c-5.6-3.7-12.1-5.5-19.4-5.5c-4.9,0-9.8,1.4-14.7,4.2
										c-4.9,2.8-9.3,6.4-13.4,10.9c-4,4.4-7.3,9.4-9.9,14.9c-2.6,5.5-3.8,11.1-3.8,16.7V243z"/>
									<path d="M445.1,194.8c0-11.3,2.1-22,6.4-32c4.3-10.1,10.1-18.8,17.5-26.1c7.4-7.4,16-13.2,25.9-17.5c9.9-4.3,20.7-6.4,32.2-6.4
										c12,0,23,2,33.1,6.1c10,4.1,18.7,9.6,25.9,16.7c7.2,7.1,12.9,15.8,17,25.9c4,10.2,6.1,21.3,6.1,33.3c0,11.5-2.1,22.3-6.4,32.2
										c-4.3,9.9-10.1,18.6-17.5,25.9c-7.4,7.4-16,13.2-25.9,17.5c-9.9,4.3-20.7,6.4-32.2,6.4c-12,0-23.1-2-33.1-6.1
										c-10.1-4-18.7-9.6-25.9-16.7c-7.2-7.1-12.9-15.7-16.9-25.8C447.1,218.2,445.1,207.1,445.1,194.8z M479.7,182.7c0,9.1,1,18.4,2.9,28
										c2,9.6,5,18.2,9,26c4.1,7.7,9.3,14.1,15.7,19.1c6.4,5,14.1,7.6,23.2,7.6c14,0,24.8-4.9,32.5-14.7c7.7-9.8,11.6-22.5,11.6-37.9
										c0-9.1-0.9-18.6-2.8-28.5c-1.8-9.9-4.8-19-8.8-27.2c-4-8.2-9.3-15-15.8-20.4c-6.5-5.4-14.5-8.1-24.1-8.1c-13,0-23.5,4.5-31.5,13.4
										C483.6,148.7,479.7,163,479.7,182.7z"/>
									<path d="M691.3,149.2c0.7-0.5,2.8-2.7,6.3-6.6c3.4-3.9,7.9-8.1,13.4-12.5c5.5-4.4,11.8-8.4,18.9-12c7.1-3.6,15-5.3,23.6-5.3
										c5.9,0,11.5,0.9,16.9,2.6c5.4,1.7,10.1,4.5,14.2,8.5c4,3.9,7.3,9,9.7,15.1c2.5,6.1,3.7,13.7,3.7,22.8v89.8c0,3.7,2.2,6.4,6.6,8.3
										c4.4,1.8,9.4,3.2,15.1,4.2c2,0.5,2.9,2,2.9,4.4c0,1.5-0.2,3.4-0.7,5.9c-6.4-0.5-12.6-0.9-18.6-1.3c-6-0.4-12.7-0.6-20.2-0.6
										c-6.5,0-12.9,0.2-19.5,0.6c-6.6,0.4-13,0.8-19.4,1.3c-0.5-2.4-0.7-4.4-0.7-5.9c0-2.4,1.1-3.9,3.3-4.4c2.2-0.2,4.5-0.7,6.8-1.5
										c2.3-0.7,4.5-1.6,6.4-2.6c2-1,3.6-2.1,5-3.5c1.4-1.3,2-3,2-5v-72.1c0-6.1-0.4-11.8-1.1-16.9c-0.7-5.2-2.1-9.6-4.2-13.4
										c-2.1-3.8-4.9-6.7-8.4-8.8c-3.5-2.1-8.1-3.1-13.7-3.1c-6.1,0-12.1,1.1-17.9,3.1c-5.9,2.1-11.1,5.2-15.6,9.2
										c-4.5,4.1-8.1,9-10.8,14.9c-2.7,5.9-4,12.6-4,20.2v67c0,3.7,2.1,6.4,6.3,8.3c4.2,1.8,8.8,3.2,14,4.2c2.2,0.5,3.3,2,3.3,4.4
										c0,1.5-0.2,3.4-0.7,5.9c-6.4-0.5-12.7-0.9-18.8-1.3c-6.1-0.4-12.7-0.6-19.6-0.6c-7.2,0-14,0.2-20.4,0.6c-6.4,0.4-12.7,0.8-18.8,1.3
										c-0.5-2.4-0.7-4.4-0.7-5.9c0-2.4,1-3.9,2.9-4.4c5.6-1,10.7-2.4,15.1-4.2c4.4-1.8,6.6-4.7,6.6-8.7v-198c0-7.8-1.5-13.1-4.4-15.8
										c-3-2.7-8.8-4.5-17.7-5.5c-3.2-0.5-4.8-2.2-4.8-5.2c0-1.5,0.2-3.2,0.7-5.2c3.2,0,7.6-0.2,13.2-0.6c5.6-0.4,10.8-0.8,15.5-1.3
										c5.7-0.7,10.8-1.7,15.3-2.9c4.5-1.2,7.7-1.8,9.7-1.8c2.2,0,3.7,0.5,4.5,1.5c0.7,1,1.1,2.3,1.1,4.1c0,4.2-0.4,9-1.1,14.5
										c-0.7,5.5-1.1,12-1.1,19.3V149.2z"/>
									<path d="M978,238.2c1.7-1.7,3.5-2.6,5.5-2.6c2.5,0,4.8,2.1,7,6.3c-3.2,4.4-6.9,8.7-11,12.9c-4.2,4.2-9.2,7.9-14.9,11.2
										c-5.8,3.3-12.3,5.9-19.7,7.9c-7.4,2-15.8,2.9-25.4,2.9c-9.8,0-19.1-1.6-28-4.8c-8.8-3.2-16.6-8.1-23.4-14.7
										c-6.8-6.6-12.1-14.8-16.2-24.7c-4.1-9.8-6.1-21.3-6.1-34.6c0-12.5,2.4-24,7.2-34.6c4.8-10.6,11-19.6,18.6-27.1
										c7.6-7.5,16-13.3,25.2-17.5c9.2-4.2,18.1-6.3,26.7-6.3c22.8,0,39.4,6.6,49.9,19.9c10.4,13.3,15.6,30.5,15.6,51.9
										c0,1.5-0.7,2.2-2.2,2.2l-106.3,4.8c0,9.6,1.3,18.4,4,26.5c2.7,8.1,6.5,15.1,11.4,21c4.9,5.9,10.8,10.5,17.8,13.8
										c7,3.3,14.8,5,23.7,5c7.8,0,15.3-1.8,22.6-5.5C967.1,248.5,973.1,243.9,978,238.2z M918.5,126c-12.2,0-21.7,4.8-28.6,14.4
										c-6.8,9.6-10.3,22.1-10.3,37.5l69.2-3.3c3.7,0,5.5-1.6,5.5-4.8c0-4.7-0.7-9.6-2.2-14.7c-1.5-5.2-3.7-9.9-6.6-14.2
										c-2.9-4.3-6.6-7.9-11.1-10.7C929.9,127.4,924.6,126,918.5,126z"/>
									<path d="M1169.7,262.5c2.7,0,4.2,2.6,4.4,7.7c-6.4,4.4-14.5,6.6-24.3,6.6c-5.4,0-10.1-0.8-14.1-2.4c-4-1.6-7.3-3.7-10.1-6.4
										c-2.7-2.7-4.9-5.8-6.3-9.2c-1.5-3.4-2.5-7-3-10.7c-6.1,11-13.4,18.6-21.9,22.6c-8.5,4.1-18.2,6.1-29.3,6.1
										c-4.9,0-10.1-0.4-15.6-1.3c-5.5-0.9-10.7-2.6-15.7-5.3c-4.9-2.7-9-6.5-12.1-11.4c-3.2-4.9-4.8-11.4-4.8-19.5c0-9.1,2.2-16.7,6.4-23
										c4.3-6.3,9.8-11.4,16.6-15.5c6.7-4.1,14.1-7.3,22.1-9.8c8-2.4,15.7-4.5,23-6.3c4.2-0.7,8-1.5,11.6-2.4c3.6-0.9,6.7-1.8,9.4-2.8
										c3.4-1,5.6-2.3,6.4-4c0.9-1.7,1.3-5,1.3-9.9c0-11.5-2.2-21-6.6-28.5c-4.4-7.5-12.3-11.2-23.5-11.2c-4.2,0-7.7,0.5-10.7,1.5
										c-2.9,1-5.4,2.5-7.4,4.6c-2,2.1-3.7,4.9-5.2,8.3c-1.5,3.4-2.9,7.5-4.4,12.1c-0.7,2.7-2.4,4.7-5,5.9c-2.6,1.2-6.9,2.7-13.1,4.4
										c-1.5,0.5-3.3,1-5.5,1.5c-2.2,0.5-4.1,0.7-5.5,0.7c-2.4,0-3.7-2.6-3.7-7.7c0-5.4,2.1-10.8,6.3-16.2c4.2-5.4,9.5-10.2,16-14.4
										c6.5-4.2,13.6-7.5,21.2-10.1c7.6-2.6,14.8-3.9,21.7-3.9c8.6,0,16.3,0.7,23.2,2.2c6.9,1.5,12.8,4.2,17.8,8.1
										c5,3.9,8.7,9.2,11.4,15.8c2.6,6.6,3.9,15.2,3.9,25.8v63.3c0,8.6,0.3,14.8,0.9,18.6c0.6,3.8,1.5,6.8,2.8,9c1.7,3.4,3.6,5.7,5.7,6.8
										c2.1,1.1,4.2,1.7,6.4,1.7c2.7,0,4.6-0.2,5.7-0.7C1167.3,262.8,1168.5,262.5,1169.7,262.5z M1113.8,190.8l-11.8,1.8
										c-6.4,1.2-12.6,2.7-18.7,4.4c-6.1,1.7-11.4,4.1-16.1,7.2c-4.7,3.1-8.5,6.9-11.3,11.6c-2.8,4.7-4.3,10.4-4.3,17.3
										c0,9.3,2.4,16.4,7.2,21.3c4.8,4.9,10.8,7.4,17.9,7.4c4.7,0,9.3-1,13.9-3.1c4.6-2.1,8.5-5,11.8-8.8c3.3-3.8,6.1-8.3,8.2-13.4
										c2.1-5.2,3.1-10.8,3.1-16.9V190.8z"/>
								</g>
								<g>
									<g>
										<path style="fill:#BE1E2D;" d="M56.7,16.3c44.2,0,88.3,0,132.4,0c6.8,2.9,8.5,5.6,8.5,13.2c0,78.3,0,156.7,0,235.1
											c0,1.6,0,3.1-0.3,4.7c-0.7,4-4,7.1-8.1,7.8c-43.5,0-86.9,0-130.3,0c-0.8,0-1.6-0.1-2.2,0.6c-0.2,0-0.4,0-0.6,0
											c-3.3-1.8-6-4.2-7.7-7.6c0-82,0-164,0-246C50.3,20.3,52.9,17.6,56.7,16.3z M55.7,146.8c0,39.3,0,78.6,0,118c0,4.7,0.8,5.4,5.5,5.4
											c41.3,0,82.6,0,123.9,0c4.7,0,5.4-0.7,5.4-5.5c0-78.6,0-157.2,0-235.7c0-4.6-0.9-5.5-5.4-5.5c-41.2,0-82.4,0-123.6,0
											c-4.8,0-5.7,0.9-5.7,5.6C55.7,68.3,55.7,107.5,55.7,146.8z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M189.3,277c0,0.2-0.1,0.4-0.1,0.6c-44.2,0-88.3,0-132.4,0
											c0.6-0.7,1.4-0.6,2.2-0.6C102.4,277,145.8,277,189.3,277z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M128.2,152.4c-4.6,2.5-2.1,6.5-2.5,9.8
											c-0.2,1.4,1.5,0.8,2.3,0.8c9.8,0,19.7,0,29.5,0c5,0,10,0,15,0c1.8-0.1,2.6,0.4,2.5,2.4c-0.1,5.1,0.1,5.1-5,5.1
											c-13.9,0-27.8,0-41.8-0.1c-2,0-2.6,0.5-2.6,2.6c0.1,7,0,7,7,7c10,0,20,0.1,30-0.1c2.4,0,2.7,0.8,2.7,2.9c-0.1,6.6-0.1,13.3,0,20
											c0.1,2.2-0.5,2.8-2.7,2.8c-11.4-0.1-22.8,0-34.1-0.1c-2.1,0-3.1,0.5-2.8,2.7c0.1,0.5,0,1,0,1.5c-0.4,5.9-0.4,5.9,5.4,5.9
											c12.4-0.1,24.9-0.1,37.3-0.2c0.9,0,1.7,0.2,2.6,0.3c1.9,0.2,2.6,0.9,2.2,3.2c-0.9,5.4-1.3,10.9-2.7,16.2c-1.7,6.5-4,8.3-10.7,8.6
											c-1.1,0-2.1,0-3.2,0c-2.3-0.1-5.1,0.6-6.6-0.5c-1.5-1-1.7-3.9-2.5-6.3c3.5,0.2,6.8,0.4,10,0.5c2.6,0.2,4.3-1.1,5.1-3.5
											c1-3.1,1.4-6.3,2-9.5c0.2-1.5-0.3-1.9-1.7-1.9c-10.6,0.1-21.3,0.1-32.1,0c-2.4,0-1.6,1.1-1,2.3c5.5,12.4,15.3,20,28,24.3
											c6.5,2.2,13.2,3.4,20.2,4.2c-1.5,2.3-3,4.1-4,6.4c-0.3,0.8-0.9,1.1-1.9,1c-13.9-2.4-27-6.3-37.6-16.3c-2.6-2.5-4.8-5.2-6.8-8.1
											c-2-2.9-3.5-6.1-5.1-9.7c-2.9,7.4-7.2,13.5-13.3,18.3c-10.3,8.1-22.3,12.3-34.8,15.5c-1.1,0.3-1.7-0.1-2.3-1
											c-3.7-5.5-3.8-5.5,2.6-7.1c7.3-1.9,14.4-4.3,21.1-7.8c9-4.8,16.1-11.3,19.6-21.8c-2.6,0-5,0-7.4,0c-7.3,0-14.5,0-21.8,0
											c-1.3,0-2.6-0.3-2.8,1.6c-0.2,2.3-1.5,2.9-3.8,2.7c-5.1-0.5-5.1-0.3-3.7-5.1c2-6.9,3.7-13.8,5.1-20.8c0.4-2,1.2-2.5,3.1-2.4
											c10.3,0.1,20.6,0,30.9,0.1c2.2,0.1,2.8-0.6,2.7-2.8c-0.2-2.1-0.2-4.3,0-6.5c0.2-2.1-0.6-2.6-2.6-2.6c-11.6,0.1-23.3,0.1-35,0
											c-1.1,0-2.8,0.8-3.1-0.6c-0.4-1.9-0.2-3.9,0.2-5.8c0.1-0.7,1.6-0.4,2.4-0.4c11.8,0,23.6-0.1,35.3,0c2.2,0,2.9-0.4,2.8-2.7
											c-0.1-6.9,0-6.9-6.8-6.9c-12.6,0-25.3-0.1-37.9,0c-2.1,0-3.2-0.3-3-2.8c0.2-4.7,0-4.7,4.9-4.7c13.3,0,26.7,0,40,0
											c2.3,0.1,3-0.6,2.9-2.9c-0.2-2.4,0-4.7-0.1-7.1c0-1,0.1-1.7,1.4-1.6C121.8,151.7,124.9,151.5,128.2,152.4z M141.5,198.8
											c4.6,0,9.2,0,13.8,0.1c1.5,0,2-0.5,2-2c-0.1-2.6-0.1-5.3,0-7.9c0-1.4-0.5-1.9-1.9-1.9c-9.3,0.1-18.6,0.1-27.9,0
											c-1.6,0-2,0.6-1.9,2.1c0.1,2.6,0.1,5.1,0,7.6c-0.1,1.7,0.4,2.2,2.1,2.1C132.3,198.7,136.9,198.8,141.5,198.8z M100.9,215.7
											c3,0,5.9,0,8.8,0c7.6,0,7.5,0,7.7-7.7c0-1.8-0.4-2.3-2.2-2.3c-6.5,0.1-13,0.1-19.4,0.1c-8.3,0-8.2,0-10,7.9
											c-0.4,2,0.2,2.1,1.8,2.1C92.1,215.6,96.5,215.7,100.9,215.7z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M171,107.5c1.2,0.8,1.7,1.6,2.5,1.9c4.3,1.4,4.6,4.4,3.9,8.2
											c-0.7,4.4-1.1,8.8-2.4,13c-2.4,7.3-8.2,9.9-15.4,7c-3.7-1.5-6.4-4.3-8.7-7.6c-5.4-7.8-7.9-16.8-10-25.8c-2.8-11.9-4.1-23.9-5.2-36
											c-0.2-2.1-0.9-2.5-2.8-2.5c-20.2,0.1-40.4,0-60.6,0.1c-2.5,0-3.9-0.4-3.3-3.2c0.1-0.4,0.1-0.8,0-1.2c-0.4-2.4,0.3-3.4,3.1-3.3
											c5.3,0.2,10.8,0,16.2,0c14.6,0,29.2,0,43.8,0.1c2.6,0,3.1-0.7,2.8-3.1c-0.6-7.6-0.6-15.3-0.8-22.9c0-2.6,0.7-3.2,3.1-2.8
											c2.1,0.4,4.1,0.3,6.1,0.4c0.6,0.1,1.3-0.2,1.4,0.6c0.1,0.6-0.4,0.9-0.9,1c-1.5,0.2-1.3,1.4-1.3,2.4c-0.1,7.5,0.2,14.9,0.5,22.4
											c0.1,1.9,0.9,2,2.3,2c9.1-0.1,18.2,0.1,27.3-0.1c2.3,0,2.8,0.6,2.8,2.8c-0.2,4.8-0.1,4.8-4.7,4.8c-8.3,0-16.7,0-25,0
											c-1.4,0-2.2,0.1-2,1.9c1.6,16.7,3.3,33.3,9.4,49.1c1.2,3.1,2.7,6.1,4.6,8.8c0.9,1.2,1.9,2.3,3.1,3.1c4.2,2.9,6.6,2.2,8-2.7
											c1.4-5,1.5-10.1,1.9-15.1C170.9,109.8,170.9,108.9,171,107.5z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M88.5,80c-2.6,1.6-2,3.9-2,6c0,12.2,0,24.3-0.1,36.5
											c-0.1,2.4,0.7,3,3,2.5c3-0.7,5.9-1.3,8.9-1.6c2.4-0.2,3-1.1,3-3.5c-0.1-16.6,0-33.1-0.1-49.7c0-3,0.9-3.6,3.6-3.2
											c2.1,0.4,4.2,0.3,7.2,0.6c-3.9,1.8-2.9,4.6-3,7.1c0,3.5,0.1,7.1,0,10.6c-0.1,1.6,0.5,2,2,2c5.6-0.1,11.2,0,16.8-0.1
											c1.9-0.1,2.5,0.4,2.5,2.4c-0.1,4.9,0,4.9-4.9,4.9c-4.8,0-9.6,0-14.4,0c-1.6,0-2,0.4-2,2c0.1,7.6,0.1,15.3,0,22.9
											c-0.1,1.9,0.5,1.9,2.1,1.6c6.5-1.3,13.1-2.3,19.6-3.6c2.3-0.5,3.3-0.1,3.5,2.5c0.2,4.3,0.3,4.2-4,5c-18.4,3.5-36.9,7-55.4,10.5
											c-0.5,0.1-1.2,0-1.4,0.3c-3.1,3.5-3.1-0.2-3.7-1.7c-2.4-5.9-2.3-5.9,4.1-6.7c0.3,0,0.6-0.1,0.9-0.1c3,0,4-1.1,4-4.4
											c-0.2-13.6-0.1-27.2-0.2-40.9c0-2.3,0.5-3.2,2.9-2.8C83.9,79.8,86.2,79.8,88.5,80z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M102.1,43.8c-6.8,0-13.5-0.1-20.3,0c-2,0.1-2.7-0.5-2.7-2.6
											c0.1-5,0-5,5.1-5c12.7,0,25.5,0.1,38.2,0c2,0,2.7,0.4,2.6,2.5c-0.2,5.1,0,5.1-5.1,5.1C114,43.8,108,43.8,102.1,43.8z"/>
									</g>
									<g>
										<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BE1E2D;" d="M173.4,48.7c-1.5,1.2-3.1,2.3-4.4,3.6c-1.3,1.3-2,1-3.2-0.4
											c-4.6-5.7-10-10.7-15.8-15.2c-1.6-1.2-1.9-1.9-0.1-3.3c3.9-2.8,3.9-2.9,7.7,0.1c5.1,4.1,10,8.4,14.4,13.4
											C172.5,47.5,172.9,48,173.4,48.7z"/>
									</g>
								</g>
								</svg>

							</div>

						</div>


						<div class="item">

							<h6 class="title">Contáctanos</h6>

							<div class="footer-items">
								
								<div class="f-item flex-normal">
									
									<div class="icon">
										
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										
										<g>
											<g>
												<path class="st1" d="M216.9,0H83.1C72,0,62.9,9.1,62.9,20.3v259.5c0,11.2,9.1,20.3,20.3,20.3h133.7c11.1,0,20.3-9.1,20.3-20.3
													V20.3C237.1,9.1,228,0,216.9,0z M128.6,14.6h42.8c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5h-42.8c-1.4,0-2.5-1.1-2.5-2.5
													C126.2,15.7,127.3,14.6,128.6,14.6z M150,289.9c-5.6,0-10.1-4.5-10.1-10.1c0-5.6,4.5-10.1,10.1-10.1s10.1,4.5,10.1,10.1
													C160.1,285.3,155.6,289.9,150,289.9z M223,262.5H77V32.1H223V262.5z"/>
											</g>
										</g>
										</svg>

									</div>

									<div class="txt">+52 222 333 666</div>	

								</div>

								<div class="f-item flex-normal">
									
									<div class="icon">
										
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										
										<g>
											<g>
												<g>
													<g>
														<path class="st1" d="M158.7,187.9c-2.8,1.8-6,2.5-8.9,2.5s-6-0.7-8.9-2.5L0,101.8v114.4c0,24.4,19.8,44.3,44.3,44.3h211.5
															c24.4,0,44.3-19.8,44.3-44.3V101.8L158.7,187.9z"/>
													</g>
												</g>
												<g>
													<g>
														<path class="st1" d="M255.7,39.5H44.3c-20.9,0-38.6,14.9-42.9,34.7l148.8,90.7l148.4-90.7C294.3,54.4,276.6,39.5,255.7,39.5z"/>
													</g>
												</g>
											</g>
										</g>
										</svg>

									</div>

									<div class="txt">contacto@bohea.com</div>	

								</div>

								<div class="f-item flex-normal">
									
									<div class="icon">
										
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<g>
											<path class="st1" d="M150,0C92.5,0,45.7,46.8,45.7,104.3c0,72.3,104.4,195.7,104.4,195.7s104.2-127,104.2-195.7
												C254.3,46.8,207.5,0,150,0z M181.5,134.8c-8.7,8.7-20.1,13-31.5,13c-11.4,0-22.8-4.3-31.5-13c-17.3-17.3-17.3-45.6,0-62.9
												c8.4-8.4,19.6-13,31.5-13s23.1,4.6,31.5,13C198.8,89.2,198.8,117.5,181.5,134.8z"/>
										</g>
										</svg>

									</div>

									<div class="txt">Dirección 123</div>	

								</div>

							</div>

						</div>

						<div class="item">

							<h6 class="title">Siguenos</h6>

							<div class="footer-items">
								
								<div class="f-item flex-normal">
									
									<div class="icon">
										
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										
										<path class="st0" d="M300,150C300,67.2,232.8,0,150,0C67.2,0,0,67.2,0,150c0,82.8,67.2,150,150,150c0.4,0,0.9,0,1.3,0V195.3h-36.1
											v-41.8h36.1v-30.8c0-35.8,21.9-55.3,53.8-55.3c15.3,0,28.4,1.1,32.3,1.6v37.4l-22.1,0c-17.4,0-20.7,8.3-20.7,20.4v26.7h41.4
											l-5.4,41.8h-36v98C255.6,274.3,300,217.4,300,150z"/>
										<path class="st3" d="M230.5,195.3l5.4-41.8h-41.4v-26.7c0-12.1,3.4-20.4,20.7-20.4l22.1,0V69c-3.8-0.5-17-1.6-32.3-1.6
											c-31.9,0-53.8,19.5-53.8,55.3v30.8h-36.1v41.8h36.1V300c15-0.1,29.5-2.4,43.2-6.7v-98H230.5z"/>
										</svg>


									</div>

									<div class="txt">Facebook</div>	

								</div>

								<div class="f-item flex-normal">
									
									<div class="icon">
										
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<style type="text/css">
											.st0{fill:#211915;}
											.st1{fill:#0B131B;}
											.st2{fill:#395398;}
											.st3{fill:#FFFFFF;}
											.st4{fill:#B8B5B5;stroke:#FFFFFF;stroke-miterlimit:10;}
											.st5{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
											.st6{fill:url(#SVGID_1_);}
											.st7{fill:url(#SVGID_2_);}
											.st8{fill:url(#SVGID_3_);}
											.st9{fill:#32BA46;}
											.st10{fill:none;}
											.st11{fill:url(#SVGID_4_);}
										</style>
										<path class="st0" d="M300,150c0,82.8-67.2,150-150,150C67.2,300,0,232.8,0,150C0,67.2,67.2,0,150,0C232.8,0,300,67.2,300,150z"/>
										<g>
											<g>
												<path class="st3" d="M190.6,251.2h-81.3c-36.1,0-65.4-29.4-65.4-65.4v-71.6c0-36.1,29.3-65.4,65.4-65.4h81.3
													c36.1,0,65.4,29.3,65.4,65.4v71.6C256.1,221.9,226.7,251.2,190.6,251.2z M109.4,63.3c-28.1,0-50.9,22.8-50.9,50.9v71.6
													c0,28.1,22.8,50.9,50.9,50.9h81.3c28.1,0,50.9-22.8,50.9-50.9v-71.6c0-28.1-22.8-50.9-50.9-50.9H109.4z"/>
											</g>
											<g>
												<path class="st3" d="M150,208.2c-32.1,0-58.2-26.1-58.2-58.2c0-32.1,26.1-58.2,58.2-58.2c32.1,0,58.2,26.1,58.2,58.2
													C208.2,182.1,182.1,208.2,150,208.2z M150,106.3c-24.1,0-43.7,19.6-43.7,43.7c0,24.1,19.6,43.7,43.7,43.7
													c24.1,0,43.7-19.6,43.7-43.7C193.7,125.9,174.1,106.3,150,106.3z"/>
											</g>
											<g>
												<path class="st3" d="M219.4,93.6c0,6.7-5.4,12.1-12.1,12.1c-6.7,0-12.1-5.4-12.1-12.1c0-6.7,5.4-12.1,12.1-12.1
													C214,81.5,219.4,86.9,219.4,93.6z"/>
											</g>
										</g>
										
									</div>

									<div class="txt">Instagram</div>	

								</div>

							</div>

						</div>

					</div>

					<div class="last-line flex-normal">
						
						<a href="">Aviso de privacidad</a>

						<a href="">Terminos y Condiciones</a>

						<a href="">FAQs</a>

						<a href="">Todos los derechos reservados &copy;</a>

						<a href="">Created by Add Astra</a>

					</div>

				</footer>

			<?php }

		?>

		
	</div><!-- #page wrapper -->
	<?php wp_footer(); ?>
	</body>
</html>	