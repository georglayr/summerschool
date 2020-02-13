<?php

get_header();
?>

<div class="grid-x content-grid-top">
    <div class="cell large-6 col-left" id="p-col-left">
        <div class="cell align-center float-center" id="fp-cl-left">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( array( 750,750 ) );} 
        else { ?><div class="default-img"></div>
        <?php } ?>
        </div>
    </div>
    <div class="cell large-6 col-right" id="p-col-right">
		
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

		<h1 class="page_title page-heading"><?php the_title(); ?></h1>

		<div class="text-wrap"><?php the_content(); ?></div>

		<?php endwhile; endif; ?>

    </div><!-- end grid-right -->
</div><!-- end content-grid-top -->



    <?php
get_footer(); ?>
