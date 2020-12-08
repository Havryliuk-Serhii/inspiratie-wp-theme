<!-- Price Section-->
        <section class="price" id="price"<?php echo inspiratie_section_background('price_bg'); ?>>
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="section-title text-center"><?php the_field('price_title'); ?></h3>
						<p class="section-description text-center"><?php the_field('price_description'); ?></p>
						<p class="subdescription text-center"><?php the_field('price_subdescription'); ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="col-12">
						<?php $post_price = new WP_Query(array('post_type' => 'price')); 
								if ( $post_price->have_posts() ) : 
								while ( $post_price->have_posts() ) : $post_price->the_post(); ?>
									<article id="post-<?php the_ID(); ?>" <?php post_class('conditions text-center'); ?>>
										<?php the_content(); ?>
									</article>
						<?php endwhile;
				        	endif; 
				    		wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
        </section>




        