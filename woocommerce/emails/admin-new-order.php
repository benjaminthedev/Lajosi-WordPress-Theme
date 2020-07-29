<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails/HTML
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer billing full name */ ?>
<p><?php printf( esc_html__( 'You’ve received the following order from %s:', 'woocommerce' ), $order->get_formatted_billing_full_name() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/*

//code by tania 25-jun-2019 starts

 $cart = WC()->cart->get_cart();



foreach($cart as $value)

{

$_product =  wc_get_product( $value['data']->get_id() );

if(isset($value['lpdescription']))

{

$prod_vartn=explode(";",$value['lpdescription']);

echo "<table style='padding:0px;margin-bottom:10px;border-color:#ddd;width:100%;' border=1><tr><th><b style='text-transform:uppercase;'>Product :  ".$_product->get_title()."</b><br/></th></tr>";

for($i=0;$i<count($prod_vartn);$i++)

{

echo "<tr><td style='padding:5px;border:thin none;'>".$prod_vartn[$i]."</td></tr>";

}

echo "</table>";

}

}

 

*/

//code by tania 25-jun-2019 ends


/* -------------Start--------------------------Commented block as it is placed in email-order-details emial template which gets repeated in this admin new order email ------------------

$order_id = $order->get_id();

if(!empty($order_id)) {



	$option_map = array(

		'orientation' => 'Orientation',

		'NeckSelection' => 'Neck Selection',

		'Finish' => 'Finish',

		'RearAlignment' => 'Rear Alignment',

		'RearAlignmentColor' => 'Rear Alignment Color',

		'TopAlignment' => 'Top Alignment',

		'TopAlignmentColor' => 'Top Alignment Color',

		'FaceMilling' => 'Face Milling',

		'FaceEngraving' => 'Face Engraving',

		'FaceEngravingColor' => 'Face Engraving Color',

		'CavityEngraving' => 'Cavity Engraving',

		'CavityEngravingColor' => 'Cavity Engraving Color',

		'HeadweightSelection' => 'Headweight Selection',

		'HeadWeightSelectionOthers' => 'HeadWeight Selection Others',

		'Shaftlengths' => 'Shaft Length',

		'ShaftlengthOthers' => 'Shaft Length (Other)',

		'LieAngleSelection' => 'Lie Angle Selection',

		'LieAngleSelectionOthers' => 'Lie Angle Selection (Other)',

		'LoftAngleSelection' => 'Loft Angle Selection',

		'LoftAngleSelectionOthers' => 'Loft Angle Selection (Other)',

		'Personalization' => 'Personalisation',

		'GripSelection' => 'Grip Selection',

		'grip_sel_colr' => 'Grip Selection Colour',

		'GripSelectionOther' => 'Grip Selection (Other)',

		'AddPackageOption' => 'Add Package Option',

		'AddPackageOptionOther' => 'Add Package Option (Other)',

		'HeadcoverSelection' => 'Headcover Selection',

		'HeadcoverSelectionOther' => 'Headcover Selection (Other)'

	);



	global $wpdb;



	$custom_items = $wpdb->get_results($wpdb->prepare("SELECT p.post_title AS name, opa.* FROM order_prod_attributes AS opa LEFT JOIN {$wpdb->prefix}posts AS p ON opa.prod_id = p.ID WHERE opa.order_id = %d AND opa.orientation != '' AND opa.NeckSelection != ''", $order_id));



	if(!empty($custom_items)) {



		foreach($custom_items as $c_item) {



			printf("<table style='padding:0px;margin-bottom:10px;border-color:#ddd;width:100%%;' border=1><tr><th><b style='text-transform:uppercase;'>Customised Product Selections: %s</b><br/></th></tr>", $c_item->name);



			foreach($option_map as $opt_key => $opt_name) {

				$option = isset($c_item->$opt_key) ? $c_item->$opt_key : null;

				if(empty($option)) continue;

				printf("<tr><td style='padding:5px;border:thin none;'><b>%s:</b> %s</td></tr>", $opt_name, $option);

			}



			echo '</table><p>&nbsp;</p>';



		}



	}



}

// -------------End--------------------------Commented block as it is placed in email-order-details emial template which gets repeated in this admin new order email ------------------
*/

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additonal content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );