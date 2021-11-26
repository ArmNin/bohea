<?php
/**
 * Template Name: store
 *
 *
 */
?>

<?php get_header('') ?>

    <header class="store">
        <div class="bg">
            <img class="img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-main.webp" alt="">
        </div>
        
        <div class="columns columns--triple flex-normal">
            
            <!--
            <div class="item left">
                
                <div class="img"></div>

                <div class="plant plant--up"></div>

            </div>
            -->

            <div class="item middle">
                
                <div class="slider">

                    <h1 class="special"><span class="title">SHOP</span></h1>

                </div>

                

            </div>

            <div class="item right">
                
                <!--
                <h6>Arma tu kit</h6>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                -->

                <div class="plant plant--up-rotate">
                    <div class="img"></div>
                </div>

                <div class="btn-info flex-normal">
                    
                    <div class="m-btn m-btn--main">Armar Kit</div>

                    <div class="img special"></div>

                </div>

                

            </div>

        </div>

    </header>


<section class="store-info-container shop">
    
    <div class="columns columns--double flex-normal">
        
        <div class="item left" id="filter-container">

            <div class="close-filter-box close-icon">&times;</div>

            <h4>Filtro</h4>

            <div class="close-filters flex-normal">

                <p>Cambios realizados</p>

                <div class="m-btn m-btn--border close-filter-box">Ver productos</div>

           </div>
            
            <div class="box">
                <?php echo do_shortcode('[woocommerce_product_filter  placeholder="¿Que producto estás buscando?"]') ?>
           </div>
           <div class="box">
            <?php echo do_shortcode('[woocommerce_product_filter_category heading="Filtro de productos" exclude="15, 53"]'); //44 kits ?>
           </div>
          
           <!--
           <div class="box">
            <?php //echo do_shortcode('[woocommerce_product_filter_price]') ?>
           </div>
            -->
           <div class="box">
            <?php echo do_shortcode('[woocommerce_product_filter_attribute]') ?>
           </div>
           <div class="box">
            <?php echo do_shortcode('[woocommerce_product_filter_sale]') ?>
           </div>
           <?php echo do_shortcode('[woocommerce_product_filter_reset submit_button_label="Quitar filtro" heading="Reestablecer filtros"]') ?>

           

        </div>

        <div class="item right">

            <div class="main-open-filter flex-normal">

                <p>Filtrar productos</p>

                <div class="m-btn m-btn--border m-btn--icon show-filter flex-normal">
                    
                    <div class="txt">Abrir flitros</div>    

                    <div class="icon">
                        
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 321.9 321.9" style="enable-background:new 0 0 321.9 321.9;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M128.25,175.6c1.7,1.8,2.7,4.1,2.7,6.6v139.7l60-51.3v-88.4c0-2.5,1-4.8,2.7-6.6L295.15,65H26.75L128.25,175.6z"/>
                                        <rect x="13.95" y="0" width="294" height="45"/>
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </div>

                </div>

           </div>

           <!--<div class="products">-->
            
            <?php echo do_shortcode('[woocommerce_product_filter_products]') ?>

           <!--</div>-->

           <div id="pagination-extra" class="flex-normal">
               


           </div>

        </div>

    </div>

</section>


<?php get_footer() ?>