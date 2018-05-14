<article class="col-md-12 blog__item">
    <div class="row justify-content-between">
        <div class="col-md-1">
            <div class="blog__date">
                <div class="blog__date__day"><?php echo get_the_date('d'); ?></div>
                <div class="blog__date__my"><?php echo get_the_date('m.Y'); ?></div>
            </div>
        
        </div>
        <div class="col-md-10 blog__item__content">

            <a 
                href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" 
                class="blog__item__a"
                style="background-image: url(<?php echo  get_the_post_thumbnail_url( get_the_ID() ) ?>)"
            > 
            </a>    
            <h3 class="blog__title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <p class="blog__excerpt"><?php the_excerpt() ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="button button--bordered button--tiny">More</a>
            <div class="blog__item__social">
                <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
            </div>
        </div>
    </div>
</article>	
