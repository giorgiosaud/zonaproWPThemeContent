<?php
/**
 * El archivo Principal
 *

 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package Zonapro
 * @subpackage Zonapro
 * @since Zonapro 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();


					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				// twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
		<div class="clearfix"></div>
	</div><!-- #primary -->
	<?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();
