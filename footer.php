<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package powen
 */
?>
	<?php do_action( 'powen_above_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'powen_footer_begins' ); ?>
		<?php if( is_active_sidebar( 'first-footer-widget-area' )
				  || is_active_sidebar( 'second-footer-widget-area' )
				  || is_active_sidebar( 'third-footer-widget-area' )
				  || is_active_sidebar( 'fourth-footer-widget-area' )
				): ?>
    	<aside id="powen-footer-widgets" class="powen-footer-widgets" role="complementary">
    		<div class="powen-wrapper">
	    		<?php if (is_active_sidebar( 'first-footer-widget-area' )){ ?>
	    	    <div class="first quarter left widget-area">
	    	        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	    	    </div><!-- .first .widget-area -->
	    	    <?php } ?>

				<?php if (is_active_sidebar( 'second-footer-widget-area' )){ ?>
	    	    <div class="second quarter widget-area">
	    	        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	    	    </div><!-- .second .widget-area -->
				<?php } ?>

				<?php if (is_active_sidebar( 'third-footer-widget-area' )){ ?>
	    	    <div class="third quarter widget-area">
	    	        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
	    	    </div><!-- .third .widget-area -->
				<?php } ?>

				<?php if (is_active_sidebar( 'fourth-footer-widget-area' )){ ?>
	    	    <div class="fourth quarter right widget-area">
	    	        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
	    	    </div><!-- .fourth .widget-area -->
	    	    <?php } ?>
	    	    <?php do_action( 'powen-footer-widgets' ); ?>
    	    </div><!-- .powen-wrapper -->
    	</aside><!-- #fatfooter -->
    	<?php endif; ?>

	<div id="site-info" class="site-info">
		<div class="powen-wrapper">
			<div class="powen-footer-site-info">
				<?php do_action( 'powen_footer_site_info_begins' ); ?>

			    <span class="powen-footer-date-before"><?php echo apply_filters( 'powen_copyright_date_text', '&copy' ); ?></span><span class="powen-footer-date"><?php echo apply_filters( 'powen_footer_copyright_date', sprintf( __( '%s', 'powen-lite' ), date('Y') ) ); ?></span>

				<?php if( powen_mod( 'copyright_textbox' ) !== '' ) { ?>
					<span class="powen-footer-copyright">
					    <a href="<?php echo apply_filters( 'powen_copyright_text_url', esc_url( home_url('/') ) ); ?>" class="powen-copyright" title="<?php echo apply_filters( 'powen_copyright_text', esc_attr( get_bloginfo('name', 'display') ) ); ?>">
					        <?php echo esc_textarea( powen_mod( 'copyright_textbox' ), 'powen-lite' ); ?>
					    </a>
				    </span>
			    <?php } ?>

				<span class="sep"><?php echo apply_filters( 'powen_footer_site_info_pipe',  ' |'  ); ?></span>

				<span class="powen-site-info">
					<?php
						$footerUrl = esc_url( 'http://supernovathemes.com' );
					?>
					<span class="powen-site-identity">Powen Lite Child <?php _e( 'by' , 'powen-lite' ); ?></span>
					<a href="<?php echo apply_filters( 'powen_theme_url', $footerUrl ); ?>" class="powen-site" rel="designer">
						<?php echo powen_mod('theme_author', 'Supernova Themes'); ?>
					</a>
				</span>

				<?php do_action( 'powen_footer_site_info_ends' ); ?>

			</div>
		</div><!-- powen-wrapper -->
	</div><!-- site-info -->

	<?php do_action( 'powen_footer_ends' ); ?>

	</footer><!-- #colophon -->

	<?php do_action( 'powen_after_footer' ); ?>

<!-- back to top -->
<div id="scroll-bar" class="footer-scroll"></div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>