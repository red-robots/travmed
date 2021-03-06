<?php
/**
 * Template Name: Sitemap
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				get_template_part( 'template-parts/content', 'sitemap' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
