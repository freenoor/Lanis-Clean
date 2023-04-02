<!-- 
    Template Name: About Us
 -->

<?php get_header(); ?>

<div class="welc__pages" id="sectionhome">
    <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
    <div class="bgr"></div>
    <div class="welc__content">
        <h1>Über uns</h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Startseite</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Über uns</span>
        </div>
    </div>
</div>

<div class="about1">
    <div class="container">
        <div class="row">
            <div class="titulli col-12">
                <h3><?php the_field('about_title');?></h3>
            </div>

            <div class="whyus__content">
            <div class="left" data-aos="fade-down">
                <div class="forback" style="background-image: url('<?php the_field('about1_img');?>');"></div>
            </div>

            <div class="right" data-aos="fade-up">
                <h1><?php the_field('about1_title');?></h1>
                <h2><?php the_field('about1_desc');?></h2>
                <div class="button_welcomesection extrastyle">
                <a href="/contact">Kontaktiere uns</a>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>


<div class="about2">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
            'post_type' => 'progress',
            'order'=>'ASC',
            'posts_per_page' => '4',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
            $loop->the_post();
            ?>
            <div class="col-lg-3 col-md-6 col-12 progresses" data-aos="flip-up">
                <div class="secprog">
                    <div class="progress mx-auto" data-value='<?php the_field('value');?>'>
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="h2 font-weight-bold"><?php the_field('value');?><sup class="small">%</sup></div>
                        </div>
                    </div>
                    <h3><?php the_title();?></h3>
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


<div class="about22">
    <div class="container">

            <div class="centercontent__about2 col-lg-12" data-aos="fade-up">
                <h1><?php the_field('aboutcompany');?></h1>
            </div>
            
    </div>
</div>


<div class="services1_about" style="background-image:url('<?php the_field('image_aboutuss');?>')"><div class="jstlayer"></div>
    <div class="container ff">
            <div class="services1_content" data-aos="fade-right" data-aos-offset="500" data-aos-duration="500">
                <?php dynamic_sidebar('phonecontactspacebtw');?>
            </div>
    </div>
</div>


<div class="team">
    <div class="container">
        <div class="row">
            <div class="titulli col-12">
                <h3><?php the_field('team_title');?></h3>
            </div>
            <?php
                $args = array(
                'post_type' => 'team',
                'order'=>'ASC',
                'posts_per_page' => '4',
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                $loop->the_post();
                ?>
                <div class="col-lg-3 col-md-6 team_post" data-aos="zoom-in-down">
                    <div class="teamm">
                        <div class="overlyy"></div>
                        <?php the_post_thumbnail();?>
                        <h4><?php the_title();?></h4>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>


<!-- <div class="testiomonials">
    <div class="container">
        <div class="row">
            <div class="col-12 titulli">
                <h3><?php the_field('testiomonials_title');?></h3>
            </div>
        </div>
        <div class="swiper-container0 swiper-container">
            <?php
                $args = array(
                    'post_type' => 'testiomonials',
                    'order'=>'ASC',
                    'posts_per_page' => '-1',
                );
               ?>
            <div class="swiper-wrapper">
                <?php
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                $loop->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="first_content" data-aos="zoom-in-down">
                        <?php the_post_thumbnail();?>
                        <p><?php the_content();?></p>
                        <h3><?php the_title();?></h3>
                        <div class="city"><?php if ( has_excerpt() ) { the_excerpt(); } else { echo ''; } ?></div>
                    </div>
                </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div> -->


<?php get_footer();?>