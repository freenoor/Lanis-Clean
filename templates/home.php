<!-- 
    Template Name: Home
 -->

<?php get_header(); ?>

<section class="homestart">
    <div class="slidersection" id="sectionhome">
        <div class="swiper-container1 swiper-container">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'slider',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">	
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                    <div class="slider__content">
                        <div class="container">
                            <h1><?php the_title();?></h1>
                            <h2><?php the_content();?></h2>
                            <!-- <h3><?php the_excerpt();?></h3> -->
                            <div class="button_welcomesection">
                                <a href="/contact">Nach Angeboten suchen</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="psvg">
    </div>
</section>


<div class="home2">
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


<div class="home3">
    <div class="home3__inside">
        <div class="intro">
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
                'operator'=> 'IN'
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


<div class="projects__section">
    <div class="container">
        <div class="col-12 projects__titletab">
                <h3><?php the_field('projects_title');?></h3>
            </div>
        <div class="col-lg-12 col-md-12 col-sm-12 tabbb">
            <nav>
                <ul class="nav nav-tabs1" id="nav-tab" role="tablist">
                <?php 
                $args = array(
                    'orderby' => 'ID',
                    'order' => 'DESC' 
                );
                $terms = get_terms('categorytwo', $args ); 
                $count = 0;
                foreach($terms as $term){ 
                    ?>
                    <li class="nav-item"  data-aos="flip-up">
                        <a class="nav-link <?php echo $count == 0 ? 'active' : ''?>" data-toggle="tab" href='#<?php echo $term->slug;?>' id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                           
                        <?php 
                        echo $term->name;
                        ?>

                        </a>
                    </li>
                <?php
                $count++; }  
                ?>
                </ul>
            </nav>
        </div>
 
    <div class="row">
        <div class="col-12 "> 
            <div class="tab-content">
                <?php $termstwo = get_terms('categorytwo', $args ); 
                $count = 0;
                foreach($termstwo as $term): 
                ?>
                <div class="tab-pane fade <?php echo $count == 0 ? 'active show' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                    <div class="all">
                    <div class="row">
                    <?php
                        $args = array(
                        'post_type' => 'projects',
                        'posts_per_page' => '6',
                        'order' => 'ASC',
                        'categorytwo' => $term->slug,
                        'orderby' => 'rand'
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 klas scale-hover"  data-aos="zoom-in-up">
                            <div class="under"> 
                                <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <i class="fas fa-link"></i>
                                </a> 
                                
                                <img src="<?php the_post_thumbnail_url();?>" alt=""><div class="layer"></div>

                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>      

                <?php 
                $count++;
                endforeach;
                ?>
            </div>
            </div>
            </div>
    </div>
</div>


<div class="latestexample__section">
    <div class="container">
        <div class="latestexample__content">

            <div class="left" data-aos="fade-down">
                <h1><?php the_field('latest1');?></h1>
                <h2><?php the_field('latest2');?></h2>
            </div> 

            <div class="right" data-aos="fade-up">
                <div class='img background-img' style="background-image:url('<?php the_field('before');?>')"></div>
                <div class='img foreground-img' style="background-image:url('<?php the_field('after');?>')"></div>
                <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
                <div class='slider-button'>
                <i class="fas fa-caret-left"></i>
                <i class="fas fa-caret-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="home6">
    <div class="container">
        <div class="row">
            <div class="col-12 titttle">
                <h3><?php the_field('home6_title');?></h3>
            </div>
            <div class="col-lg-6 contact_detail" data-aos="fade-up" data-aos-duration="2000">

            <?php dynamic_sidebar('allcontact');?>
                <h4>Lani's Clean GmbH</h4>
            </div>
            <div class="col-lg-6 contact_form" data-aos="fade-up" data-aos-duration="2000">
                <?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]');?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>