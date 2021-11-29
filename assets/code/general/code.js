jQuery(function ($) {
//beginning

	$("").on("click", function(e){
		
	});

	var $clonedPagination = $(".woocommerce-product-search-filter-products-prefix").clone();

	$(".store-info-container .right .woocommerce.columns-3").append($clonedPagination);

	$(".faq .item").on("click", function(){
		
		var target = $(this).find('.info');

		if( $(this).hasClass("open") ){

			$(this).removeClass('open');
			$(target).animate({
			    height: 0
			}, 300);

		} else{

			$(this).addClass('open');

			$(target).animate({
			    height: target.get(0).scrollHeight
			}, 300);

		}

	});

	//count  all quantity of the selected products and if it is equal to max allowed quantity,
	//show feedback to the user and let him know that the max items has been reached
	$(".summary-add-to-cart-form-bundle form.bundle_form").on("change", function(e){

		console.log("change on form made");

		var selected = [];

		$( this ).find('.has_qty_input .qty').each(function( index, element ) {

			selected.push( $(element).val() );

		});

		console.log(selected);

		var total = 0;
		for (var i = 0; i < selected.length; i++) {
		    total += selected[i] << 0;
		}

		console.log(total);

		var maxImput = 6;

		if(maxImput == total){

			$( this ).find('.has_qty_input .qty').each(function( index, element ) {

				$(this).parent().append("<div class='max-qty-message'>Hola,¡El total de productos ya es 6!<span>El numero máximo de productos en el kit es de: 6</span></div>").addClass("max-qty");

			});

		}else{

			$(this).find(".has_qty_input .qty").parent().removeClass("max-qty");

		}

	});



	
	//get all the selected values of the form and puth them into a 
	//clickeable button that opens whatsApp with a prefilled message 
	//of the selections made by the user
	$("#form-to-whatsapp form").on("change", function(e){
		
		//console.log("changed");
		//changes added

		var name = $(this).find(".wpforms-field-text input[type=text]").first().val();

		var evento = "";
		var eventotype = "";

		if( $("select#wpforms-330-field_8") ){

			if( $("select#wpforms-330-field_8").val() ){
			
				eventotype = $("select#wpforms-330-field_8").val();
			
				evento = ', mi tipo de evento es: '+eventotype;

			}

		}else{

			evento = "";

		}

		console.log(name);

		var selected = {};

		var values = {};

		setTimeout(function(){
		  
			$( ".wpforms-image-choices li" ).each(function( index ) {// get all selected products

				if( $( this ).hasClass('wpforms-selected') ){//just get the items that are selected

					//console.log( index + ": " + $( this ).find(".wpforms-image-choices-label").text() );

					//create and array with the values
					selected[index] = $( this ).find(".wpforms-image-choices-label").text();

				}

			});

			//console.log(selected);

			$(".wpforms-field-number-slider.wpforms-conditional-field").each(function( index ) {//get all the quantity of items selectes

				if( $( this ).hasClass('wpforms-conditional-show') ){//just get the values that are visible, each one of this are activeted when you choose an item

					//console.log( index + ": " + $( this ).find("input").val() );


					//create and array with the values
					values[index] = $( this ).find("input").val();

				}

			});

			//console.log(values,values[0]);

			var endValues = [ ];


			$.each(selected, function(index, item) {//merge the values of selected[] and values[]
			   
				//concatenated the values in a variable			   
			    var str = selected[index] + ":" + values[index];
			    //push the variable into the new array
			    endValues.push(str);

			});


			//convert the array into a string separate by coma(,)
			var textWhatsApp = endValues.join(", ");

			//console.log(textWhatsApp);

			var textToBeSend = 'Hola, mi nombre es: '+name+evento+', quiero cotizar lo siguiente ';

			//whatsApp url with number and message
			var url = 'https://api.whatsapp.com/send?phone=+5212223585909&text='+textToBeSend;

			//construct the full ur
			var link = url+textWhatsApp;

			//refresh the link with the full url
			$("#cotizar-marca-whats").attr("href", link);

			

			//Mail url with number and message
			var url2 = 'mailto:boheacompany@gmail.com?subject=Cotización&body='+textToBeSend;

			//construct the second full url 
			var link2 = url2+textWhatsApp;

			//refresh the link with the full url
			$("#cotizar-marca-mail").attr("href", link2);

			

		}, 150);

		


	});

	//disbale aneable the placeorder button when conekta payment is selected

	// A $( document ).ready() block.
	$( document ).ready(function() {

		console.log("loaded!");
		//$(document.body).trigger('update_checkout');

	    
		setTimeout(function(){
		  
			if( $("input#payment_method_conektacard").is(":checked") ){
				$("#place_order").css("display","none");
				//console.log("checked baby!");

			}

			console.log("Timeout!");

		}, 1050);

	});

	$('form.checkout').on('change', 'input[name="payment_method"]', function(){
        //$(document.body).trigger('update_checkout');
        //console.log("red I want");

        if( $("input#payment_method_conektacard").is(":checked") ){
        	$("#place_order").css("display","none");
        	//console.log("checked baby!");

        }
    });	

	$("body").on("click", function() {

		//$("#place_order").addClass("display");
		console.log("red body");

	});

	$("#first").on("click", function(e){
		
		$("#hidenshow").addClass("yep");
		$(this).parent().parent().addClass("second");

		setTimeout(function(){
		  
			$("#hidenshow").removeClass("yep");

		}, 1150);

	});

	$(".menu-trigger").on("click", function(){
		
		$(this).toggleClass("open");
		$(".menu").toggleClass("open");

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

	$('.slide-js').flexslider({
	    animation: "fade",
	    selector: ".slides > .slide",
	    animationLoop: true,
	    controlNav: false,
	    directionNav: false,
	    slideshow: true,
	    pauseOnHover: false, 
	    keyboard: false,
	    //direction: "vertical",
	    //reverse: true, 
	    slideshowSpeed: 6000,  
	    animationSpeed: 1000,
	    pauseOnAction: false, 
	    //sync: "#nav-slider"  
	    //itemWidth: w,   
	    //controlsContainer: "#controls",
	    //customDirectionNav: "#dir-nav .arrows"
	});

	$('#pics-proyect').flexslider({
	    animation: "slide",
	    selector: ".slides > .slide",
	    animationLoop: true,
	    controlNav: true,
	    directionNav: true,
	    slideshow: false,
	    pauseOnHover: false, 
	    keyboard: false,
	    //direction: "vertical",
	    //reverse: true, 
	    slideshowSpeed: 6000,  
	    animationSpeed: 1000,
	    pauseOnAction: false, 
	    //sync: "#nav-slider"  
	    //itemWidth: w,   
	    //controlsContainer: "#controls",
	    //customDirectionNav: "#dir-nav .arrows"
	});

	var placesNavW = $("#container-slide").width();
	var x = 0;

	if ($('#mobile-indicator-proceso2').is(':visible')){
	    x = 3;
	} else{
	  	x = 1;
	}

	var wpW = placesNavW / x;

	$('#contact-slider').flexslider({
	    animation: "slide",
	    selector: ".slides > .slide",
	    animationLoop: true,
	    controlNav: true,
	    directionNav: true,
	    slideshow: false,
	    pauseOnHover: false, 
	    keyboard: false,
	    //direction: "vertical",
	    //reverse: true, 
	    slideshowSpeed: 6000,  
	    animationSpeed: 1000,
	    pauseOnAction: false, 
	     itemWidth: wpW,  
	     itemMargin: 15,  
	    //itemWidth: w,   
	    //controlsContainer: "#controls",
	    //customDirectionNav: "#dir-nav .arrows"
	});

	$(".show-filter").on("click", function(){
	    
	    //$(this).toggleClass("open");
	    $("#filter-container").toggleClass("show");

	});

	$(".close-filter-box").on("click", function(){
	    
	    //$(this).toggleClass("open");
	    $("#filter-container").toggleClass("show");
	    $(".close-filters").removeClass("show");

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

	    var maxItemsAvaliable = parseInt( $(this).parent().find('.smcw-input .qty-new-input').attr("max") );
	    var oldValue = parseInt( $(this).parent().find('.smcw-input .qty-new-input').val() );
		

	    //console.log(maxItemsAvaliable, oldValue);
	    
	    if(oldValue < maxItemsAvaliable){

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

	                 $( document.body ).trigger( 'wc_fragment_refresh' );
	        		
	        		//$(document.body).trigger('wc_fragment_refresh');	

	            }
	        });

		}else{

			$button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show().text("La cantidad máxima disponible de este producto es "+maxItemsAvaliable);
			//$('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(oldValue).text(oldValue);
			setTimeout(function () {
			    $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide().text("La cantidad minima es 1");
			}, 1000 );

		}

	});

	/**
	******
	* Decrease the quantity
	*********
	*/
	$('body').on('click', '.smcw-minus-button', function () {
		
	    var $button = $(this);
	    //var oldValue = $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val();
	    var oldValue = parseInt( $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val() );
	    
	    var maxItemsAvaliable = parseInt( $(this).parent().find('.smcw-input .qty-new-input').attr("max") );
	    

	    if (oldValue > 1 ) {

	    	if(oldValue <= maxItemsAvaliable){

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

		                $( document.body ).trigger( 'wc_fragment_refresh' );
		                //$('.smcw-product-quantity-wrap').text(response.total_count);
		                //$('.smcw-tax-price-wrap').text(item_symbol + response.tax_price);
		                //$('.smcw-total-price-wrap').text(item_symbol + response.total_price);
		                //$('.smcw-total-price-wrapper').html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + item_symbol + '</span>' + response.total_price + '</span>');
		                //$('.smcw-items-subtotal-price').text(item_symbol + response.sub_total);

		            }
		        });

	    	}else{

	    		$button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show().text("La cantidad máxima disponible de este producto es "+maxItemsAvaliable);
	    		//$('[data-item-key="' + item_key + '"]').find("input.smcw-quantity-inputs").val(oldValue).text(oldValue);
	    		setTimeout(function () {
	    		    $button.closest('.smcw-quantity').find('.smcw-hiden-wrap').hide().text("La cantidad minima es 1");
	    		}, 1000 );

	    	}

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
		var oldValue =  parseInt( $button.closest('.smcw-quantity').find("input.smcw-quantity-inputs").val() );
		var maxItemsAvaliable =  parseInt( $button.attr("max") );

		var item_key = $button.closest('.product-inner-wrap').data('item-key');

		console.log(oldValue, maxItemsAvaliable);
		
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

			             $( document.body ).trigger( 'wc_fragment_refresh' );
			            //$('.smcw-product-quantity-wrap').text(response.total_count);
			            //$('.smcw-tax-price-wrap').text(item_symbol + response.tax_price);
			            //$('.smcw-total-price-wrap').text(item_symbol + response.total_price);
			            //$('.smcw-total-price-wrapper').html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + item_symbol + '</span>' + response.total_price + '</span>');
			            //$('.smcw-items-subtotal-price').text(item_symbol + response.sub_total);

			        }
			    });

			} else{

				$button.closest('.smcw-quantity').find('.smcw-hiden-wrap').show().text("La cantidad máxima disponible de este producto es "+maxItemsAvaliable);
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


	//
	$(document.body).on('adding_to_cart', function (a, b) {

		var prod_id = b.data('product_id');
		var prod_variation_id = b.data('variation_id');


		var kit = b.data('kit');

		//console.log("adding product to cart: " + JSON.stringify(b));

		console.log("adding product to cart");

		console.log(prod_id + " " + prod_variation_id + " normal request");

		if(kit){

			$.ajax({
				
			    type: "post",
			    dataType: 'json',
			    url: frontend_js_params.ajax_url,
			    data: {
			        action: 'notify_kit',
			        _wpnonce: frontend_js_params.ajax_nonce,
			        productId: prod_id,
			        variationId: prod_variation_id
			    },
			    beforeSend: function (xhr) {

			    	console.log("sending kit product");
			        //$('.cart-ajax-inner-loader').show();

			    },
			    success: function (response) {

			        console.log(response.message);

			    }
			});

		}

	});


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

	function playPauseVideo() {
	    let videos = document.querySelectorAll(".vid");
	    //let videos = document.getElementsByClassName("vid");
	    videos.forEach((video) => {
	        // We can only control playback without insteraction if video is mute
	        video.muted = true;
	        // Play is a promise so we need to check we have it
	        let playPromise = video.play();
	        if (playPromise !== undefined) {
	            playPromise.then((_) => {
	                let observer = new IntersectionObserver(
	                    (entries) => {
	                        entries.forEach((entry) => {
	                            if (
	                                entry.intersectionRatio !== 1 &&
	                                !video.paused
	                            ) {
	                                video.pause();
	                            } else if (video.paused) {
	                                video.play();
	                            }
	                        });
	                    },
	                    { threshold: 0.35 }
	                );
	                observer.observe(video);
	            });
	        }
	    });
	}

	// And you would kick this off where appropriate with:
	playPauseVideo();

	$('.video-main').on({
	  mousemove: function(e) {
	    
        //if( !("#pics-proyect .hov-allowed").hasClass("not") ){

    	    $('.custom-cursor').css({
    	      left: e.pageX,
    	      top: e.pageY
    	    });

    	    $('.custom-cursor').addClass("show");
	    

	    console.log("hover");

       // }

	  },
	  mouseout: function(e){

	  	$('.custom-cursor').removeClass("show");

	  },

	});

//ending
});

/*!
 * headroom.js v0.11.0 - Give your page some headroom. Hide your header until you need it
 * Copyright (c) 2020 Nick Williams - http://wicky.nillia.ms/headroom.js
 * License: MIT
 */

!function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):(t=t||self).Headroom=n()}(this,function(){"use strict";function t(){return"undefined"!=typeof window}function d(t){return function(t){return t&&t.document&&function(t){return 9===t.nodeType}(t.document)}(t)?function(t){var n=t.document,o=n.body,s=n.documentElement;return{scrollHeight:function(){return Math.max(o.scrollHeight,s.scrollHeight,o.offsetHeight,s.offsetHeight,o.clientHeight,s.clientHeight)},height:function(){return t.innerHeight||s.clientHeight||o.clientHeight},scrollY:function(){return void 0!==t.pageYOffset?t.pageYOffset:(s||o.parentNode||o).scrollTop}}}(t):function(t){return{scrollHeight:function(){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},height:function(){return Math.max(t.offsetHeight,t.clientHeight)},scrollY:function(){return t.scrollTop}}}(t)}function n(t,s,e){var n,o=function(){var n=!1;try{var t={get passive(){n=!0}};window.addEventListener("test",t,t),window.removeEventListener("test",t,t)}catch(t){n=!1}return n}(),i=!1,r=d(t),l=r.scrollY(),a={};function c(){var t=Math.round(r.scrollY()),n=r.height(),o=r.scrollHeight();a.scrollY=t,a.lastScrollY=l,a.direction=l<t?"down":"up",a.distance=Math.abs(t-l),a.isOutOfBounds=t<0||o<t+n,a.top=t<=s.offset,a.bottom=o<=t+n,a.toleranceExceeded=a.distance>s.tolerance[a.direction],e(a),l=t,i=!1}function h(){i||(i=!0,n=requestAnimationFrame(c))}var u=!!o&&{passive:!0,capture:!1};return t.addEventListener("scroll",h,u),c(),{destroy:function(){cancelAnimationFrame(n),t.removeEventListener("scroll",h,u)}}}function o(t,n){n=n||{},Object.assign(this,o.options,n),this.classes=Object.assign({},o.options.classes,n.classes),this.elem=t,this.tolerance=function(t){return t===Object(t)?t:{down:t,up:t}}(this.tolerance),this.initialised=!1,this.frozen=!1}return o.prototype={constructor:o,init:function(){return o.cutsTheMustard&&!this.initialised&&(this.addClass("initial"),this.initialised=!0,setTimeout(function(t){t.scrollTracker=n(t.scroller,{offset:t.offset,tolerance:t.tolerance},t.update.bind(t))},100,this)),this},destroy:function(){this.initialised=!1,Object.keys(this.classes).forEach(this.removeClass,this),this.scrollTracker.destroy()},unpin:function(){!this.hasClass("pinned")&&this.hasClass("unpinned")||(this.addClass("unpinned"),this.removeClass("pinned"),this.onUnpin&&this.onUnpin.call(this))},pin:function(){this.hasClass("unpinned")&&(this.addClass("pinned"),this.removeClass("unpinned"),this.onPin&&this.onPin.call(this))},freeze:function(){this.frozen=!0,this.addClass("frozen")},unfreeze:function(){this.frozen=!1,this.removeClass("frozen")},top:function(){this.hasClass("top")||(this.addClass("top"),this.removeClass("notTop"),this.onTop&&this.onTop.call(this))},notTop:function(){this.hasClass("notTop")||(this.addClass("notTop"),this.removeClass("top"),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){this.hasClass("bottom")||(this.addClass("bottom"),this.removeClass("notBottom"),this.onBottom&&this.onBottom.call(this))},notBottom:function(){this.hasClass("notBottom")||(this.addClass("notBottom"),this.removeClass("bottom"),this.onNotBottom&&this.onNotBottom.call(this))},shouldUnpin:function(t){return"down"===t.direction&&!t.top&&t.toleranceExceeded},shouldPin:function(t){return"up"===t.direction&&t.toleranceExceeded||t.top},addClass:function(t){this.elem.classList.add.apply(this.elem.classList,this.classes[t].split(" "))},removeClass:function(t){this.elem.classList.remove.apply(this.elem.classList,this.classes[t].split(" "))},hasClass:function(t){return this.classes[t].split(" ").every(function(t){return this.classList.contains(t)},this.elem)},update:function(t){t.isOutOfBounds||!0!==this.frozen&&(t.top?this.top():this.notTop(),t.bottom?this.bottom():this.notBottom(),this.shouldUnpin(t)?this.unpin():this.shouldPin(t)&&this.pin())}},o.options={tolerance:{up:0,down:0},offset:0,scroller:t()?window:null,classes:{frozen:"headroom--frozen",pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom",initial:"headroom"}},o.cutsTheMustard=!!(t()&&function(){}.bind&&"classList"in document.documentElement&&Object.assign&&Object.keys&&requestAnimationFrame),o});

// grab an element
var myElement = document.querySelector("nav");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();