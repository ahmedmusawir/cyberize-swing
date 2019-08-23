<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<style type="text/css">
	#general-blog-page-header {
		width: 100vw;
		height: 250px;
		background-color: rgba(189, 198, 18, .55);
		background-image: url('<?php echo get_field('general_page_header_image', 'option') ?>');
		background-size: cover;
		background-position: top center;
		padding: 6rem 15px 0px;
		margin-bottom: 60px;
		text-align: center;
		text-transform: uppercase;
	}
</style>


<div id="primary" class="content-area">
	<!-- <div class="row"> -->
		<main id="main" class="site-main">

			<!-- Page Header with image -->
			<section id="general-blog-page-header">
				<div class="container-fluid">
					<h1><?php the_field('archive_index_title', 'option') ?></h1>
					<?php the_archive_title( '<h5 class="archive-type">', '</h5>' ); ?>
				</div>
			</section>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post-single-orange-commercial' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

			<?php

			endwhile; // End of the loop.

			?>

		</main><!-- #main -->

	<!-- </div> END ROW -->
</div><!-- #primary -->



<?php
get_footer();
