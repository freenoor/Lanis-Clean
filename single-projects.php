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
        <div class="breadcrumbs" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
            <a class="breadcrumbs_item home" href="/">Startseite</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current"><aa class="breadcrumbs_item home">Diensleistung</aa></span>
			<span class="breadcrumbs_delimiter"></span>
			<span class="breadcrumbs_item current"><?php the_title(); ?></span>
        </div>
    </div>
</div>




<div class="projects__extra">
	<div class="container">
		
        <img src="<?php the_post_thumbnail_url();?>" alt="" data-aos="fade-up">

		<div class="galeryy">
			<div class="thumbnails">
				<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css'>
				<ul id="lightgallery">
					<?php getGallery(); ?>                                 
				</ul>
			</div>
								
				<?php
					wp_reset_query();
					function getGallery(){
					$gallery = get_post_gallery($post, false);
					$gids = explode( ",", $gallery['ids'] );
					foreach( $gids as $id ) {
					?>    
					<li data-src="<?php echo wp_get_attachment_url( $id ); ?>" class="gallery-item img-fluid" data-aos="fade-up">
						<a href="" class="img-project">
							<div class="forhvr">
							<div class="thumbnail wow animate__animated" style="background-image:url(<?php echo wp_get_attachment_url( $id ); ?>)"> 
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<path d="M128,32V0H16C7.163,0,0,7.163,0,16v112h32V54.56L180.64,203.2l22.56-22.56L54.56,32H128z"/>
									<path d="M496,0H384v32h73.44L308.8,180.64l22.56,22.56L480,54.56V128h32V16C512,7.163,504.837,0,496,0z"/>
									<path d="M480,457.44L331.36,308.8l-22.56,22.56L457.44,480H384v32h112c8.837,0,16-7.163,16-16V384h-32V457.44z"/>
									<path d="M180.64,308.64L32,457.44V384H0v112c0,8.837,7.163,16,16,16h112v-32H54.56L203.2,331.36L180.64,308.64z"/>
								</svg>
							</div>
							</div>
							<img class="img-fluid thumbnail d-none" src="<?php echo wp_get_attachment_url( $id ); ?>">
							<div class="light-gallery-poster"></div>
						</a>
					</li>
					
					<?php
					}
					}
				?>
			
			

								
		</div>
		<div class="class lis">
        <li>
        <i class="far fa-calendar-alt icon-date"></i><?php echo get_the_date( get_option('date_format') ); ?>
        </li>
        <li>
		
		<?php if( get_the_excerpt() ): ?>
			<i class="fas fa-map-marker-alt"></i>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		
		</li>
		</div>
        <div class="contentt">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_field('contentpost');
			endwhile;
			else:
			endif; 
			?>
        </div>


	</div>
</div>






<div class="projects__section_single">
			<div class="container">
				<div class="title-intro">
					<h5>Sie können auch mögen</h5>
				</div>
                
				<div class="in-post">
					<?php
					$args = array(
					'post_type' => 'projects',
					'posts_per_page' => '3',
					'orderby' => 'rand'
					);
					$loop = new WP_Query($args);
					while($loop->have_posts()):
					$loop->the_post();
					?>
						<div class="col-lg-4 col-md-4 klas scale-hover" data-aos="fade-left">
                            <div class="under"> 
                                <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <i class="fas fa-link"></i>
                                </a> 
                                <img src="<?php the_post_thumbnail_url();?>" alt=""><div class="layer"></div>

                            </div>
                        </div>
					
					<?php
					endwhile;
					wp_reset_postdata();
					?>
                    
				</div>
			</div>
		</div>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js'></script>
                <script src='https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3'></script>
                    <script type="text/javascript">
                    jQuery(document).ready(function($)  {
                    $('#lightgallery').lightGallery({
                        pager: true
                    });
                    });
                    </script>


<?php get_footer(); ?>