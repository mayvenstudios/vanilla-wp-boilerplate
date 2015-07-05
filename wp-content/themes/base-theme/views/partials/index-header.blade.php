<?php if ( is_day() ) : ?>
<h1>Archive: <span><?php echo  get_the_date( 'l, F j, Y' ); ?></span></h1>                                  
<?php elseif ( is_month() ) : ?>
<h1>Archive: <span><?php echo  get_the_date( 'F Y' ); ?></span></h1>    
<?php elseif ( is_year() ) : ?>
<h1>Archive: <span><?php echo  get_the_date( 'Y' ); ?></span></h1>
<?php elseif ( is_category() ) : ?>
<h1>Archive: <span><?php single_term_title(); ?></span></h1>    
<?php elseif ( is_search() ) : ?>
<h1>Search Results for: <span><?php the_search_query(); ?></span></h1>    
<?php else : ?>
<h1>Blog</h1>    
<?php endif; ?>