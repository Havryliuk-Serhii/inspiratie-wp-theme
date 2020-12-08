<?php
/**
 *Template Name: Home Page
 */
get_header('main');

get_template_part( 'templates/section-about');
get_template_part( 'templates/section-action'); 
get_template_part( 'templates/section-price');
get_template_part( 'templates/section-photo'); 
get_template_part( 'templates/section-contact');  

get_footer(); 