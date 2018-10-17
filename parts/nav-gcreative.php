<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu menu-hamburger">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a href="http://localhost:8888/DEV/gcreative/" style="margin: 0; padding-top: 1.5rem; padding-left: 1.5rem; padding-bottom: 0;">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" width="50" alt="">
			</a></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> -->
			<li>
				<a data-toggle="off-canvas" class="hamburger_trigger">
					<div class="hamburger" id="hamburger-6">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>