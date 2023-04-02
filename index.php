<?php
    get_header();?>
  <div class="singlee">
    <div class="container">
        <div class="row">
            <?php
                 if ( have_posts() ):
                    while( have_posts() ):
                        the_post();?>
                       
                        <h2><?php the_title();?></h2>
                        <p><?php the_content();?></p>
                       
                        <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>
    <?php get_footer();
?>