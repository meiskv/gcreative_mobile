<?php
/*
Template Name: About Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper">

                    <div class="about">
                        <h1>We are</h1>
                        <h2>Connected</h2>
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <?php the_content(); ?>
                            
                        <?php endwhile; endif; ?>		


                    </div>

                    <div class="about-img" style="padding: 0 !important;">
                            <?php get_template_part( 'parts/svg', 'exactmap' ); ?>
                    </div>

                    <div class="about-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-reputation-icon.svg" height="95" width="95" alt="">
                            <h1>We build</h1>
                            <h4>BRANDS</h4>
                            <p>
                            We are a part of Grayling, a wholly owned subsidiary of Huntsworth PLC – a public relations focused group listed on the London Stock Exchange. We provide truly integrated strategic services combined with worldwide reach. We match this with local expertise and knowledge supported by diverse sector experience.	
                            </p>
                    </div>

                    <div class="about-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-map.svg" style="height:95%;" width="100%" alt="">
                    </div>            
            </div>
				
            
            <div class="footer">
                <span><?php dynamic_sidebar('footer'); ?></span>
            </div>



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
