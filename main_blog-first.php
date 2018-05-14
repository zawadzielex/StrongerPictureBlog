<article class="col-md-12 col-xl-4 main-blog__item">
    <a 
        href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" 
        class="main-blog__item__a"
        style="background-image: url(<?php echo  get_the_post_thumbnail_url( get_the_ID() ) ?>)"
    > 
    </a>   
    <h3 class="main-blog__title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	    <p class="main-blog__excerpt">With 1.6 billion swipes a day and over 9 billion matches, it’s no surprise that Tinder has 
							become one of the most popular dating apps in the world since its launch in 2012. 
	</p>
	<a href="<?php the_permalink(); ?>" class="button button--bordered button--tiny">More</a>
</article>	
