<!-- 
    Template Name: Services
 -->
 
 <?php get_header(); ?>
 <div class="welc__pages" id="sectionhome">
    <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
    <div class="bgr"></div>
    <div class="welc__content">
        <h1>Dienstleistungen</h1>
        <div class="breadcrumbs"> 
            <a class="breadcrumbs_item home" href="/">Startseite</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Dienstleistungen</span>
        </div>
    </div>
</div>

<div class="home3">
    <div class="home3__inside">
            <div class="intro">
                <div class="row">
                    <?php 
                    $args = array(
                    'post_type'=> 'diensleistung',
                    'order'    => 'ASC',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                    array (
                    'taxonomy'  => 'category',
                    'field'  => 'slug',
                    'terms'  => array('reinigung','umzugsreinigung','entsorgungen'),
                    'operator'=> 'IN',
                    'orderby' => 'rand'
                    ),
                    ),
                    );    
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    ?>
                        <div class="col-lg-4 inside-col noHover">
                        <a href="<?php the_permalink(); ?>">
                            <div class="content-cat">
                            <h3 class="text_title"><?= the_title(); ?></h3>
                            <h5 class="text_title"><?= the_content(); ?></h3>
                            </div>
                        </a>
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div> 
                        
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
    </div>
</div>


<div class="after_dienst">
    <div class="container">
        <div class="row">
            <?php 
            $args = array(
            'post_type'=> 'diensleistung',
            'order'    => 'DESC',
            'posts_per_page' => -1,
            'tax_query' => array(
            array (
            'taxonomy'  => 'category',
            'field'  => 'slug',
            'terms'  => array('reinigung_cat','umzugsreinigung_cat','entsorgungen_cat'),
            'operator'=> 'IN',
            ),
            ),
            );    
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
                
                <div class="col-lg-4 col-md-6 col-sm-6 dienst_posts" data-aos="zoom-in-up">
                    <a href="<?php the_permalink(); ?>">
                <div class="dienst_post">
                        <div class="svgg"><?php the_excerpt();?></div>
                        <h2><?php the_title();?></h2>
                        <p><?php the_content();?></p>
                
                </div>
                </a>
                </div>

                <?php
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>



 <div class="home2_dienst">
    <div class="container">
        <div class="row">
            <div class="col-12 titttle">
                <h3><?php the_field('home2_title');?></h3>
            </div>
            <?php
                $args = array(
                    'post_type' => 'services2',
                    'order'=>'ASC',
                    'posts_per_page' => '6',
                );
               
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                    $loop->the_post();
                    ?>
            <div class="col-lg-4 col-md-6 col-sm-6 services_posts" data-aos="zoom-in-up">
                <div class="services_post">
                    <?php the_field('svg');?>
                    <h4><?php the_title();?></h4>
                    <p><?php the_content();?></p>
                </div>
            </div>
            <?php
        endwhile;
wp_reset_postdata();
?>
        </div>
    </div>
</div>

 <?php get_footer();?>