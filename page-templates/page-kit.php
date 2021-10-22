<?php
/**
 * Template Name: kit
 *
 *
 */
?>

<?php get_header() ?>

    <header class="kit-page">

        <div class="bg"></div>
        
        <div class="info">

                
            
               <h1>Arma tu kit</h1> 

               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/DSC0720.jpg" alt="">

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda optio itaque facere laudantium officia illo eos deleniti!</p>

               <div class="btns-container flex-normal">

                    <div class="m-btn m-btn--main sub" data-id="projects">Quiero armar mi Kit</div>

                    <div class="m-btn sub" data-id="how">¿Como funciona?</div>

               </div>

        </div>

    </header>

<!--

<section class="store-info-container shop">
    
    <div class="columns columns--double flex-normal">
        
        <div class="item left" id="filter-container">

            <div class="close-filter-box close-icon">&times;</div>

            <h4>Filtra los productos</h4>

            <div class="close-filters flex-normal">

                <p>Cambios realizados</p>

                <div class="m-btn m-btn--border close-filter-box">Ver productos</div>

           </div>
            
            <div class="box">
                <?php echo do_shortcode('[woocommerce_product_filter placeholder="¿Que producto estás buscando?"]') ?>
           </div>
           <div class="box">
            <?php echo do_shortcode('[woocommerce_product_filter_category]') ?>
           </div>
           <div class="box">
            <?php echo do_shortcode('[woocommerce_product_filter_price]') ?>
           </div>
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
            
           <?php echo do_shortcode('[woocommerce_product_filter_products]') ?>

        </div>

    </div>

</section>

-->


<?php get_footer() ?>