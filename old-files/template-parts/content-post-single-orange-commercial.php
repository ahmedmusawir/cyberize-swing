<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
	<section class="post-orange-commercial">

		<div class="entry-content oc-container">

			<div class="row">

				<div class="cil-12 col-sm-12 col-md-12 col-lg-8">

					<main class="">

						<figure class="featured-img-holder">
							<?php cyberize_post_thumbnail(); ?>
						</figure>

						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
							// the_title( '<h1 class="entry-title text-center">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						 ?>

 						<hr>

						 <div class="row entry-meta-top">

 							<div class="col-12 col-sm-12 col-md-5 col-lg-5">
 								<?php
 								if ( 'post' === get_post_type() ) : ?>
 								<div class="d-flex align-items-center justify-content-left entry-meta pl-2 mb-5">
 									<?php
 										cyberize_posted_by();
 										cyberize_posted_on();
 									?>
 								</div><!-- .entry-meta -->

 								<?php
 								endif;
 								?>
 							</div>

 							<div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
 								<span class="post-category"><?php cyberize_entry_footer(); ?></span>
 							</div>

 						</div>

	 					<?php
	 						the_content();

	 						// If comments are open or we have at least one comment, load up the comment template.
	 						if ( comments_open() || get_comments_number() ) :
	 							comments_template();
	 						endif;
	 					?>

					</main>
				</div>
				<aside id="sidebar" class="col-12 col-sm-12 col-md-12 col-lg-4">

					<?php get_sidebar();  ?>

				</aside>
			</div>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
