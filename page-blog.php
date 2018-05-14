<?php /* Template Name: Blog */ 
 get_header();
 ?>
 <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
 <div class="container">
 <div class="row justify-content-between">
 <main class="col-md-8">
    <section id="blog">
					<div class="row blog">				
						<?php if ( have_posts() ) : ?>		
							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
							 	
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
								
									get_template_part( 'blog_item' );

									
								
							// End the loop.
							endwhile;

							// Previous/next page navigation.
							// the_posts_pagination( array(
							// 	'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
							// 	'next_text'          => __( 'Next page', 'twentyfifteen' ),
							// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
							// ) );

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );

						endif;
						?>
					</div>
			</section>
</main>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>