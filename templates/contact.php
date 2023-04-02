<!-- 
    Template Name: Contact
 -->

<?php get_header(); ?>
<div class="welc__pages" id="sectionhome">
    <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
    <div class="bgr"></div>
    <div class="welc__content">
        <h1>Kontaktiere uns</h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Startseite</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Kontaktiere uns</span>
        </div>
    </div>
</div>


<div class="contact1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 contact_details" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h4><?php the_field('contact1_title');?></h4>
                <?php the_field('contact_desc');?>

                <div class="row">
                        <div class="col-lg-12 cities"  >
                        <?php dynamic_sidebar('allcontact');?>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-12" id="contact4">
                        <h3>Social Media:</h3>
                        <?php dynamic_sidebar('footer4');?>
                        </div>
                </div>
            </div>
            <div class="col-lg-7 contact_form" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="forma">
                    <h3><?php the_field('contactform1_title');?></h3>
                    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form 2 / Contact PG"]');?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact2">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
            'post_type' => 'help',
            'order'=>'ASC',
            'posts_per_page' => '3',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
            $loop->the_post();
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 help_posts" data-aos="zoom-in">
                <div class="help_post">
                    <h4><?php the_title();?></h4>
                    <a href="tel:+41765886803">Direktwahl</a>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php get_footer();?>