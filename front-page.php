<?php get_header(); ?>

<div class="grid-x content-grid">
    
    <div class="cell large-4 col-left" id="fp-col-left">

        <div class="landing-text">
        <h1 class="page-heading" id="mobile-fp-h1">Berlin Summer School <br><span>in Social Sciences <?php echo get_the_date('Y'); ?></span></h1>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="text-wrap"><?php the_content(); ?></div>

            <?php endwhile; endif; ?>
        </div>

    </div>
    <div class="cell large-6 col-right" id="fp-col-right">
    <div class="landing-text" style="margin-left:10vw;">
            <h1 class="page-heading" id="lg-fp-h1">Berlin Summer School<br><span>in Social Sciences <?php echo get_the_date('Y'); ?></span></h1>
        </div>
    </div>

</div>
    

    <?php
get_footer(); ?>