<?php
/**
 *
 * MODULE: Search Index Swing-O-Things
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
	#general-blog-page-header span {

		color: #fff;
	}
</style>

<section class="search-index-swing">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Page Header with image -->
			<section id="general-blog-page-header">
				<div class="container-fluid">
					<h1><?php the_field('search_index_title_', 'option') ?></h1>
					<h5><?php printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<strong>' . get_search_query() . '</strong>' ); ?></h5>
				</div>
			</section>

			<section class="container">

				<div class="row">


					<div class="col-sm-12 col-md-12 col-lg-12">

						<?php

							if ( ! is_active_sidebar( 'sidebar-category' ) ) {

								echo "Please Insert A Widget";
							}
						?>

						<aside id="blog-index-widget" class="widget-area">
							<?php dynamic_sidebar( 'sidebar-category' ); ?>
						</aside><!-- #secondary -->

					</div>

				</div>

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-12">

						<main id="main" class="site-main">

							<?php
							if ( have_posts() ) : ?>

								<header class="page-header">
									<h4 class="search-type"><?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<span>' . get_search_query() . '</span>' );
									?></h4>
								</header><!-- .page-header -->

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'post-item-swing' );

								endwhile;

								?>

								<div class="post-nav-holder">
									<?php the_posts_navigation(); ?>
								</div>


								<?php

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>

						</main><!-- #main -->

					</div>

				</div> <!-- end row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- End Primary -->


</section>
