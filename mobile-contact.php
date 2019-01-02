<?php
/*
Template Name: Contact Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper">

                    <div class="about">
                        <div class="content__holder contact__holder">
                            <div class="content__header">Say <span class="hello-translate">Hello</span>.</div>
                            <div class="content__subheader contact__subheader">LET’S CONNECT</div>
                            <br/>
                            <?php dynamic_sidebar('contactform'); ?>
                        </div>
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <?php the_content(); ?>
                            
                        <?php endwhile; endif; ?>		


                    </div>

              
                
            
            </div>
				
            
            <div class="footer">
                <span><?php dynamic_sidebar('footer'); ?></span>
            </div>



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


