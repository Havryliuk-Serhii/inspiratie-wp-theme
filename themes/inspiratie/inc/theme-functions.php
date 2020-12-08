<?php 
/**
 *  Setup Bootstrap Navigation Walker
 */
require get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 *  Custom Thumbnail for Slider
**/
function inspiratie_slider_thumbnail(){
    if( get_the_post_thumbnail_url($post = null, 'full') ){
       return ' style="background-image: url(' . get_the_post_thumbnail_url($post, 'full') . '); "';
    }
    return null;
}

/**
* Custom Background for Sections
**/

function inspiratie_section_background($field, $cat = null, $cover = true){
    if( get_field($field, $cat) ){
        $add_style = $cover ? 'background-size: cover;' : '';
        return ' style="background: url(' . get_field($field, $cat) . ') center no-repeat; ' . $add_style . '"';
    }
    return null;
}

/**
* Widget Google maps
**/
register_sidebar(array(
    'name' => 'Google maps',
    'id' => 'map',
    'description' => 'Use the Text widget to add HTML code',
    'before_widget' => '',
    'after_widget' => ''
  )
);

/**
* Display Photo in gallery column
**/

function inspiratie_photo_content(){ ?>
    <a  data-fancybox="gallery" href="<?php the_field('top_photo_link'); ?>">
        <img src="<?php the_field('top_photo_link'); ?>" alt="">
    </a>
    <a data-fancybox="gallery" href="<?php the_field('bottom_photo_link'); ?>">
        <img src="<?php the_field('bottom_photo_link'); ?>" alt="">
    </a>
<?php }



 