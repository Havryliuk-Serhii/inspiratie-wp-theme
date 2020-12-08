<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
    	<!--Menu-->
		<nav class="navbar  navbar-expand-lg navbar-dark bg-black">
			<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { 

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
