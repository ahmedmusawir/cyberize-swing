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
	<section class="post-swing">

		<div class="entry-content container">

			<div class="row">

				<div class="cil-12 col-sm-12 col-md-12 col-lg-12">

					<main class="">

						<?php
						if ( 'post' === get_post_type() ) : ?>
						<div class="d-flex align-items-center justify-content-center entry-meta pl-2 mb-5">
							<span><?php cyberize_entry_footer(); ?></span>
							<span><?php cyberize_posted_on(); ?></span>
						</div><!-- .entry-meta -->

						<?php
						endif;
						?>

						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
							// the_title( '<h1 class="entry-title text-center">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						 ?>

						<figure class="featured-img-holder">
							<?php cyberize_post_thumbnail(); ?>
						</figure>

	 					<?php
	 						the_content();
	 					?>

						<hr>

						<div class="col-12 col-sm-12 col-md-7 col-lg-7">
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
	 						if ( comments_open() || get_comments_number() ) :
	 							comments_template();
	 						endif;
							?>
						</div>
						<div class="col-12 col-sm-12 col-md-5 col-lg-5">

						</div>

					</main>
				</div>
			</div>
		</div><!-- .entry-content -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
