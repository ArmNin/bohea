<?php
/**
 * Template Name: store test
 *
 *
 */
?>

<?php get_header('landing2') ?>

    <?php echo do_shortcode('[woocommerce_product_filter placeholder="¿Que producto estás buscando?"]') ?>

     <?php echo do_shortcode('[woocommerce_product_filter_category ]') ?>

      <?php echo do_shortcode('[woocommerce_product_filter_price]') ?>

     <?php echo do_shortcode('[woocommerce_product_filter_attribute]') ?>

     <?php echo do_shortcode('[woocommerce_product_filter_sale]') ?>

     <?php echo do_shortcode('[woocommerce_product_filter_reset submit_button_label="Quitar filtro" heading="Reestablecer filtros"]') ?>


     <?php echo do_shortcode('[woocommerce_product_filter_products ]') ?>

<?php get_footer('landing') ?>