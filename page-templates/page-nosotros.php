<?php
/**
 * Template Name: nostros
 *
 */
?>

<?php get_header() ?>


<header>
    
    <video class="vidd2" src="<?php echo get_field('video_principal') ?>" autoplay muted loop></video>

</header>


 <?php $first_section = get_field('en_que_creemos'); ?>

 <?php if($first_section){ ?>

    <div class="enque">
        
        <h2 class="title"><?php echo $first_section['titulo']; ?></h2>

        <p><?php echo $first_section['texto']; ?></p>

    </div>

<?php } ?>


 <?php $second_section = get_field('historia'); ?>

 <?php if($second_section){ ?>

    <div class="his">
        
        <div class="columns columns--double flex-normal">
            
            <div class="item">
                
                <h2 class="title"><?php echo $second_section['titulo']; ?></h2>

                <p><?php echo $second_section['texto']; ?></p>

            </div>

            <div class="item">
                
                <div class="img"></div>

            </div>

        </div>

    </div>

<?php } ?>

 <?php $third_section = get_field('inspira'); ?>

 <?php if($third_section){ ?>

<div class="enque insp">
    
    <h2 class="title"><?php echo $third_section['titulo']; ?></h2>

    <p><?php echo $third_section['texto']; ?></p>

</div>

<?php } ?>


<div class="porque">
    
    <h6 class="title">¿Por qué bohea?</h6>

    <div class="columns columns--triple flex-normal">
        
     <?php if( have_rows('por_que') ): ?>
        
         <?php while( have_rows('por_que') ): the_row(); 

            ?>
                <div class="item">
                    
                    <div class="img" style="background: transparent url(<?php the_sub_field('imagen'); ?>) no-repeat center; background-size: cover;"></div>

                    <h3><?php the_sub_field('titulo'); ?></h3>

                </div>

        <?php endwhile; ?>
          
    <?php endif; ?>

    </div>

</div>

<?php get_footer() ?>