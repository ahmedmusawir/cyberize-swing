<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>

	</div><!-- #content -->

	<footer id="footer-swing" class="site-footer">

		<div class="oc-container widgets_wrapper">
		   <div class="row">
		      <div class="col-12 col-sm-12 col-md-12 col-lg-3 d-flex justify-content-start align-items-initial pt-5">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {

						echo "Please Insert A Widget";
					}
				?>

				<aside id="footer-widget-1" class="widget-area">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					<ul class="footer-widget-social-links">
						<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/045-facebook-1.png" /></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/013-twitter-1.png" /></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/031-linkedin.png" /></a></li>
					</ul>
				</aside><!-- #secondary -->

		      </div>
		      <div class="col-12 col-sm-12 col-md-4 col-lg-3 d-flex justify-content-lg-end align-items-initial">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {

						echo "Please Insert A Widget";
					}
				?>

				<aside id="footer-widget-2" class="widget-area">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				</aside><!-- #secondary -->

		      </div>
			  <div class="col-12 col-sm-12 col-md-4 col-lg-3 d-flex justify-content-lg-end align-items-initial">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {

						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-3" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</aside><!-- #secondary -->

		      </div>
			  <div class="col-12 col-sm-12 col-md-4 col-lg-3 d-flex justify-content-lg-end align-items-initial">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {

						// echo "Please Insert A Widget";
					}
				?>

					<div class="footer-contact-us">

						<div class="wrapper">

							<h5>Contact Us</h5>

							<div class="items d-flex justify-content-start align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/map_pin_icon.png">
								<span>5252 Westchester Street, Suite 175 Houston TX, 77005</span>
							</div>

							<div class="items d-flex justify-content-start align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/CALL_ICON.png">
								<span>713-961-9097</span>
							</div>

							<div class="items d-flex justify-content-start align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/Fax_icon.png">
								<span>888-958-1955</span>
							</div>

							<div class="items d-flex justify-content-start align-items-center">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/Email_icon.png">
								<a href="#">info@orangecommercial.com</a>
							</div>

						</div>

					</div>

					<aside id="footer-widget-4" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</aside><!-- #secondary -->

		      </div>

		   </div> <!-- END ROW -->
		   <div class="row d-none">
				<div class="copyright d-none">
					<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'MooseFramework 2.0' );
					?></a>
					<span class="sep"> | </span>
					All Rights Reserved <a href="https://cyberizegroup.com" target="_blank">Cyberizegroup.com</a> &copy;2019

				</div><!-- .copyright -->
			</div>
		</div> <!-- END WIDGET WRAPPER -->
		<section id="footer-bottom">
			<div class="oc-container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-9 col-lg-9">
						<p>Copyright &copy; <?php echo date('Y') ?> Orange Commercial Real Estate All Rights Reserved.</p>
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3">
						<p>Developed by</p>
					</div>
				</div>
			</div>
		</section>
		<section class="site-info container d-none">
			<div class="">
				<div class="copyright d-flex align-items-center">
					<div class="text-center mx-auto">

						<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
							printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'CyberizeFramework' );
						?></a>
						<span class="sep"> | </span>
						<?php the_field('theme_footer_text', 'option') ?>

					</div>

				</div>
			</div>
		</section>

		<!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

		<div style="color: white"><strong>Current template:</strong>
			<?php echo get_current_template( true ); ?>
		</div>

		<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
