<?php
/**
 *
 * MODULE: Properties Index Orange Commercial
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

<section id="archive-properties-sidebar">

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


					<div class="col-sm-12 col-md-12 col-lg-8">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										the_archive_title( '<h4 class="archive-type">', '</h4>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->

							<div class="row">

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */


										?>



										<?php


										$terms = get_the_terms( get_the_ID(), 'listing-status' );

										// print_r($terms);

										if ( $terms && ! is_wp_error( $terms ) ) :

										    $draught_links = array();

										    foreach ( $terms as $term ) {
										        $draught_links[] = $term->name;
										    }

										    $status = join( ", ", $draught_links );
										    ?>

										    <p class="beers draught">
										        <?php //printf( esc_html__( "LISTING STATUS: <span>%s</span>", 'textdomain' ), esc_html( $on_draught ) ); ?>
										        <?php // echo 'LISTING STATUS: <span class="badge badge-secondary">'. $status .'</span>'; ?>
										    </p>
										<?php endif;

										$terms = get_the_terms( get_the_ID(), 'property-type' );

										// print_r($terms);

										if ( $terms && ! is_wp_error( $terms ) ) :

										    $draught_links = array();

										    foreach ( $terms as $term ) {
										        $draught_links[] = $term->name;
										    }

										    $types = join( ", ", $draught_links );
										    ?>

										    <p class="beers draught">
										        <?php //printf( esc_html__( "LISTING STATUS: <span>%s</span>", 'textdomain' ), esc_html( $on_draught ) ); ?>
										        <?php // echo 'PROP TYPES: <span class="badge badge-secondary">'. $types .'</span>'; ?>
										    </p>
										<?php endif; ?>




										<div class="col-12 col-sm-6 col-md-6 col-lg-6">
										    <!-- <?php echo 'PROP TYPES: <span class="badge badge-secondary">'. $types .'</span>'; ?> <br>
										    <?php echo 'LISTING STATUS: <span class="badge badge-secondary">'. $status .'</span>'; ?> -->

											<?php
											get_template_part( 'template-parts/content', 'properties-item-orange-commercial' );

											?>
										</div>

										<?php

										endwhile;

										?>
									</div>
									<div class="row">

										<div class="post-nav-holder text-center mx-auto">

											<?php
												   // the_posts_navigation();

												   the_posts_navigation([
													   'prev_text'=>'<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>',
													   'next_text'=>'<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>',
													]);
											?>

										</div>

									</div>
									<?php
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div>
					<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-4">

						<?php get_sidebar(); ?>

					</div>

				</div> <!-- End Row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- end primary -->

</section>
