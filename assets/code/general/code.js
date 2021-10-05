jQuery(function ($) {
//beginning

	$("").on("click", function(e){
		
	});

	$("#first").on("click", function(e){
		
		$("#hidenshow").addClass("yep");
		$(this).parent().parent().addClass("second");

		setTimeout(function(){
		  
			$("#hidenshow").removeClass("yep");

		}, 1150);

	});

	$(".sub").on("click", function(e){

		e.preventDefault();

		if( $(".menu-collapsable").hasClass("open") ){

			$(".menu-collapsable").toggleClass("open");
			$(".menu-container").find(".more-icon").toggleClass("open");

		}

		var id = $(this).data("id");
			
		$("body").toggleClass("lb-disable-scrolling");
		$(".overlay-single").toggleClass("show");
		$("#"+id).toggleClass("show");

		setTimeout(function(){
		  
			$(".overlay-single div").toggleClass("show");

		}, 150);

		setTimeout(function(){
		  
			$("#"+id+" .content").toggleClass("show");

		}, 350);

	});

	$(".closex, .overlay-single").on("click", function(){
		
		var target = $(this).parent().parent();
		var content = $(this).parent();

		setTimeout(function(){
		  
			$(content).toggleClass("show");

		}, 150);

		setTimeout(function(){
		  
			$(".overlay-single div").toggleClass("show");

		}, 350);


		setTimeout(function(){
			
			$("body").toggleClass("lb-disable-scrolling");
			$(".overlay-single").toggleClass("show");
			$(target).toggleClass("show");

			$("#projects-slider").removeClass("ready").addClass("first");


		}, 550);

	});

	$('#pics-proyect').flexslider({
	    animation: "slide",
	    selector: ".slides > .slide",
	    animationLoop: true,
	    controlNav: true,
	    directionNav: true,
	    slideshow: true,
	    pauseOnHover: false, 
	    keyboard: false,
	    //direction: "vertical",
	    //reverse: true, 
	    slideshowSpeed: 6000,  
	    animationSpeed: 1000,
	    pauseOnAction: false, 
	    sync: "#nav-slider"  
	    //itemWidth: w,   
	    //controlsContainer: "#controls",
	    //customDirectionNav: "#dir-nav .arrows"
	});

	
		//handle changes on response of the filters
		$( document ).on( 'ixProductFilterRequestProcessed', function( event ) {
		    // do your post-processing ...
		    console.log("pinguino has ended procesecing his pinguino stuff");

		    $(".close-filters").addClass("show");

		    if( $(".close-filters").hasClass("updated") ){

		    	$(".close-filters").removeClass("updated");
		    	  
		    	  setTimeout(function(){

		    		    $(".close-filters").addClass("updated");

		    	  }, 550);
		    }else{

		    	$(".close-filters").addClass("updated");

		    }

		} );


		/*
		 * Increase the items quantity
		 */
		$('body').on('click', '.increase-qty', function () {


		    var $button = $(this);
		    var item_key = $button.closest('.product-inner-wrap').data('item-key');
		    var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
		    var newVal = parseFloat(oldValue) + 1;
		    

		    $.ajax({
	            type: "post",
	            dataType: 'json',
	            url: frontend_js_params.ajax_url,
	            data: {
	                action: 'smcw_plus_action2',
	                _wpnonce: frontend_js_params.ajax_nonce,
	                item_key: item_key,
	                currentVal: newVal
	            },
	            beforeSend: function (xhr) {
	                $('.cart-ajax-inner-loader').show();

	                console.log("sending");

	            },
	            success: function (response) {

	                console.log(response);

	                // Don't allow decrementing below zero
	                $('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(newVal);
	                $('[data-item-key="' + item_key + '"]').find('.smcw-item-quty .quantity').text(newVal);

	    			
	                $('.cart-ajax-inner-loader').hide();
	                //$('.smcw-product-quantity-wrap').text(response.total_count);
	                //$('.smcw-tax-price-wrap').text(item_symbol + response.tax_price);
	                //$('.smcw-total-price-wrap').text(item_symbol + response.total_price);
	                
	                //$('.total-price-wrap').html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + item_symbol + '</span>' + response.total_price + '</span>');
	                $('.total-price-wrap').html(response.total_price);
	                $('.items-subtotal-price').html(response.sub_total);

	                $('.messages-mini-cart').html(response.message);
	                ///////////////
	                //coupon things
	                ///////////////
	                console.log(response.coupons);
	                $('.copupons-wrapper').html(response.coupons);
	        		
	        		//$(document.body).trigger('wc_fragment_refresh');	

	            }
	        });
		});

		/**
		******
		* Decrease the quantity
		*********
		*/
		$('body').on('click', '.smcw-minus-button', function () {
		    var $button = $(this);
		    //var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
		    var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
		    
		    if (oldValue > 1) {
		        //var item_key = $button.closest('.smcw-product-inner-wrap').data('item-key');
		        var item_key = $button.closest('.product-inner-wrap').data('item-key');
		        $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide();
		        var newVal = parseFloat(oldValue) - 1;
		        
		        $.ajax({
		        	/*
		            type: 'post',
		            dataType: 'json',
		            url: smcw_frontend_js_params.ajax_url,
		            data: {
		                action: 'smcw_minus_action',
		                _wpnonce: smcw_frontend_js_params.ajax_nonce,
		                item_key: item_key,
		                currentVal: newVal
		            },*/
		            type: "post",
		            dataType: 'json',
		            url: frontend_js_params.ajax_url,
		            data: {
		                action: 'smcw_minus_action2',
		                _wpnonce: frontend_js_params.ajax_nonce,
		                item_key: item_key,
		                currentVal: newVal
		            },
		            beforeSend: function (xhr) {

		            	console.log("sending decreaising")
		                $('.cart-ajax-inner-loader').show();

		            },
		            success: function (response) {

		                $('.cart-ajax-inner-loader').hide();
		                $('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(newVal);
		                $('[data-item-key="' + item_key + '"]').find('.smcw-item-quty .quantity').text(newVal);

		                $('.total-price-wrap').html(response.total_price);
		                $('.items-subtotal-price').html(response.sub_total);


		                //$('.smcw-product-quantity-wrap').text(response.total_count);
		                //$('.smcw-tax-price-wrap').text(item_symbol + response.tax_price);
		                //$('.smcw-total-price-wrap').text(item_symbol + response.total_price);
		                //$('.smcw-total-price-wrapper').html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + item_symbol + '</span>' + response.total_price + '</span>');
		                //$('.smcw-items-subtotal-price').text(item_symbol + response.sub_total);

		            }
		        });
		    } else {
		        $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show();
		        setTimeout(function () {
		            $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide();
		        }, 1000
		                );
		    }
		});

		/**
		******
		* Update quantity input
		*********
		*/
		$('body').on('change', '.qty-new-input', function () {

			//console.log("has changed");


			var $button = $(this);
			//var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
			var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
			var maxItemsAvaliable = $button.attr("max");

			var item_key = $button.closest('.product-inner-wrap').data('item-key');

			console.log(maxItemsAvaliable);
			
			if (oldValue > 0 ) {

				if(oldValue <= maxItemsAvaliable){

				    //var item_key = $button.closest('.smcw-product-inner-wrap').data('item-key');
				    
				    $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide();
				    var newVal = parseFloat(oldValue);
				    
				    $.ajax({
				    	
				        type: "post",
				        dataType: 'json',
				        url: frontend_js_params.ajax_url,
				        data: {
				            action: 'smcw_minus_action2',
				            _wpnonce: frontend_js_params.ajax_nonce,
				            item_key: item_key,
				            currentVal: newVal
				        },
				        beforeSend: function (xhr) {

				        	//console.log("sending update")
				            $('.cart-ajax-inner-loader').show();

				        },
				        success: function (response) {

				            $('.cart-ajax-inner-loader').hide();
				            $('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(newVal);
				            $('[data-item-key="' + item_key + '"]').find('.smcw-item-quty .quantity').text(newVal);

				            $('.total-price-wrap').html(response.total_price);
				            $('.items-subtotal-price').html(response.sub_total);


				            //$('.smcw-product-quantity-wrap').text(response.total_count);
				            //$('.smcw-tax-price-wrap').text(item_symbol + response.tax_price);
				            //$('.smcw-total-price-wrap').text(item_symbol + response.total_price);
				            //$('.smcw-total-price-wrapper').html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + item_symbol + '</span>' + response.total_price + '</span>');
				            //$('.smcw-items-subtotal-price').text(item_symbol + response.sub_total);

				        }
				    });

				} else{

					$button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show().text("La cantidad máxima es 30");
					//$('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(oldValue).text(oldValue);
					setTimeout(function () {
					    $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide().text("La cantidad minima es 1");
					}, 1000 );

				}

			} else {

			    $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show();
			    setTimeout(function () {
			        $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide();
			    }, 1000 );

			}
		});


		/*$(document).on('submit', '.shop_table.cart form', function() {			
		        	updateMiniCartQuantity();
		        	return false;
		    	});

		    	*/

		function updateMiniCartQuantity() {
			    var cartForm = $('.shop_table.cart form');
			    
			    $('<input />').attr('type', 'hidden')
			        .attr('name', 'update_cart')
			        .attr('value', 'Update Cart')
			        .appendTo(cartForm);



			    var formData = cartForm.serialize();
			    $.ajax({
			        type: cartForm.attr('method'),
			        url: cartForm.attr('action'),
			        data: formData,
			        dataType: 'html',
			        success: function(response) {
						console.log(response);

			            //let
			            wc_cart_fragment_url = (wc_cart_fragments_params.wc_ajax_url).replace("%%endpoint%%", "get_refreshed_fragments");

			            $.ajax({
			                type: 'post',
			                url: wc_cart_fragment_url,
			                success: function(response) {
			                    console.log(response);
			                    var mini_cart_wrapper = $('.widget_shopping_cart_content');
			                    var parent = mini_cart_wrapper.parent();
			                    mini_cart_wrapper.remove();
			                    parent.append(response.fragments['div.widget_shopping_cart_content']);
			                },
			                complete: function() {
			                    cartForm = $('.shop_table.cart form');
			                    $('body').trigger( 'wc_fragments_refreshed' );
			                }
			            });
			        }
			    });
			}

			function miniCart(){

				if(!$(".mini-cart-container").hasClass("show")){

					$(".mini-cart-container, .main-overlay").addClass("show");

					setTimeout(function(){
					  
							$(".mini-cart-container .anim-wrapper").addClass("show");
					  
					}, 250);

					setTimeout(function(){
					  
							$(".mini-cart-container .messages-mini-cart").addClass("show");
					  
					}, 450);

					setTimeout(function(){
					  
							$(".mini-cart-container .messages-mini-cart").removeClass("show");
					  
					}, 2850);


				}

			}

			//show mini cart on succesfull added product to the cart
			$(document.body).on('added_to_cart', function (a, b, c, d) {
			    
				//alert("Pinguino was added!");
				var prod_id   = d.data('product_id'); // Get the product name
				console.log(prod_id);

				prod_status = d.data('kit'); // Get the product name
				console.log(prod_status);


				miniCart();

				selected(prod_id, prod_status);

			});

			
			//Listen for the removed item on cart and get its ID
			$(document.body).on('removed_from_cart', function (a, b, c, d) {
			    
				//alert("Pinguino was added!");
				var prod_id   = d.data('product_id'); // Get the product name
				console.log(prod_id);

				removed(prod_id);

			});

			$(".open-mini-cart, .arma-tu-kit .pinguino").on("click", function(){

				miniCart();

			});

			//hide mini cart
			$(".mini-cart-container .close").on("click", function(){
			    
		    	

		    	$(".mini-cart-container .anim-wrapper").removeClass("show");

		    	setTimeout(function(){
		    	  
		    			$(".mini-cart-container, .main-overlay").removeClass("show");
		    	  
		    	}, 300);

			});

			function selected($prod_id, $prod_status){

				$(".arma-tu-kit").find(".post-"+$prod_id).addClass("pinguino");

				if($prod_status == "kit"){

					console.log("product on kit");

					$(".mini-cart-container").find('*[data-product-key="'+$prod_id+'"]').addClass("pinguino");

				}

			}

			function removed($prod_id){

				$(".arma-tu-kit").find(".post-"+$prod_id).removeClass("pinguino");

				

				/*

				$(".mini-cart-container .anim-wrapper").removeClass("show");

				setTimeout(function(){
				  
						$(".mini-cart-container, .main-overlay").removeClass("show");
				  
				}, 300);

				*/

			}

//ending
});

