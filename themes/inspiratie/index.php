<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
					        <div class="card align-items-start">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', array('class' => 'align-self-start mr-4')); ?></a>
					            <div class="card-body">
					                <h3 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					                <?php the_excerpt(); ?>
					                <a href="<?php the_permalink() ?>" class="card-link"><?php esc_html_e( 'Read more', 'infinite' ); ?></a>
					            </div>
					        </div>
					    </article>
					<?php endwhile;
					the_posts_navigation();
				  else : ?>
				  	<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'infinite' ); ?></h1>
			<?php endif; ?> 
		</div>
		<div class="col-md-4 col-sm-12">
			<?php get_sidebar();?>
		</div>
	</div>
</div>

<?php get_footer();