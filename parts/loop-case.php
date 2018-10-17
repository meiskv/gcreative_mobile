<?php
/**
 * Template part for displaying a single post
 */
?>

<?php
$args = array(
	'post_type' => 'case-study',
);

$query = new WP_Query( $args );
$getBackgroundImage = get_field('first_slide_background_image');
$caseBg = " url(".$getBackgroundImage['url'].") no-repeat fixed center;"."background-size: cover;";
$image = get_field('client_logo');
$size = 'large';
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$client_img = get_field('client_feature_image');
$client_img01 = get_field('01_image');
$client_img02 = get_field('02_image');

$prev_post = get_previous_post();
$next_post = get_next_post();

$argsLastPost = array(
    'post_type' => 'case-study',
    'posts_per_page' => 1,
    'order'     => 'ASC',
    
);

$argsFirstPost = array(
    'post_type' => 'case-study',
    'posts_per_page' => 1,
    'order'     => 'DESC',    
);

$queryLast = new WP_Query( $argsLastPost );
$queryFirst = new WP_Query( $argsFirstPost );

?>

<div class="work-logo">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  style="max-width: 250px; max-height: 150px;"/>
</div>

<div class="work-description">
    <?php the_field('client_short_description');?>
</div>


<div class="deliverables">
    <?php
    $deliverables = get_field('project_deliverables');
    if( $deliverables ): ?>
        <?php foreach( $deliverables as $deliverable ): ?>
            <?php if($deliverable == 'strategy') :  ?>
                <div>
                    <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/strategy.svg" width="45" alt="">
                    <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                </div>
            <?php endif; ?>
            <?php if($deliverable == 'design') :  ?>
                <div>
                    <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/design.svg" width="45" alt="">
                    <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                </div>
            <?php endif; ?>
            <?php if($deliverable == 'production') :  ?>
                <div>
                    <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/production.svg" width="45" alt="">
                    <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                </div>
            <?php endif; ?>
            <?php if($deliverable == 'social') :  ?>
                <div>
                    <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/social-media.svg" width="45" alt="">
                    <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                </div>
            <?php endif; ?>
            <?php if($deliverable == 'communications') :  ?>
                <div>
                    <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/communications.svg" width="45" alt="">
                    <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                </div>
            <?php endif; ?>                               
        <?php endforeach; ?>
    <?php endif; ?>
</div>


<img src="<?php echo $client_img['url']; ?>" width="100%" height="100%" alt="">

<div class="work-description">
    <?php echo get_field('title_01_description'); ?>
</div>

<img src="<?php echo $client_img01['url']; ?>" height="auto" alt="">


<div class="work-description">
    <?php echo get_field('title_02_description'); ?>
</div>

<img src="<?php echo $client_img02['url']; ?>" height="auto" alt="">

<div class="work-description">
    <?php echo get_field('full_project_deliverables'); ?>
</div>



                            <div class="case-pagination">
                               <div class="case__inner__pagination__holder">

                                <?php

                                if(!empty($prev_post)) {

                                    $prev_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                    
                                    ?> 
                                    
                                    <div class="case__page__holder" style="background: url('<?php echo $prev_thumb; ?>') no-repeat center center;
                                    background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="case__btn">
                                        <div class="case__prev__title">
                                                <div class="case__prev">PREVIOUS CASE STUDY</div>
                                                <span><?php echo $prev_post->post_title; ?></span>
                                            </div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_m.svg" height="62" width="62" alt="">
                                        </a>
                                    </div>
                                   <?php }else{
                                    
                                       
                                       // The Loop
                                       if ( $queryFirst->have_posts() ) {
                                        $last_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                        if ( $queryFirst->have_posts() ) {
                                            $queryFirst->the_post();

                                            if ( has_post_thumbnail() ) {
                                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) {
                                            
                                                }
                                            }
                                            
                                            ?>

                                    <div class="case__page__holder" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;
                                    background-size: cover;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover; 
                                    -o-background-size: cover;">
                                        <a href="<?php echo get_permalink($queryFirst->ID); ?>" class="case__btn">
                                        <div class="case__prev__title">
                                            <div class="case__prev">PREVIOUS CASE STUDY</div>
                                            <span><?php echo get_the_title(); ?></span>
                                            </div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_m.svg" height="62" width="62" alt="">
                                        </a>
                                    </div>
                                           

                                            <?php
                                        }

                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    }

                                    ?>
                                    
                                    

                                   <?php } ?>

                                   <?php
                                   if(!empty($next_post)) {

                                    $next_thumb = get_the_post_thumbnail_url( $next_post->ID,'full');
                                    
                                   ?>

                                   <div class="case__page__holder" style="background: url('<?php echo $next_thumb; ?>') no-repeat center center;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover; display: flex; justify-content: space-between; align-items: flex-end;">
                                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="case__btn">
                                            <div class="case__next__title">
                                                <div class="case__next">NEXT CASE STUDY</div>
                                                <span><?php echo $next_post->post_title; ?></span>
                                            </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down_m.svg" height="62" width="62" alt="">
                                            </a>
                                   </div>
                                        

                                   <?php }else{
                                       
                                    // The Loop
                                    if ( $queryLast->have_posts() ) {
                                        $last_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                        if ( $queryLast->have_posts() ) {
                                            $queryLast->the_post();

                                            if ( has_post_thumbnail() ) {
                                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) {
                                            
                                                }
                                            }
                                            ?>

                                    <div class="case__page__holder" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;
                                                background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                            <a href="<?php echo get_permalink($queryLast->ID); ?>" class="case__btn">
                                            <div class="case__next__title">
                                            <div class="case__prev">NEXT CASE STUDY</div>
                                            <span><?php echo get_the_title(); ?></span>
                                            </div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down_m.svg" height="62" width="62" alt="">
                                            </a>
                                   </div>
                                            
                                        

                                            <?php
                                        }

                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    }   
                                       
                                       
                                    ?>
                                    
                                    <?php } ?>
                                   
                               </div>


                            

                               </div>



                              
