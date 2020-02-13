<?php /* Template Name: No Image Template */ ?>

<?php

get_header();
?>

<div class="grid-container">
<div class="grid-x content-grid-top">
    <div class="cell large-12">
        <div class="cell align-center float-center">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( array( 750,750 ) );} 
        else { ?><div class="default-img" style="display:none;"></div>
        <?php } ?>
        </div>
    </div>
    <div class="cell large-12">
		
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

		<h1 class="page_title page-heading page-heading-single"><?php the_title(); ?></h1>

		<div class="text-wrap"><?php the_content(); ?></div>

		<?php endwhile; endif; ?>

    </div><!-- end grid-right -->
</div><!-- end content-grid-top -->
</div><!-- end .grid-container -->


    <?php
get_footer(); ?>