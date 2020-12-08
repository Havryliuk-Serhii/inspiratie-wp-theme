
<!-- Gallery Section-->

        <section class="photo" id="photo">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="section-title text-center"><?php the_field('photo_title'); ?></h3>
					</div>					
				</div>
			</div>
			<div class="gallery-photo d-flex flex-row">
				<?php $post_photo = new WP_Query(array('post_type' => 'photo', 'posts_per_page'=>5,'order' => 'ASC')); 
				    if ( $post_photo->have_posts() ) : 
				        while ( $post_photo->have_posts() ) : $post_photo->the_post();?>
								<div class=" photo-column no-pad" >
									<?php echo inspiratie_photo_content(); ?>
								</div>
					 <?php   endwhile;
			    	endif; 
			    wp_reset_postdata();?>
			</div>
        </section>