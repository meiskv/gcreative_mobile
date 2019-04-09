<?php
/*
Template Name: About Mobile
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

            <div class="mobile-wrapper" style="margin-bottom: 0;">

                    <div class="about">
                        <h1>We are</h1>
                        <h2>GCREATIVE</h2>
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <?php the_content(); ?>
                            
                        <?php endwhile; endif; ?>		


                    </div>

                    <div class="about-img" style="padding: 0 !important;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_01.jpg" style="height:95%; margin-top: 0;" width="100%" alt="">
                    </div>

                    <div class="about-img">
                            <h1>WE BUILD</h1>
                            <h4>BRANDS</h4>
                            <p style="margin-bottom: 0;">
                                We offer 360° solutions led by strategy and insight, driven by our passion for design and strengthened by our love of storytelling.
                            </p>
                    </div>

                    <div class="about-img" style="padding: 0 !important;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_2.jpg" style="height:95%; margin-bottom: 0;" width="100%" alt="">
                    </div>
                    <div class="about-img" style="background: #0f294b; color: #fff; padding: 2rem 2rem 2rem 2rem;">
                            <h1>OUR BRANDING</h1>
                            <h4>TOOLS</h4>
                            <p style="margin: 0;">
                                From advertising and creative design, well-grounded strategy and brand development, to digital to social media expertise, signature printing solutions, and corporate communications, our comprehensive range of services are tailored to address the evolving needs of our diverse clients.
                            </p>
                    </div>
                    <div class="about-img" style="padding: 0 !important; background: #0f294b; text-align: center;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_3.svg" style="height:100%; margin-top: 0;" width="90%" alt="">
                    </div>
                    <div class="about-img" style="background: #2f8683; padding: 2rem 2rem 0rem 2rem; color: #fff;">
                            <h1>OUR GLOBAL</h1>
                            <h4>PRESENCE</h4>
                            <p>
                            We are a part of Grayling, an integrated communications consultancy offering PR, digital and creative services with more than 30 years of regional experience and a flexible global network that transcends borders and disciplines.
                            </p>

                            <p style="margin-bottom: 0;">
A wholly owned subsidiary of Huntsworth PLC, a public relations focused group listed on the London Stock Exchange, Grayling provides truly integrated services combined with worldwide reach. This is matched with local expertise and knowledge supported by diverse sector experience.
                            </p>
                    </div>
                    <div class="about-img" style="padding: 0 !important; background: #2f8683; text-align: center;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_4.svg" style="height:95%;" width="70%" alt="">
                    </div>
            </div>
            <div class="footer">
                <span><?php dynamic_sidebar('footer'); ?></span>
            </div>



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
