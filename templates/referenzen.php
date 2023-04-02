<!-- 
    Template Name: Referenzen
 -->

<?php get_header(); ?>

<div class="welc__pages" id="sectionhome">
    <!-- <img src="<?php echo the_post_thumbnail_url();?>" alt=""> -->
    <div class="bgr"></div>
    <div class="welc__content">
        <h1>Referenzen</h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Startseite</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Referenzen</span>
        </div>
    </div>
</div>



<div class="onlyrefpage">
<div class="projects__section">
    <div class="container-fluid">
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
                    <li class="nav-item ">
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
                        'posts_per_page' => '-1',
                        'order' => 'ASC',
                        'categorytwo' => $term->slug,
                        'orderby' => 'rand'
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 klas scale-hover" data-aos="zoom-in">
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
</div>


<?php get_footer();?>