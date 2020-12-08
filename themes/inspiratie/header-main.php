<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-main">
    	<!-- Main Logo -->
    	<div class="container">
			<div class="row ">
				<div class="col-12">
					<div class="main-section">
						<?php 
							$image = get_field('main_logo_image');
							if( !empty( $image ) ): ?>
								<img class="main-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
						<?php endif; ?>	

					</div>					
				</div>
			</div>
		</div>	
		<!-- Slider -->
		<?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page'=> 2,'order' => 'ASC')) ?>
        <div class="hero-slider">
        	<?php if ( $slider->have_posts() ) : 
					while ( $slider->have_posts() ) : $slider->the_post(); ?>
		            <div class="slider-item" <?php echo inspiratie_slider_thumbnail(); ?>>
		            	<div class="container">
		            		<div class="row">
		            			<div class="col-12 ">
		            				<h3 class="slide-title"><?php the_title(); ?></h3>
		            			</div>
		            		</div>
		            	</div>
		            			            	
		            </div>
		            <?php endwhile;
			       endif; 
			    	 wp_reset_postdata();
			?>     
		</div>
			<div class="container">
				<div class="row">
					<a href="#about" class="btn-scroll"><span></span></a>	
				</div>
			</div>
		<!--Menu-->
		<nav class="navbar  navbar-expand-lg navbar-dark bg-black">
			<!-- Your site title as branding in the menu -->
				<?php 	if ( ! has_custom_logo() ) { 

						 	if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a></h1>

							<?php else : ?>

								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a>
							<?php endif; 
						} else {
							the_custom_logo();
						}
				?>	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
                wp_nav_menu( [
                    'theme_location' => 'main_menu',
                    'container' => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-end',
            		'container_id'      => 'navbarSupportedContent',
            		'menu_class'        => 'navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',                            
                    'depth' => 2,
                    'walker' => new WP_Bootstrap_Navwalker(),
                ] );
            ?>  
		</nav>		
	</header>
    <main class="main"> 



