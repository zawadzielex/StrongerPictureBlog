<?php /* Template Name: Blog */ 
 get_header();
 ?>
  <div class="container">
	<div class="row justify-content-between">
		<main class="col-md-8">
			<section id="blog">
					<div class="row blog">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			// if ( is_singular( 'attachment' ) ) {
			// 	// Parent post navigation.
			// 	the_post_navigation( array(
			// 		'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			// 	) );
			// } elseif ( is_singular( 'post' ) ) {
			// 	// Previous/next post navigation.
			// 	the_post_navigation( array(
			// 		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 	) );
			// }

			// End of the loop.
		endwhile;
		?>  

</div>
		</section>
	</main>
	<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>