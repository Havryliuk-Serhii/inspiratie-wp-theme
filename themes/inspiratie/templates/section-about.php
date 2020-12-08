<!-- Section About Us-->
        <section class="about" id="about" <?php echo inspiratie_section_background('about_bg'); ?>>
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="section-title short-title"><?php the_field('about_title'); ?></h3>
						<p class="section-description description-bottom"><?php the_field('about_description'); ?></p>
						<?php $post_about = new WP_Query(array('post_type' => 'about')); 
								if ( $post_about->have_posts() ) : 
								while ( $post_about->have_posts() ) : $post_about->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
								<?php the_post_thumbnail($size,array('class'=>'post-img')); ?>
								
								<div class="post-content">
									<?php the_content(); ?>
								<div class="signature d-flex flex-column">
									<span class="wishes ml-auto"><?php the_field('wishes'); ?></span>
									<span class="sign ml-auto"><?php the_field('sign'); ?></span>
								</div>
							</article>
						<?php endwhile;
				        	endif; 
				    		wp_reset_postdata();
						?>        
					</div>
				</div>
			</div>
        </section>
