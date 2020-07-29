<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package azera-shop
 */

$custom_slug = '/design-your-own/';
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  
  
<!-- <script src="--><?php //echo get_site_url() . $custom_slug;?><!--assets/vendor/jquery-3.2.1.min.js"></script>-->
    <!-- Bootstrap JS-->  
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
  <script src="https://ixisio.github.io/bootstrap-touch-carousel/js/bootstrap-touch-carousel.js"></script>

 <script src="<?php echo get_site_url() . $custom_slug;?>assets/js/html2canvas.min.js"></script>
  <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" >-->
  <link href="<?php echo get_site_url() . $custom_slug;?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="<?php echo get_site_url() . $custom_slug;?>assets/css/main.css" rel="stylesheet" media="all">
     
 
<?php wp_head(); ?>
<style>
	<?php if(is_page(413)) { ?>
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}		
		<?php } ?>	
	<?php if(is_page(407)) { ?>
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}		
		<?php } ?>
	<?php if(is_page(5)) { ?>
		.entry-header{
			display:none;
		}
		.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated{
			padding-top:0px;
		}
		#primary{
			margin-top:-7px;
		}
		.woocommerce ul.products li.product{
			width:100%;
		}
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}	
		
	<?php } ?>	
	<?php if(is_page(13)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product{
			width:100%;
		}
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}						
	<?php } ?>	
	<?php if(is_page(11)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product{
			width:100%;
		}
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}						
	<?php } ?>
	<?php if(is_page(15)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product{
			width:100%;
		}
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}						
	<?php } ?>	
	<?php if(is_page(17)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product{
			width:100%;
		}
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}						
	<?php } ?>	
	<?php if(is_page(156)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}		
		#accessories{
			display:none;
		}				
		#wedges{
			display:none;
		}		
		
	<?php } ?>	
	<?php if(is_page(152)) { ?>	
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}	
		.woocommerce ul.products li.product .button, .woocommerce .products .product .button {
			display:none;
		}		
		#accessories{
			display:none;
		}				
		#wedges{
			display:none;
		}		
		
	<?php } ?>						
	<?php if(is_page(354)) { ?>
		.entry-header{
			display:none;
		}
		#primary{
			margin-top:-7px;
		}			
	<?php } ?>
		i{
			color:white;
		}	
		.mega-menu-description{
			display:none !important;
		}
		#mega-menu-182-0{
			margin-left:15%;
		}		
		#mega-menu-182-0-0{
			border-left: 2px solid !important;
			border-right: 2px solid !important;
		}
		#mega-menu-182-0-1{
			height:210px !important;
			border-right: 2px solid !important;
		}	
		#mega-menu-182-0-2{
			height:210px !important;
			border-right: 2px solid !important;
		}						
</style>
	<?php if(is_page(354)) { 
		$cid = $_GET['cid'];
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		$sql = "SELECT * FROM lj_customised_orders WHERE id = {$cid}";
		$result = mysqli_query($conn,$sql);
		
		$row = mysqli_fetch_assoc($result);
		$productid = $row['id'];
		$model = $row['model'];
		$orientation = $row['orientation'];
		$finish = $row['finish'];
		$neck = $row['neck'];
		$alignment1 = $row['alignment1'];
		$alignmentcolor1 = $row['alignmentcolor1'];
		$alignment2 = $row['alignment2'];
		$alignmentcolor2 = $row['alignmentcolor2'];
		$milling = $row['milling'];
		$engraving = $row['engraving'];
		$personalisation = $row['personalisation'];
		$cavity = $row['cavity'];
		$bumper = $row['bumper'];
		$headweight = $row['headweight'];
		$lieangle = $row['lieangle'];
		$loftangle = $row['loftangle'];
		$grip = $row['grip'];
		$headcover = $row['headcover'];
		$package = $row['package'];
		$packages_price = $row['packages_price'];
		$headcover_price = $row['headcover_price'];
		$grip_price = $row['grip_price'];
		$loft_price = $row['loft_price'];
		$lie_price = $row['lie_price'];
		$headweight_price = $row['headweight_price'];
		$bumper_price = $row['bumper_price'];
		$cavity_price = $row['cavity_price'];
		$personalisation_price = $row['personalisation_price'];
		$engraving_price = $row['engraving_price'];
		$milling_price = $row['milling_price'];
		$alignmentcolor2_price = $row['alignmentcolor2_price'];
		$alignmentcolor1_price = $row['alignmentcolor1_price'];
		$alignment2_price = $row['alignment2_price'];
		$alignment1_price = $row['alignment1_price'];
		$neck_price = $row['neck_price'];
		$finish_price = $row['finish_price'];
		$orientation_price = $row['orientation_price'];
		$model_price = $row['model_price'];
		
		
	 } ?>	
<?php if(is_page(354)) { ?>	
<script>	
jQuery(document).ready(function(){
var model = '<?php echo $model; ?>';
var model_price = '<?php echo $model_price; ?>';
jQuery('#model_value').text(model);
jQuery('#model_price').text(model_price);
var orientation = '<?php echo $orientation; ?>';
var orientation_price = '<?php echo $orientation_price; ?>';
jQuery('#orientation_value').text(orientation);
jQuery('#orientation_price').text(orientation_price);
var finish = '<?php echo $finish; ?>';
var finish_price = '<?php echo $finish_price; ?>';
jQuery('#finish_value').text(finish);
jQuery('#finish_price').text(finish_price);
var neck = '<?php echo $neck; ?>';
var neck_price = '<?php echo $neck_price; ?>';
jQuery('#neck_value').text(neck);
jQuery('#neck_price').text(neck_price);
var alignment1 = '<?php echo $alignment1; ?>';
var alignment1_price = '<?php echo $alignment1_price; ?>';
jQuery('#alignment1_value').text(alignment1);
jQuery('#alignment1_price').text(alignment1_price);
var alignmentcolor1 = '<?php echo $alignmentcolor1; ?>';
var alignmentcolor1_price = '<?php echo $alignmentcolor1_price; ?>';
jQuery('#alignment1color_value').text(alignmentcolor1);
jQuery('#alignment1color_price').text(alignmentcolor1_price);
var alignment2 = '<?php echo $alignment2; ?>';
var alignment2_price = '<?php echo $alignment2_price; ?>';
jQuery('#alignment2_value').text(alignment2);
jQuery('#alignment2_price').text(alignment2_price);
var alignmentcolor2 = '<?php echo $alignmentcolor2; ?>';
var alignmentcolor2_price = '<?php echo $alignmentcolor2_price; ?>';
jQuery('#alignment2color_value').text(alignmentcolor2);
jQuery('#alignment2color_price').text(alignmentcolor2_price);
var milling = '<?php echo $milling; ?>';
var milling_price = '<?php echo $milling_price; ?>';
jQuery('#milling_value').text(milling);
jQuery('#milling_price').text(milling_price);
var engraving = '<?php echo $engraving; ?>';
var engraving_price = '<?php echo $engraving_price; ?>';
jQuery('#engraving_value').text(engraving);
jQuery('#engraving_price').text(engraving_price);
var personalisation = '<?php echo $personalisation; ?>';
var personalisation_price = '<?php echo $personalisation_price; ?>';
jQuery('#personalisation_value').text(personalisation);
jQuery('#personalisation_price').text(personalisation_price);
var cavity = '<?php echo $cavity; ?>';
var cavity_price = '<?php echo $cavity_price; ?>';
jQuery('#cavity_value').text(cavity);
jQuery('#cavity_price').text(cavity_price);
var bumper = '<?php echo $bumper; ?>';
var bumper_price = '<?php echo $bumper_price; ?>';
jQuery('#bumper_value').text(bumper);
jQuery('#bumper_price').text(bumper_price);
var headweight = '<?php echo $headweight; ?>';
var headweight_price = '<?php echo $headweight_price; ?>';
jQuery('#headweight_value').text(headweight);
jQuery('#headweight_price').text(headweight_price);
var lieangle = '<?php echo $lieangle; ?>';
var lie_price = '<?php echo $lie_price; ?>';
jQuery('#lie_value').text(lieangle);
jQuery('#lie_price').text(lie_price);
var loftangle = '<?php echo $loftangle; ?>';
var loft_price = '<?php echo $loft_price; ?>';
jQuery('#loft_value').text(loftangle);
jQuery('#loft_price').text(loft_price);
var grip = '<?php echo $grip; ?>';
var grip_price = '<?php echo $grip_price; ?>';
jQuery('#grip_value').text(grip);
jQuery('#grip_price').text(grip_price);
var headcover = '<?php echo $headcover; ?>';
var headcover_price = '<?php echo $headcover_price; ?>';
jQuery('#headcover_value').text(headcover);
jQuery('#headcover_price').text(headcover_price);
var packages = '<?php echo $package; ?>';
var packages_price = '<?php echo $packages_price; ?>';
var product_id = '<?php echo $productid; ?>';
var product_name = '<?php echo "Custom Club #".$productid; ?>';
jQuery('#package_value').text(packages);
jQuery('#package_price').text(packages_price);
var total = parseFloat(packages_price)+parseFloat(headcover_price)+parseFloat(grip_price)+parseFloat(loft_price)+parseFloat(lie_price)+parseFloat(headweight_price)+parseFloat(bumper_price)+parseFloat(cavity_price)+parseFloat(personalisation_price)+parseFloat(engraving_price)+parseFloat(milling_price)+parseFloat(alignmentcolor2_price)+parseFloat(alignment2_price)+parseFloat(alignmentcolor1_price)+parseFloat(alignment1_price)+parseFloat(neck_price)+parseFloat(finish_price)+parseFloat(orientation_price)+parseFloat(model_price);
total = total.toFixed(2);
var gst = total*10/100;
var grand_total = parseFloat(total) + parseFloat(gst);
jQuery('#gt').text(grand_total);
jQuery('#gst').text(gst);
jQuery('.amount').val(grand_total);
jQuery('.product_id').val(product_id);
jQuery('.product_name').val(product_name);

});		
</script>	
<?php } ?>
<?php if(is_page(413)) {
if(isset($_GET)){	
$product_id = $_GET['product_id'];
$full_name = $_GET['full_name'];
$email_address = $_GET['email_address'];
$phone_number = $_GET['phone_number'];
$address = $_GET['address'];
$suburb = $_GET['suburb'];
$country = $_GET['country'];
$post_code = $_GET['post_code'];
$comment = $_GET['comment'];
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		$sql = "INSERT INTO lj_customised_order_details VALUES (NULL,{$product_id},'{$full_name}','{$email_address}','{$phone_number}','{$address}','{$suburb}','{$country}','{$post_code}','{$comment}')";
		$result = mysqli_query($conn,$sql);
}
	
 } ?>	
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?> dir="
																			<?php
                                                                        if ( is_rtl() ) {
                                                                        	    echo 'rtl';
                                                                        } else {
	                                                                            echo 'ltr';
                                                                        }
?>
">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'azera-shop' ); ?></a>
<?php
/**
 * Preloader
 */

global $wp_customize;

if ( ! isset( $wp_customize ) && is_page_template( 'template-frontpage.php' ) ) {

	$azera_shop_disable_preloader = get_theme_mod( 'azera_shop_disable_preloader' );

	if ( isset( $azera_shop_disable_preloader ) && ( $azera_shop_disable_preloader != 1 ) ) {

		echo '<div class="preloader">';
		echo '<div class="status">&nbsp;</div>';
		echo '</div>';

	}
}

/**
 * SECTION: HOME / HEADER
 */

?>
<header itemscope itemtype="http://schema.org/WPHeader" id="masthead" role="banner" data-stellar-background-ratio="0.5" class="header header-style-one site-header">

	<!-- COLOR OVER IMAGE -->
	<?php
	$azera_shop_sticky_header = get_theme_mod( 'azera_shop_sticky_header', false );
	if ( isset( $azera_shop_sticky_header ) && ( (bool) $azera_shop_sticky_header !== true ) ) {
		$fixedheader = 'sticky-navigation-open';
	} else {
		if ( ! is_page_template( 'template-frontpage.php' ) ) {
			$fixedheader = 'sticky-navigation-open';
		} else {
			$fixedheader = '';
			if ( 'posts' != get_option( 'show_on_front' ) ) {
				if ( isset( $azera_shop_sticky_header ) && ( $azera_shop_sticky_header != 1 ) ) {
					$fixedheader = 'sticky-navigation-open';
				} else {
					$fixedheader = '';
				}
			}
		}
	}
	?>
	<div class="overlay-layer-nav
	<?php
    if ( ! empty( $fixedheader ) ) {
        echo esc_attr( $fixedheader );
    }
    ?>
">

		<!-- STICKY NAVIGATION -->
		<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll">
			<!-- CONTAINER -->
			<div class="container">



				<div class="header-container-wrap">

					<div class="navbar-header navbar-header-wrap">

						<!-- LOGO -->
						<div class="header-logo-wrap">
							<?php
							$azera_shop_logo = get_theme_mod( 'azera_shop_logo' );
							$azera_shop_logo = apply_filters( 'azera_shop_translate_single_string', $azera_shop_logo, 'Logo' );
							if ( ! empty( $azera_shop_logo ) ) {
								echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="navbar-brand" title="' . get_bloginfo( 'title' ) . '">';
								echo '<img src="' . esc_url( $azera_shop_logo ) . '" alt="' . get_bloginfo( 'title' ) . '">';
								echo '</a>';
								echo '<div class="header-logo-wrap text-header azera_shop_only_customizer">';
								echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';
								echo '<p itemprop="description" id="site-description" class="site-description">' . get_bloginfo( 'description' ) . '</p>';
								echo '</div>';
							} else {
								if ( isset( $wp_customize ) ) {
									echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="navbar-brand azera_shop_only_customizer" title="' . get_bloginfo( 'title' ) . '">';
									echo '<img src="" alt="' . get_bloginfo( 'title' ) . '">';
									echo '</a>';
								}
								echo '<div class="header-logo-wrap text-header">';
								echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';
								echo '<p itemprop="description" id="site-description" class="site-description">' . get_bloginfo( 'description' ) . '</p>';
								echo '</div>';
							}
							?>
						</div>

						<?php /*
						<div class="header-button-wrap">
							<button title='<?php _e( 'Toggle Menu', 'azera-shop' ); ?>' aria-controls='menu-main-menu' aria-expanded='false' type="button" class="navbar-toggle menu-toggle" id="menu-toggle" data-toggle="collapse" data-target="#menu-primary">
								<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'azera-shop' ); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!-- .header-button-wrap -->
						*/ ?>

					</div><!-- .navbar-header-wrap -->


					<!-- MENU -->
					<div class="header-nav-wrap">
						<div itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="<?php esc_html_e( 'Primary Menu', 'azera-shop' ); ?>" id="menu-primary" class="navbar-collapse collapse in">
							<!-- LOGO ON STICKY NAV BAR -->
							<div id="site-header-menu" class="site-header-menu">
								<nav id="site-navigation" class="main-navigation" role="navigation">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
                                            'menu_class'     => 'primary-menu small-text',
                                            'depth'          => 4,
                                            'fallback_cb'    => 'azera_shop_wp_page_menu',
                                        )
									);
									?>
								</nav>
							</div>
						</div><!-- .navbar-collapse -->
					</div><!-- .header-nav-wrap -->

					<?php if ( class_exists( 'WooCommerce' ) ) { ?>
						<div class="header-icons-wrap">

							<div class="header-search">
								<div class="fa fa-search header-search-button"></div>
								<div class="header-search-input">
									<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'azera-shop' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'azera-shop' ); ?>" />
										<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'azera-shop' ); ?>" />
										<input type="hidden" name="post_type" value="product" />
									</form>
								</div>
							</div>

							<?php if ( function_exists( 'WC' ) ) { ?>
								<div class="navbar-cart-inner">
									<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'azera-shop' ); ?>" class="cart-contents">
										<span class="fa fa-shopping-cart"></span>
										<span class="cart-item-number"><?php echo trim( WC()->cart->get_cart_contents_count() ); ?></span>
									</a>
								</div>
							<?php } ?>

						</div>
					<?php } ?>

				</div><!--  -->



			</div>
			<!-- /END CONTAINER -->
		</div>
		<!-- /END STICKY NAVIGATION -->
