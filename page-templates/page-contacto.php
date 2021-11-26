<?php
/**
 * Template Name: contacto
 *
 */
?>

<?php get_header() ?>


<header class="contacto">
    
    

</header>


<div class="enque special">
    
    <h2 class="title">¡Contáctanos!</h2>

    <p>@boheaoils</p>

    <p>www.bohea.com.mx</p>

    <p>boheacompany@gmail.com</p>

    <div class="links flex-normal">
        
        <a href="https://www.instagram.com/boheaoils/">
            
            <div class="contact-img">
                

                                        
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

        </a>

        <a href="https://www.facebook.com/boheaoilsmx">
            
            <div class="contact-img">
                

                
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                
                <path class="st0" d="M300,150C300,67.2,232.8,0,150,0C67.2,0,0,67.2,0,150c0,82.8,67.2,150,150,150c0.4,0,0.9,0,1.3,0V195.3h-36.1
                    v-41.8h36.1v-30.8c0-35.8,21.9-55.3,53.8-55.3c15.3,0,28.4,1.1,32.3,1.6v37.4l-22.1,0c-17.4,0-20.7,8.3-20.7,20.4v26.7h41.4
                    l-5.4,41.8h-36v98C255.6,274.3,300,217.4,300,150z"/>
                <path class="st3" d="M230.5,195.3l5.4-41.8h-41.4v-26.7c0-12.1,3.4-20.4,20.7-20.4l22.1,0V69c-3.8-0.5-17-1.6-32.3-1.6
                    c-31.9,0-53.8,19.5-53.8,55.3v30.8h-36.1v41.8h36.1V300c15-0.1,29.5-2.4,43.2-6.7v-98H230.5z"/>
                </svg>

            </div>

        </a>

        <?php  

            // Fix Api Whatsapp on Desktops
            // Dev: Jean Livino
            // insert the text and message
            // '5212223410458'   
            //$phone1 = get_field('w1', 'option');
            $phone1 = '+5212223585909';
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

        <a href="<?php echo $urlp1; ?>">
            
            <div class="contact-img">
                

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
                <g>
                    <g>
                        <path class="st0" d="M150,300c-26.3,0-52-6.9-74.8-20.1L16.7,300l12-61.9C9.9,212.3,0,182,0,150C0,67.3,67.3,0,150,0
                            c82.7,0,150,67.3,150,150C300,232.7,232.7,300,150,300z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="st10" d="M150,59.3c-50.1,0-90.7,40.6-90.7,90.7c0,21.1,7.2,40.4,19.3,55.8L72.5,237l29.5-10.2
                            c13.9,8.7,30.4,13.9,48,13.9c50.1,0,90.7-40.6,90.7-90.7C240.7,99.9,200.1,59.3,150,59.3z"/>
                        <path class="st3" d="M150,248c-17.1,0-34-4.5-48.9-13.2L62.9,248l7.8-40.4C58.5,190.7,52,170.9,52,150c0-54,44-98,98-98
                            c54,0,98,44,98,98C248,204,204,248,150,248z M102.9,218.8l3,1.8c13.3,8.3,28.6,12.8,44.2,12.8c46,0,83.4-37.4,83.4-83.4
                            c0-46-37.4-83.4-83.4-83.4c-46,0-83.4,37.4-83.4,83.4c0,18.7,6.1,36.4,17.7,51.3l2,2.6L82.1,226L102.9,218.8z"/>
                    </g>
                    <path class="st3" d="M100.5,112.3c0,0,5.8-10,10.4-10.6c4.7-0.6,10.7-0.6,12.3,2.5c1.6,3.1,8.9,20.9,8.9,20.9s1.2,3.1-0.7,6
                        c-1.9,3-6.2,7.3-6.2,7.3s-2.4,3.1,0,6.3c2.4,3.3,6.1,9.2,13.8,16.9c7.7,7.7,22.4,13.2,22.4,13.2s2.1,0.3,3.5-1.1
                        c1.3-1.3,8.6-10.4,8.6-10.4s2.3-3,6.2-1.2c3.9,1.8,20.7,10.1,20.7,10.1s2,0.7,2,3.7c0,3-1.2,10.2-3.7,12.7c-2.5,2.5-9.6,10-20.4,10
                        c-10.8,0-36.5-8.8-50.2-22.5c-13.7-13.7-25.8-27.6-28.7-40.2C96.6,123.3,97,117.6,100.5,112.3z"/>
                </g>
                </svg>


            </div>

        </a>

    </div>

    <div class="btn-container flex-normal">
        
        <a href="<?php echo get_site_url() ?>/tienda">
            <div class="m-btn m-btn--main">Visita nuestra tienda</div>
        </a>

        <div class="img"></div>

    </div>

</div>

<div class="tambi">
    
    <h4 class="title">También puedes encontrarnos en...</h4>

    <div id="container-slide">

        <div class="mobile-indicator" id="mobile-indicator-proceso2"></div>

        <div class="flexslider" id="contact-slider">

            <div class="overlay"></div>



            <div class="slides">

                <div class="slide"><!--more-->
                    
                    <div class="content">
                        
                        <div class="content-main wc flex-normal" >

                            <div class="img flex-normal" id="bg1" style="background: transparent url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/san.png) no-repeat center; background-size: 50%;">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="slide"><!--more-->
                    
                    <div class="content">
                        
                        <div class="content-main flex-normal" >

                            <div class="img flex-normal" id="bg1" style="background: transparent url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/logol.png) no-repeat center; background-size: 80%;">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="slide"><!--more-->
                    
                    <div class="content">
                        
                        <div class="content-main flex-normal" >

                            <div class="img flex-normal" id="bg1" style="background: transparent url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/sears.png) no-repeat center; background-size: 80%;">

                            </div>

                        </div>

                    </div>

                </div>

            </div>
                 
        </div>  

    </div>

</div>

<?php get_footer() ?>