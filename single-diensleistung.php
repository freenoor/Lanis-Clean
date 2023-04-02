<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package Puzzle
 */
get_header(); ?>


<div class="welc__pages single__proj" id="sectionhome">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/title_bg1.jpg"/>
    <div class="welc__content">
        <h1 data-aos="fade-up"
     data-aos-anchor-placement="center-bottom"><?php the_title(); ?></h1>         
    </div>
</div>


<div class="single_dienst_cont">
	<div class="container">
		<div class="single_dienst_cont_inside" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">

			<div class="abspos">
				<?php the_post();?>
				<?php the_content();?>
				<p><?php the_field('extracontent');?></p>
			</div>

			<div class="excpos">
				<?php if ( has_excerpt() ) { the_excerpt(); } else { echo ''; } ?>
				<img src="<?php the_post_thumbnail_url();?>" alt="">
			</div>
			
		</div>
	</div>
</div>



<div class="container">
<div class="sendusurplace" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
	<div class="outline">
		<h3>Senden Sie uns durch Fotos den Platz, den Sie für unsere Dienstleistungen benötigen</h3>
	</div>
	<div class="button_welcomesection">
	<a href="/contact">Vollständiges Formular</a>
	</div>

</div>
</div>



<div class="swiper-container22 swiper-container">
	<div class="swiper-wrapper ">
		<?php
		$args = array(
		'post_type' => 'services2',
		'posts_per_page' => '-1',
		);
		$loop = new WP_Query($args);
		while($loop->have_posts()):
		$loop->the_post();
		?>
		<div class="swiper-slide">	
		<div class="services_post" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
			<?php the_field('svg');?>
			<h4><?php the_title();?></h4>
			</div>
		</div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</div>




<?php get_footer(); ?>