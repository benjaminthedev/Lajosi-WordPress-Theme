<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package azera-shop
 */
?>

	<footer itemscope itemtype="http://schema.org/WPFooter" id="footer" role="contentinfo" class="<?php echo apply_filters( 'azera_shop_footer_class_filter', 'footer grey-bg' ); ?>">

		<div class="container">
			<div class="footer-widget-wrap">
			  
				<?php
				if ( is_active_sidebar( 'footer-area' ) ) {
				?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-1" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 1', 'azera-shop' ); ?>">
					<?php
						dynamic_sidebar( 'footer-area' );
					?>
					</div>
				<?php
				}
				if ( is_active_sidebar( 'footer-area-2' ) ) {
				?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-2" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 2', 'azera-shop' ); ?>">
					<?php
						dynamic_sidebar( 'footer-area-2' );
					?>
					</div>
				<?php
				}
				if ( is_active_sidebar( 'footer-area-3' ) ) {
				?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-3" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 3', 'azera-shop' ); ?>">
					<?php
						dynamic_sidebar( 'footer-area-3' );
						?>
						</div>
				<?php
				}
				if ( is_active_sidebar( 'footer-area-4' ) ) {
				?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-4" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 4', 'azera-shop' ); ?>">
					<?php
						dynamic_sidebar( 'footer-area-4' );
					?>
					</div>
				<?php
				}
				?>

			</div><!-- .footer-widget-wrap -->

			<div class="footer-bottom-wrap">
				<?php
					global $wp_customize;

					/* COPYRIGHT */
					$azera_shop_copyright = get_theme_mod( 'azera_shop_copyright', 'Themeisle' );
					$azera_shop_copyright = apply_filters( 'azera_shop_translate_single_string', $azera_shop_copyright, 'Copyright' );

				if ( ! empty( $azera_shop_copyright ) ) {
					//echo '<span class="azera_shop_copyright_content">' . esc_attr( $azera_shop_copyright ) . '</span>';
					$site_url = site_url();
					echo "<img src='{$site_url}/wp-content/uploads/2018/05/Lajosi-White.png' width='200' alt='Lajosi'>";
				} elseif ( isset( $wp_customize ) ) {
					echo '<span class="azera_shop_copyright_content azera_shop_only_customizer"></span>';
				}

					/* OPTIONAL FOOTER LINKS */

					echo '<div itemscope role="navigation" itemtype="http://schema.org/SiteNavigationElement" id="menu-secondary" aria-label="' . esc_html__( 'Secondary Menu', 'azera-shop' ) . '">';
						echo '<h1 class="screen-reader-text">' . esc_html__( 'Secondary Menu', 'azera-shop' ) . '</h1>';
						wp_nav_menu(
							array(
								'theme_location' => 'azera_shop_footer_menu',
								'container'      => false,
								'menu_class'     => 'footer-links small-text',
								'depth'          => 1,
								'fallback_cb'    => false,
							)
						);
						echo '</div>';
						/* SOCIAL ICONS */

						$azera_shop_social_icons = get_theme_mod( 'azera_shop_social_icons' );

						if ( ! azera_shop_general_repeater_is_empty( $azera_shop_social_icons ) ) {
							$azera_shop_social_icons_decoded = json_decode( $azera_shop_social_icons );
							?>

							<ul class="social-icons">
								<?php
								foreach ( $azera_shop_social_icons_decoded as $azera_shop_social_icon ) {
									$icon = ! empty( $azera_shop_social_icon->icon_value ) ? apply_filters( 'azera_shop_translate_single_string', $azera_shop_social_icon->icon_value, 'Social icons in footer' ) : '';
									$link = ! empty( $azera_shop_social_icon->link ) ? apply_filters( 'azera_shop_translate_single_string', $azera_shop_social_icon->link, 'Social icons in footer' ) : '';

									if ( ! empty( $icon ) && $icon !== 'No Icon' && ! empty( $link ) ) {
									?>
										<li>
											<a href="<?php echo esc_url( $link ); ?>">
												<span class="screen-reader-text"><?php echo wp_kses_post( $icon ); ?></span>
												<i style="color:white;" class="fa azera-shop-footer-icons <?php echo esc_attr( $icon ); ?> transparent-text-dark" aria-hidden="true"></i>
											</a>
										</li>
										<?php
									}
								}
								?>
							</ul>
							<?php
						}// End if().
						echo do_shortcode( '[mailmunch-form id="752147"]' );
				?>

			</div><!-- .footer-bottom-wrap -->

			<?php azera_shop_bottom_footer_trigger(); ?>

		</div><!-- container -->

		<?php azera_shop_after_footer_trigger(); ?>

	</footer>

	<?php wp_footer(); ?>
<?php if(is_page(17)) { ?>	
<script>
jQuery(document).ready(function(){
	jQuery( "<label>Name <span style='color:red;'>*</span></label>" ).insertBefore( "#pirate-forms-contact-name" );

	jQuery( "<label>Email <span style='color:red;'>*</span></label>" ).insertBefore( "#pirate-forms-contact-email" );

	jQuery( "<label>Message <span style='color:red;'></span></label>" ).insertBefore( "#pirate-forms-contact-message" );

});
</script>	
<?php } ?>
<?php if(is_page(152)) { ?>	
<script>
jQuery(document).ready(function(){
//alert('I iz customisation');
jQuery("#viewputter").click(function(){
//alert("I iz clicked");
var model = jQuery(".model:checked").val();
var model_price = jQuery(".model:checked").data('price');
var orientation = jQuery(".orientation:checked").val();
var orientation_price = jQuery(".orientation:checked").data('price');
var finish = jQuery(".finish:checked").val();
var finish_price = jQuery(".finish:checked").data('price');
var neck = jQuery(".neck:checked").val();
var neck_price = jQuery(".neck:checked").data('price');
var alignment1 = jQuery(".alignment1:checked").val();
var alignment1_price = jQuery(".alignment1:checked").data('price');
var alignment2 = jQuery(".alignment2:checked").val();
var alignment2_price = jQuery(".alignment2:checked").data('price');
var alignmentcolor1 = jQuery(".alignmentcolor1:checked").val();
var alignmentcolor1_price = jQuery(".alignmentcolor1:checked").data('price');
var alignmentcolor2 = jQuery(".alignmentcolor2:checked").val();
var alignmentcolor2_price = jQuery(".alignmentcolor2:checked").data('price');
var milling = jQuery(".milling:checked").val();
var milling_price = jQuery(".milling:checked").data('price');
var engraving = jQuery(".engraving:checked").val();
var engraving_price = jQuery(".engraving:checked").data('price');
var personalisation = jQuery(".personalisation:checked").val();
var personalisation_price = jQuery(".personalisation:checked").data('price');
var cavity = jQuery(".cavity:checked").val();
var cavity_price = jQuery(".cavity:checked").data('price');
var bumper = jQuery(".bumper:checked").val();
var bumper_price = jQuery(".bumper:checked").data('price');
var headweight = jQuery(".headweight:checked").val();
var headweight_price = jQuery(".headweight:checked").data('price');
var lie = jQuery(".lie:checked").val();
var lie_price = jQuery(".lie:checked").data('price');
var loft = jQuery(".loft:checked").val();
var loft_price = jQuery(".loft:checked").data('price');
var grip = jQuery(".grip:checked").val();
var grip_price = jQuery(".grip:checked").data('price');
var headcover = jQuery(".headcover:checked").val();
var headcover_price = jQuery(".headcover:checked").data('price');
var packages = jQuery(".package:checked").val();
var packages_price = jQuery(".package:checked").data('price');
jQuery.ajax({
         type: "POST",
         url: "<?php echo get_site_url();?>/add_customisation.php",
         data: {model: model, orientation:orientation, finish:finish, neck:neck, alignment1: alignment1, alignment2: alignment2, alignmentcolor1: alignmentcolor1, alignmentcolor2:alignmentcolor2, milling:milling, engraving:engraving, personalisation:personalisation, cavity:cavity, bumper:bumper, headweight:headweight, lie:lie, loft:loft, grip:grip, headcover:headcover, packages:packages, packages_price:packages_price, headcover_price:headcover_price, grip_price:grip_price, loft_price:loft_price, lie_price:lie_price, headweight_price:headweight_price, bumper_price:bumper_price, cavity_price:cavity_price, personalisation_price:personalisation_price, engraving_price:engraving_price, milling_price:milling_price, alignmentcolor2_price:alignmentcolor2_price, alignmentcolor1_price:alignmentcolor1_price, alignment2_price:alignment2_price, alignment1_price:alignment1_price, neck_price:neck_price, finish_price:finish_price, orientation_price:orientation_price, model_price:model_price},
         success: function(data){
              //alert("Data Saved!!");
              console.log(data);
              
              window.location = "<?php echo get_site_url() ?>/custom-checkout?cid="+data;
         }
});

});
});
</script>	
<?php } ?>
</body>
</html>
