<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="swing-404" class="content-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<img src="<?php echo get_template_directory_uri(). '/assets/img/404-art.png' ?>" alt="404 Page not found">
			<h3>Oops! That page can’t be found.</h3>
			<p>It looks like nothing was found at this location. Maybe try a search?</p>
			<a class="btn btn-primary btn-lg" href="/">Go Back</a>

			<!-- <div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto"> -->
				<?php // echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
			<!-- </div> -->

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
