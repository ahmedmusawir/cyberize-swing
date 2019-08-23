<?php
/**
 *
 * MODULE: Archive Index Orange Commercial
 *
 */
?>

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

<section class="archive-index-orange-commercial">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Page Header with image -->
			<section id="general-blog-page-header">
				<div class="container-fluid">
					<h1><?php the_field('archive_index_title', 'option') ?></h1>
					<?php the_archive_title( '<h5 class="archive-type">', '</h5>' ); ?>
				</div>
			</section>

			<section class="container">

				<div class="row">

					<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										the_archive_title( '<h4 class="archive-type">', '</h4>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'post-item-orange-commercial' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">

						<?php get_sidebar(); ?>

					</div>

				</div> <!-- End Row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- end primary -->

</section>
