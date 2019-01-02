<?php
/*
Template Name: Services Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper">

                    <div class="services">
                        <h1>We are</h1>
                        <h2>Versatile</h2>
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <?php the_content(); ?>
                            
                        <?php endwhile; endif; ?>		

                    

                    <div class="services-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/strategy.svg" height="125" width="125" alt="">
                        <h4>Strategy</h4>
                        <p>An effective brand strategy is built on an insight and is often a result of extensive research. Serving as a blueprint for all brand communication and marketing, it clearly defines a brand’s positioning, its target audience and behaviours, its competition, and is the most efficient way to differentiates what the brand needs from what it wants.</p>
                    </div>

                    <div class="services-list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/design.svg" height="125" width="125" alt="">
                            <h4>Design</h4>
                            <p>A strong creative design serves as a brand’s personality and helps it stand out from its competition. Embodying a robust and compelling idea, an effective design unifies all the various products across all its communication from packaging to marketing material, and follows a consistent visual identity.</p>
                    </div>

                    <div class="services-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/production.svg" height="125" width="125" alt="">
                        <h4>Production</h4>
                        <p>Print and production is far more than simply ink on paper. A production house can often react without fully understanding the core requirements or in some instances, production capabilities can often restrict control, therefore creating issues during the production cycle. Our expertise in printing processes and production techniques enable us to listen, advise and suggest options which complement the brand and its core values thus delivering premium results.</p>
                    </div>
                    
                    <div class="services-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/communications.svg" height="125" width="125" alt="">
                        <h4>Communications</h4>
                        <p>We are a part of the one of the region’s leading public relations consultancy firms. This allows us to provide you with all the tools and expertise you need to build your reputation through inventive, integrated communications solutions. Solutions that are rapidly scalable to deliver against organisational needs in a fast-changing landscape.</p>
                    </div>

                    <div class="services-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/social-media.svg" height="125" width="125" alt="">
                        <h4>Social Media</h4>
                        <p>Social media has turned into a necessity in the new digital age. Today, it’s all about conversations, community, connecting with the audience and building relationships with the brand. It’s no longer just a broadcast channel or a sales and marketing tool. It’s a platform that allows us to hear what people say and respond accordingly. With that in mind, we develop strategies, launch media buying campaigns and create content that engages people and lets them interact with the brand.</p>
                    </div>
                
                    </div>
            </div>
				
            
            
            <div class="footer">
                <span><?php dynamic_sidebar('footer'); ?></span>
            </div>


			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
