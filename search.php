<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *  
 * */

get_header();
?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results %s', 'summerschool' ), '<br><h2>"' . get_search_query() . '"</h2>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-none', 'none' );

		endif;
		?>


<?php
get_footer(); ?>
