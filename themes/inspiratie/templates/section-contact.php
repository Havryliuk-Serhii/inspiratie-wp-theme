<section class="contact" id="contact" <?php echo inspiratie_section_background('contact_bg'); ?>>
            <div class="container">
                <h3 class="section-title"><?php the_field('contact_title') ?></h3>
                <p class="description"><?php the_field('contact_description') ?></p>
                <div class="row ">
                    <div class="col-md-6 col-12">
                        <?php 
                            $home = get_page_by_title('Home');
                                if($home):        
                                    echo do_shortcode($home->post_content);
                                endif;
                        ?>   
                    </div>     
                    <div class="col-md-6 col-12">
                        <div class="map">
                            <?php dynamic_sidebar('map'); ?>                           
                        </div>                        
                    </div> 
                </div>                  
                <div class="row location">
                    <div class="col-md-6 col-12">
                        <div class="connection">
							<div class="contact-item d-flex flex-row justify-content-start left">
								<img class="phone-img" src="<?php the_field('phone_icon'); ?>" alt=""> 
								<span class="phone"><?php the_field('phone_number'); ?></span>		
							</div>
                            <div class="contact-item d-flex flex-row justify-content-start">
								<img class="email-img" src="<?php the_field('email_icon'); ?>" alt="">
								<span class="email"><?php the_field('email'); ?></span>									
							</div>
                        </div>                           
                    </div>
                    <div class="col-md-6 col-12">
						<div class="contact-item d-flex flex-column justify-content-start right">
							<span class="name"><?php the_field('company_name'); ?></span>
							<span class="adress"><?php the_field('company_adress'); ?></span>
							<span class="zip-code"><?php the_field('company_zipcode'); ?></span>					
						</div>                            
                    </div>
                </div>
            </div>
        </section>