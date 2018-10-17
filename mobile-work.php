<?php
/*
Template Name: Work Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper">

                    <div class="work">
                        <h1>We are</h1>
                        <h2>Our Work</h2>
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>		
                   
                
                    </div>

                    <?php
                                            
                        $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $posts_per_page = 10;
                        $args = array(
                            'post_type'         => 'case-study',
                            'posts_per_page'    => $posts_per_page,
                            'paged'             => $paged,
                            'order'             => 'ASC',
                        );
                        $custom_query_case = new WP_Query( $args ); 
                        $number = 0;
                        ?>

                        <?php if ( $custom_query_case->have_posts() ) : ?>
                        <?php while ( $custom_query_case->have_posts() ): $custom_query_case->the_post(); global $post; $post_meta = get_post_meta($post->ID); ?>
                        <?php
                            $image = get_field('client_logo');
                            $size = 'large';
                            $number++;
                            $width = $image['sizes'][ $size . '-width' ];
                            $height = $image['sizes'][ $size . '-height' ];
                        ?>

                        <div class="work-case-study">
                                    <div class="work-img" style="background: url(<?php echo get_field('work_cover')['url']; ?>) no-repeat center center;
                                            background-size: cover;
                                            -webkit-background-size: cover;
                                            -moz-background-size: cover; 
                                            -o-background-size: cover;">
                                        <!-- <img src="<?php echo get_field('home_slide_cover')['url']; ?>" alt=""> -->
                                    </div>

                                    <div class="work-meta">
                                            <h1><?php echo the_title(); ?></h1>
                                            <h4><?php the_field('short_deliverables');?></h4>
                                            <p><?php the_field('description_excerpt'); ?></p>
                                            <div class="work-btn">
                                                <a href="<?php echo get_permalink(); ?>">HOW WE DID IT</a>
                                            </div>
                                    </div>
                        </div>


                        <?php endwhile; ?>
                        <?php endif; ?>
            </div>
				
            
            



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
