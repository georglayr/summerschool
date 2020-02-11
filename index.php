<?php

get_header();
?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<div class="grid-x content-grid-top">
    <div class="cell large-6 col-left" id="b-col-left">
        <div class="cell align-center float-center" id="b-cl-left">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( array( 750, 750) );} 
        else { ?><div class="default-img"></div>
        <?php } ?>
        </div>
    </div>
    <div class="cell large-6 col-right" id="b-col-right">
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1 class="page_title page-heading"><?php the_title(); ?></h1></a>

		<div class="text-wrap"><?php the_content(); ?></div>

		

    </div><!-- end grid-right -->
</div><!-- end content-grid-top -->

<?php endwhile; endif; ?>

    <?php
get_footer(); ?>
