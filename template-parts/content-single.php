<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage StrongerPicture
 * @since StrongerPicture 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="col-12 blog__single">
			<div class="row">
				<div class="col-md-2">
					<div class="blog__date blog__date--single">
						<div class="blog__date__day"><?php echo get_the_date('d'); ?></div>
						<div class="blog__date__my"><?php echo get_the_date('m.Y'); ?></div>
					</div>
				</div>
				<div class="col-md-10">
					<h3 class="blog__title blog__title--red"> 
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
						
					<a href="/blog/" class="blog__back">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve" width="10px" height="10px">
							<g>
								<path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12    C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084    c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864    l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z" fill="#174795"/>
							</g>
						</svg>
						Back to blog
					</a>
					<div class="blog__item__social">
						<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					</div>
				</div>
			</div>
			
						
						<a 
						href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" 
						class="blog__item__a blog__item__a--single"
						style="background-image: url(<?php echo  get_the_post_thumbnail_url( get_the_ID() ) ?>)"
					> 
					</a>    
					
			<div class="row justify-content-end">
				
				<div class="col-md-10">				

							<div class="entry-content blog__single__contnet">
								<?php
									the_content();

									wp_link_pages( array(
										'before'      => '',
										'after'       => '',
										'link_before' => '',
										'link_after'  => '',
										'pagelink'    => '',
										'separator'   => '',
									) );

									
								?>
							</div><!-- .entry-content -->
					</div>
			</div>
							
	</article><!-- #post-## -->
					