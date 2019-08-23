<?php
/**
 *
 * MODULE: Blog Index IAS
 *
 */
?>
<style type="text/css">
	#general-page-header {
		width: 100vw;
		height: 200px;
		background-color: black;
		background-image: url('/wp-content/uploads/2019/06/ias-page-header.jpg');
		/* background-image: url('<?php // the_field('general_page_header_image', 'option') ?>'); */
		background-size: cover;
		background-position: top center;
	}
</style>

<section id="general-page-header" class="d-flex justify-content-center align-items-center">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php wp_title(''); ?></h1>
</section>

<main id="" class="blog-index-block-denker">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-9">

						<article class="post-item-container" >

							<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>

									<?php
									endif;
									?>

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
										<div class="col-12 col-sm-6 col-md-6 col-lg-6">
											<?php
											get_template_part( 'template-parts/content', 'post-item-denker' );

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
													   'prev_text'=>'<i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i>',
													   'next_text'=>'<i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i>',
													]);
											?>

										</div>

									</div>
									<?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
							?>

						</article>

					</div> <!-- 9 COLS END -->

					<div class="col-sm-12 col-md-12 col-lg-3">

						<?php get_sidebar(); ?>

					</div> <!-- 3 COLS END -->

				</div> <!-- ROW END -->



			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


</main>
