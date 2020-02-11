<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the grid-container div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package summerschool
 */

?>

</div><!-- #gid-container fluid-->
<footer>
    <div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu footer-logos">
            <li><a href="https://wzb.eu/en"><img class="wzb-logo" src="<?php echo get_template_directory_uri() ?>/files/img/wzb_white.png"></a></li>
            <li><a href="https://www.bgss.hu-berlin.de/de/bgss"><img class="hu-logo" src="<?php echo get_template_directory_uri() ?>/files/img/bgss_logo_y.png"></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <nav>
            <?php 
                wp_nav_menu(array(
                'theme_location' => 'footer',
                    'depth' => 1,
                    'container' => 'div',
                    'container_id' => 'footer-menu',
                    'container_class' => 'menu small-vertical',
                    'menu_class'      => 'menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="vertical">%3$s</ul>',			)
                );
            ?>
        </nav>
    </div>
    </div>

</footer>

 <?php wp_footer(); ?>

</body>
</html>
