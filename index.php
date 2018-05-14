<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage StrongerPictutre
 * @since StrongerPicture 1.0
 */

 get_header(); ?>
    

		<main>
		
			<section class="baner" style="overflow: hidden;">
				<video autoplay muted loop id="myVideo" style="position: absolute; top:-90px; height: 120%; filter: opacity(40%);">
					<source src="<?php echo get_template_directory_uri(); ?>/assets/bcg2.mp4" type="video/mp4">
				</video>
				<div class="container">
					<div class="row">
						<h1>Find <br><strong>the best photo</strong> <br>for your <br>Tinder profile</h1>
						<a href="" class="button button--baner">
								Find it now!
						</a>
						<p class="baner__description">
							<strong>78%</strong><br>
							<span>winner</span>
						</p>
					</div>
				</div>
				
			</section>
			<section id="did-you-know" class="double">
				<div class="container">
					<div class="row justify-content-end space">
						<div class="double__image"></div>
						<div class="col-md-8">
						<h2 class="title title--big">
							Did you know that choosing the right profile picture
							<br>can <strong>double</strong> your <strong>matches</strong> on Tinder?

						</h2>
						<a href="" class="button button--small">Choose right photo</a>
						</div>
						
					</div>
				</div>
			</section>
			<section id="just-3-steps" class="background-grey space-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12  center">
						<h2 class="title">
							<strong>Just 3 steps</strong> to find the best photos
						</h2>
						
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9 steps">
							<span class="steps__item">1</span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<img class="steps__arrow" width="11" height="18"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAASCAMAAAC6q9RHAAAAAXNSR0IB2cksfwAAAHhQTFRFAAAA7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFSlXCPwgAAACh0Uk5TAAAcQn384W8PSv+MDP7paobt9Y0bEJt1hON4F/GHCEfDVblhc+oNcvKSJnQAAABvSURBVHicRcxZEoJADATQtCxKQJRNFBDcwPvfkGQiY3+9VFeHAOxgISAIvYMo3h/MScTMaeZ8FHJ+cj4XepRVLW4u7NLqtr7m6lvXy0+kg2vu6tHM6sn4ED+NL9l6gt6eoD9Bn3kjaKk2yrb5/ogVqCUHVbPejHgAAAAASUVORK5CYII=" />
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__item">2</span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<img class="steps__arrow" width="11" height="18"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAASCAMAAAC6q9RHAAAAAXNSR0IB2cksfwAAAHhQTFRFAAAA7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFS7UFSlXCPwgAAACh0Uk5TAAAcQn384W8PSv+MDP7paobt9Y0bEJt1hON4F/GHCEfDVblhc+oNcvKSJnQAAABvSURBVHicRcxZEoJADATQtCxKQJRNFBDcwPvfkGQiY3+9VFeHAOxgISAIvYMo3h/MScTMaeZ8FHJ+cj4XepRVLW4u7NLqtr7m6lvXy0+kg2vu6tHM6sn4ED+NL9l6gt6eoD9Bn3kjaKk2yrb5/ogVqCUHVbPejHgAAAAASUVORK5CYII=" />
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__dot"></span>
							<span class="steps__item">3</span>
						</div>
					</div>
					<div class="row steps__column">
						<div class="col-md-4 steps__column__item">
							<div class="row">
								<div class="col-4 steps__column__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/join_us.png" alt="Join Us"  />
								</div>
								<div class="col-8">
									<h3 class="steps__title">Join Us</h3>
									<p class="steps__desc">It takes 10 seconds
										to create an account
										and its completely
										free.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 steps__column__item">
						<div class="row">
								<div class="col-4 steps__column__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/create_test.png" alt="Create test"  />
								</div>
								<div class="col-8">
									<h3 class="steps__title">Create a Test</h3>
									<p class="steps__desc">
										Simply choose 2 photos
										from your hard drive. 
										Upload them and run
										the test
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 steps__column__item">
						<div class="row">
								<div class="col-4 steps__column__img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/get_results.png" alt="Get Results"  />
								</div>
								<div class="col-8">
									<h3 class="steps__title">Get Results</h3>
									<p class="steps__desc">
										Opposite sex users
										will tell you which of 
										your photos is better.
									</p>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>
			<section id="strongerpictures-in-numbers" class="space-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12  center">
						<h2 class="title">
							StrongerPicture <strong>in numbers</strong>
						</h2>
						
						</div>
					</div>
					<div class="row in-numbers">
							<div class="col-md-3 in-numbers__item">
								<div class="row">
									<div class="col-12 center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/votes.png" alt="Votes"  />
									</div>
									<div class="col-12 center">
										<h3 class="in-numbers__title">913929</h3>
										<p class="in-numbers__desc">Votes</p>
									</div>
								</div>
							</div>
							<div class="col-md-3  in-numbers__item">
								<div class="row">
									<div class="col-12 center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/users.png" alt="Users"  />
									</div>
									<div class="col-12 center">
										<h3 class="in-numbers__title">25848</h3>
										<p class="in-numbers__desc">Users</p>
									</div>
								</div>
							</div>
							<div class="col-md-3  in-numbers__item">
								<div class="row">
									<div class="col-12 center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tests.png" alt="Tests"  />
									</div>
									<div class="col-12 center">
										<h3 class="in-numbers__title">15341</h3>
										<p class="in-numbers__desc">Tests</p>
									</div>
								</div>
							</div>
							<div class="col-md-3  in-numbers__item">
								<div class="row">
									<div class="col-12 center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/countries.png" alt="Countries"  />
									</div>
									<div class="col-12 center">
										<h3 class="in-numbers__title">45</h3>
										<p  class="in-numbers__desc">Countries</p>
									</div>
								</div>
							</div>
						</div>
				</div>
			</section>
			<section id="testimonials" class="testimonials background-grey" >
				<div class="container testimonials__item" >
					<div class="testimonials__image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/testimonial_1.png)"></div>
					<div class="row">
						<div class="col-12 col-lg-6 testimonials__container">
							<h3 class="testimonials__title">
								<strong>She texted me on Tinder.</strong><br>
								What StrongerPicture <br>
								can do for you? 

							</h3>
							<p class="testimonials__desc">"I followed the advice to show my passion and let Stronger Picture choose the best pictures I had. It worked. I used to be a traveller. Now I am married traveller."</p>
							<p class="testimonials__author">Robbie</p>
							<p class="testimonials__dots">
								<span class="testimonials__dots__item"></span>
								<span class="testimonials__dots__item"></span>
								<span class="testimonials__dots__item testimonials__dots__item--active"></span>
							</p>
						</div>
					</div>
					
				</div>
				<div class="container testimonials__item testimonials__item--hidden">
					<div class="row">
						<div class="col-4 testimonials__container">
							<h3 class="testimonials__title">
								<strong>She texted me on Tinder.</strong> <br>
								What StrongerPicture <br>
								can do for you? 

							</h3>
							<p class="testimonials__desc">"I followed the advice to show my passion and let Stronger Picture choose the best pictures I had. It worked. I used to be a traveller. Now I am married traveller."</p>
							<p class="testimonials__author">Robbie</p>
							<p class="testimonials__dots">
								<span class="testimonials__dots__item testimonials__dots__item--active"></span>
								<span class="testimonials__dots__item"></span>
								<span class="testimonials__dots__item "></span>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="registration" >
				<div class="container">
					<div class="col-12 col-lg-6">
						<div class="registration">
							<div class="row justify-content-center">
								<div class="col-11 col-lg-9">
									<h3 class="registration__title">
										<strong>Don’t wait.</strong> Register now and find your best picture!
									</h3>
									<form>
										<input class="registration__input" type="text" name="ssd" placeholder="Your e-mail address">
										<input class="registration__input" type="password" name="" placeholder="Password">
										<input class="button button--registration" type="button" value="Register">
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section id="blog-posts" class="space-bottom">
				<div class="container">
					<div class="row">
							<div class="col-md-12  center">
								<h2 class="title">
									Read our latest blog posts from our <strong>data-driven specialist</strong>
								</h2>

							</div>
					</div>
					
					<div class="row main-blog">				
						<?php if ( have_posts() ) : ?>

							<?php if ( is_home() && ! is_front_page() ) : ?>
							
							<?php endif; ?>
							<?php $first = true; ?>
							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
							 	if ( has_tag( 'featured' ) ) : 
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									if ( $first ): 
										get_template_part( 'main_blog', 'first' );
									 	$first = false; 
									else:
									  get_template_part( 'main_blog' );
									endif;
									
								endif;
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
				</div>
			</section>
		</main><!-- .site-main -->

		

<?php get_footer(); ?>
