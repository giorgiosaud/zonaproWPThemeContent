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
			<div class="loading">Cargando</div>
				<section id="contenidoPrincipal">
				<article id="blogTitle">
					<section>
						<div class="tituloDeSeccion col-xs-12 text-center"> 
							Blog
						</div>
						<div class="clearfix"></div>
					</section>
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
						endif;?>
				</section>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

		<?php
		get_footer();
