<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php
            echo get_bloginfo('name');// this is the name of your website.
            // use your code to display title in all other pages.
    ?>
</title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

        <div id="page-wrapper">

            <?php //if( !is_singular('vacantes') ){ ?>

                <?php  

                    // Fix Api Whatsapp on Desktops
                    // Dev: Jean Livino
                    // insert the text and message
                    // '5212223410458'   
                    //$phone1 = get_field('w1', 'option');
                    $phone1 = '+5212225900390';
                    //$phone2 = get_field('w2', 'option');
                    //$message = get_field('t1', 'option');
                    $message = "";
                    $map_url = 'https://goo.gl/maps/NYbvshVEekWBTczb7';
                    //$face = get_field('face', 'option');
                    //$insta = get_field('insta', 'option');
                    // DO NOT EDIT BELOW
                    $message = urlencode($message);
                    $message = str_replace('+','%20',$message);
                    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
                    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
                    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
                    $url = "";
                    // check if is a mobile
                    if ($iphone || $android || $palmpre || $ipod || $berry == true)
                    {
                      $urlp1 = "https://api.whatsapp.com/send?phone=".$phone1."&text=".$message;;
                      //$urlp2 = "https://api.whatsapp.com/send?phone=".$phone2;
                      //."&text=".$message;
                    }
                    // all others
                    else {
                       $urlp1 = "https://web.whatsapp.com/send?phone=".$phone1."&text=".$message;;
                       //$urlp2 = "https://web.whatsapp.com/send?phone=".$phone2;
                       //."&text=".$message;
                    }

                ?>

                <div class="contact-fixed">

                    <div class="has-svg">
                        <a href="<?php echo $urlp1; ?>" class="WA-contact-btn flex-normal"target="_blank">
                            <div class="GA-send-contact-intent" data-action="Wa contact intent" data-category="Contact intent" data-label="Contact intent from fixed option">
                            </div>

                            <svg version="1.1" id="w-contact-intent-sub-menu"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="90px" height="90px" viewBox="-1 0 512 512" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                            <path d="m10.894531 512c-2.875 0-5.671875-1.136719-7.746093-3.234375-2.734376-2.765625-3.789063-6.78125-2.761719-10.535156l33.285156-121.546875c-20.722656-37.472656-31.648437-79.863282-31.632813-122.894532.058594-139.941406 113.941407-253.789062 253.871094-253.789062 67.871094.0273438 131.644532 26.464844 179.578125 74.433594 47.925781 47.972656 74.308594 111.742187 74.289063 179.558594-.0625 139.945312-113.945313 253.800781-253.867188 253.800781 0 0-.105468 0-.109375 0-40.871093-.015625-81.390625-9.976563-117.46875-28.84375l-124.675781 32.695312c-.914062.238281-1.84375.355469-2.761719.355469zm0 0" fill="#e5e5e5"/><path d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0" fill="#fff"/><path d="m19.34375 492.625 33.277344-121.519531c-20.53125-35.5625-31.324219-75.910157-31.3125-117.234375.050781-129.296875 105.273437-234.488282 234.558594-234.488282 62.75.027344 121.644531 24.449219 165.921874 68.773438 44.289063 44.324219 68.664063 103.242188 68.640626 165.898438-.054688 129.300781-105.28125 234.503906-234.550782 234.503906-.011718 0 .003906 0 0 0h-.105468c-39.253907-.015625-77.828126-9.867188-112.085938-28.539063zm0 0" fill="#64b161"/><g fill="#fff"><path d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"/><path d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0" fill-rule="evenodd"/></g></svg>

                            <!--<div class="txt">USA</div>-->

                        </a>
                    </div>

                    <div class="has-svg">
                        <a href="https://www.instagram.com/boheaoils/" class="WA-contact-btn flex-normal"target="_blank">


                            <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><rect height="24" id="Artboard10" style="fill:none;" width="24" x="0" y="0"/><path d="M22,7c0,-2.761 -2.239,-5 -5,-5c-3.054,0 -6.946,0 -10,0c-2.761,0 -5,2.239 -5,5c0,3.054 0,6.946 0,10c0,2.761 2.239,5 5,5c3.054,0 6.946,0 10,0c2.761,0 5,-2.239 5,-5c0,-3.054 0,-6.946 0,-10Z" style="fill:url(#_Radial1);"/><path d="M14.958,5.005c2.091,0.02 4.016,1.815 4.037,4.037c0.007,1.972 0.007,3.944 0,5.916c-0.02,2.083 -1.815,4.016 -4.037,4.037c-1.972,0.007 -3.944,0.007 -5.916,0c-2.092,-0.02 -4.016,-1.815 -4.037,-4.037c-0.007,-1.972 -0.007,-3.944 0,-5.916c0.019,-2.093 1.81,-4.016 4.037,-4.037c1.972,-0.007 3.944,-0.007 5.916,0Zm-5.889,0.945c-1.623,0.005 -3.103,1.412 -3.119,3.098c-0.006,1.968 -0.006,3.936 0,5.904c0.015,1.605 1.388,3.082 3.098,3.098c1.968,0.006 3.936,0.006 5.904,0c1.609,-0.015 3.082,-1.388 3.098,-3.098c0.006,-1.968 0.006,-3.936 0,-5.904c-0.015,-1.616 -1.415,-3.082 -3.098,-3.098c-1.961,-0.006 -3.922,0 -5.883,0Z" style="fill:#fff;fill-rule:nonzero;"/><path d="M12.024,8.5c1.618,0.015 3.126,1.263 3.422,2.862c0.211,1.14 -0.187,2.376 -1.027,3.178c-0.935,0.89 -2.382,1.208 -3.622,0.754c-1.386,-0.507 -2.361,-1.968 -2.296,-3.448c0.079,-1.768 1.641,-3.34 3.499,-3.346c0.008,0 0.016,0 0.024,0Zm-0.04,0.947c-1.155,0.011 -2.244,0.887 -2.484,2.025c-0.243,1.151 0.419,2.428 1.506,2.887c1.187,0.502 2.72,-0.061 3.293,-1.233c0.593,-1.211 0.034,-2.856 -1.218,-3.441c-0.341,-0.159 -0.72,-0.239 -1.097,-0.238Z" style="fill:#fff;fill-rule:nonzero;"/><path d="M16.5,8.227c0,-0.193 -0.077,-0.378 -0.213,-0.514c-0.136,-0.136 -0.321,-0.213 -0.514,-0.213c-0.015,0 -0.031,0 -0.046,0c-0.193,0 -0.378,0.077 -0.514,0.213c-0.136,0.136 -0.213,0.321 -0.213,0.514c0,0.008 0,0.015 0,0.023c0,0.199 0.079,0.39 0.22,0.53c0.14,0.141 0.331,0.22 0.53,0.22c0,0 0,0 0,0c0.414,0 0.75,-0.336 0.75,-0.75c0,-0.008 0,-0.015 0,-0.023Z" style="fill:#fff;"/><defs><radialGradient cx="0" cy="0" gradientTransform="matrix(27.933,0,0,27.933,2,21.5)" gradientUnits="userSpaceOnUse" id="_Radial1" r="1"><stop offset="0" style="stop-color:#ff8100;stop-opacity:1"/><stop offset="0.19" style="stop-color:#ff7209;stop-opacity:1"/><stop offset="0.32" style="stop-color:#f55e16;stop-opacity:1"/><stop offset="0.48" style="stop-color:#d92938;stop-opacity:1"/><stop offset="1" style="stop-color:#9100ff;stop-opacity:1"/></radialGradient></defs></svg>

                        </a>
                    </div>

                </div>

            <?php //} ?>

            <div class="overlay-single">
                <div class=""></div>
            </div>

            <div class="overlay-content flex-normal" id="projects">
                
                <div class="content">

                    <div class="closex">&times;</div>

                    <div class="container-proceso-slider">

                        <div class="main">
                        
                            <div class="steps flex-normal" ><span><!--paso1--> selecciona tus productos<strong> </strong></span> <span id="first">ir a paso 2</span></div>

                            <div class="steps flex-normal" id="next"><!--<span>paso2 <strong>- --> selecciona un mensaje(opcional) </strong></span> <span>ir al carrito</span></div>

                        </div>

                        <div class="products-wrapper-shortcode" id="hidenshow">
                            
                            <?php //echo do_shortcode('[products limit="8" columns="4" orderby="popularity" class="arma-tu-kit"]'); ?>

                        </div>

                    </div>

                </div>

            </div>

            

           

            

            
	
		
		