<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// @todo - ver 1.3 - check all texts
/**
 * Settings for 1Pay Gateway.
 */
return array(
	'enabled' => array(
		'title'   => __( 'Enable/Disable', 'woo-viet' ),
		'type'    => 'checkbox',
		'label'   => __( 'OnePay Domestic Gateway (by Woo Viet)', 'woo-viet' ),
		'default' => 'yes'
	),
	'title' => array(
		'title'       => __( 'Title', 'woo-viet' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woo-viet' ),
		'default'     => __( 'OnePay Domestic Gateway', 'woo-viet' ),
		'desc_tip'    => true,
	),
	'description' => array(
		'title'       => __( 'Description', 'woo-viet' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woo-viet' ),
		'default'     => __( 'With OnePay Bank, you can make payment by using any local Vietnam ATM card.', 'woo-viet' )
	),
	'api_details' => array(
		'title'       => __( 'API Credentials', 'woo-viet' ),
		'type'        => 'title',
		'description' => sprintf( __( 'Enter your OnePay API credentials. Contact OnePay to have your credentials %shere%s.', 'woo-viet' ), '<a href="http://onepay.com.vn/home/en/contact-us.html">', '</a>' ),
	),
	'merchant_id' => array(
		'title'       => __( 'Merchant ID', 'woo-viet' ),
		'type'        => 'text',
		'description' => __( 'Get your Merchant ID from OnePay.', 'woo-viet' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Required. Provided by OnePay.', 'woo-viet' )
	),
	'access code' => array(
		'title'       => __( 'Access Code', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Get your Access Code from from OnePay.', 'woo-viet' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Required. Provided by OnePay.', 'woo-viet' )
	),
	'secure_secret' => array(
		'title'       => __( 'Secure Secret', 'woocommerce' ),
		'type'        => 'text',
		'description' => __( 'Get your Secure Secret from from OnePay.', 'woo-viet' ),
		'default'     => '',
		'desc_tip'    => true,
		'placeholder' => __( 'Required. Provided by OnePay.', 'woo-viet' )
	),
	/*
	// @todo: Add more help info later

	'help_title' => array(
		'title'       => __( 'More info about 1Pay', 'woo-viet' ),
		'type'        => 'title',
		'description' => __( 'You can see more info at this link.', 'woo-viet' )
	),
	*/

);