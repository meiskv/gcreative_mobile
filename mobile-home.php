<?php
/*
Template Name: Home Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper">

                    <div class="intro">
                        <h1>We are</h1>
                        <h2>Bold</h2>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <?php the_content(); ?>
                            
                        <?php endwhile; endif; ?>          
                    </div>

                    <div class="cases">
                    <?php       
                        $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $posts_per_page = 5;
                        $args = array(
                            'post_type'         => 'case-study',
                            'posts_per_page'    => $posts_per_page,
                            'paged'             => $paged,
                            'order'             => 'ASC',
                        );
                        $custom_query = new WP_Query( $args ); 
                        $number = 0;
                    ?>

                    <?php if ( $custom_query->have_posts() ) : ?>
                    <?php while ( $custom_query->have_posts() ): $custom_query->the_post(); global $post; $post_meta = get_post_meta($post->ID); ?>
                    <?php
                        $image = get_field('client_logo');
                        $size = 'large';
                        $number++;
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                    ?>
										

												
                <div class="cases">
                        <img src="<?php echo get_field('home_slide_cover')['url']; ?>" alt="">
                            <div class="case-meta">
                                    <div class="case-title"><h1><?php echo the_title(); ?></h1></div>
                                    <div class="case-subtitle">
                                        <h4><?php echo get_field('subtitle'); ?></h4>
                                    </div>
                                    <div class="case-description">
                                        <p><?php echo the_field('description_excerpt'); ?></p>
                                    </div>
                                    <div class="case-btn">
                                        <a href="<?php echo get_permalink(); ?>">READ MORE</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            
            </div>
				
            <!-- <div class="instagram_feed">
                <span><?php dynamic_sidebar('instagram'); ?></span>
            </div> -->
            
            <div class="footer">
                <span><?php dynamic_sidebar('footer'); ?></span>
            </div>


			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
