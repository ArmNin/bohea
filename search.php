<?php get_header(); ?>

<div class="search-results-page">
   <?php 
   $s = get_search_query();
   $args = array('s' => $s);
   $the_query = new WP_Query( $args );
   if ( $the_query->have_posts() ) :
   ?>
   <p class="search-results-page__title">Resultados de b&uacute;squeda para <span><?php echo get_query_var('s'); ?></span>.</p>
   <div class="search-results-articles">
      <?php   
      while ( $the_query->have_posts() ) :
         $the_query->the_post();
         $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
         $attachment_url = wp_get_attachment_url( $post_thumbnail_id);
         $article_args = array(
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'img_url' => $attachment_url,
            'permalink' => get_permalink(),
         );
         get_template_part('/template-parts/content', 'article-card', $article_args);
      endwhile;
      wp_reset_postdata();
      ?>
   </div>
   <?php else : ?>
   <h2 class="search-results-not-found">No se encontraron elementos para mostarte de acuerdo a tu criterio. Intenta con una nueva b&uacute;squeda.</h2>
   <div class="search-results-search-btn">
         <?php get_search_form(); ?>
   </div>
   <?php endif; ?>
</div>

<?php get_footer(); ?>