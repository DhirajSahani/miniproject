<?php

	$real_estate_manager_tp_theme_css = "";

$real_estate_manager_theme_lay = get_theme_mod( 'real_estate_manager_tp_body_layout_settings','Full');
if($real_estate_manager_theme_lay == 'Container'){
$real_estate_manager_tp_theme_css .='body{';
	$real_estate_manager_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$real_estate_manager_tp_theme_css .='}';
$real_estate_manager_tp_theme_css .='@media screen and (max-width:575px){';
		$real_estate_manager_tp_theme_css .='body{';
			$real_estate_manager_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$real_estate_manager_tp_theme_css .='} }';
$real_estate_manager_tp_theme_css .='.page-template-front-page .menubar{';
	$real_estate_manager_tp_theme_css .='position: static;';
$real_estate_manager_tp_theme_css .='}';
$real_estate_manager_tp_theme_css .='.scrolled{';
	$real_estate_manager_tp_theme_css .='width: auto; left:0; right:0;';
$real_estate_manager_tp_theme_css .='}';
}else if($real_estate_manager_theme_lay == 'Container Fluid'){
$real_estate_manager_tp_theme_css .='body{';
	$real_estate_manager_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$real_estate_manager_tp_theme_css .='}';
$real_estate_manager_tp_theme_css .='@media screen and (max-width:575px){';
		$real_estate_manager_tp_theme_css .='body{';
			$real_estate_manager_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$real_estate_manager_tp_theme_css .='} }';
$real_estate_manager_tp_theme_css .='.page-template-front-page .menubar{';
	$real_estate_manager_tp_theme_css .='width: 99%';
$real_estate_manager_tp_theme_css .='}';		
$real_estate_manager_tp_theme_css .='.scrolled{';
	$real_estate_manager_tp_theme_css .='width: auto; left:0; right:0;';
$real_estate_manager_tp_theme_css .='}';
}else if($real_estate_manager_theme_lay == 'Full'){
$real_estate_manager_tp_theme_css .='body{';
	$real_estate_manager_tp_theme_css .='max-width: 100%;';
$real_estate_manager_tp_theme_css .='}';
}

$real_estate_manager_scroll_position = get_theme_mod( 'real_estate_manager_scroll_top_position','Right');
if($real_estate_manager_scroll_position == 'Right'){
$real_estate_manager_tp_theme_css .='#return-to-top{';
    $real_estate_manager_tp_theme_css .='right: 20px;';
$real_estate_manager_tp_theme_css .='}';
}else if($real_estate_manager_scroll_position == 'Left'){
$real_estate_manager_tp_theme_css .='#return-to-top{';
    $real_estate_manager_tp_theme_css .='left: 20px;';
$real_estate_manager_tp_theme_css .='}';
}else if($real_estate_manager_scroll_position == 'Center'){
$real_estate_manager_tp_theme_css .='#return-to-top{';
    $real_estate_manager_tp_theme_css .='right: 50%;left: 50%;';
$real_estate_manager_tp_theme_css .='}';
}

    
//Social icon Font size
$real_estate_manager_social_icon_fontsize = get_theme_mod('real_estate_manager_social_icon_fontsize');
	$real_estate_manager_tp_theme_css .='.media-links a i{';
$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_social_icon_fontsize).'px;';
$real_estate_manager_tp_theme_css .='}';

// site title font size option
$real_estate_manager_site_title_font_size = get_theme_mod('real_estate_manager_site_title_font_size', 30);{
$real_estate_manager_tp_theme_css .='.logo h1 , .logo p a{';
	$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_site_title_font_size).'px;';
$real_estate_manager_tp_theme_css .='}';
}

//site tagline font size option
$real_estate_manager_site_tagline_font_size = get_theme_mod('real_estate_manager_site_tagline_font_size', 15);{
$real_estate_manager_tp_theme_css .='.logo p{';
	$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_site_tagline_font_size).'px;';
$real_estate_manager_tp_theme_css .='}';
}

// related post
$real_estate_manager_related_post_mob = get_theme_mod('real_estate_manager_related_post_mob', true);
$real_estate_manager_related_post = get_theme_mod('real_estate_manager_remove_related_post', true);
$real_estate_manager_tp_theme_css .= '.related-post-block {';
if ($real_estate_manager_related_post == false) {
    $real_estate_manager_tp_theme_css .= 'display: none;';
}
$real_estate_manager_tp_theme_css .= '}';
$real_estate_manager_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_manager_related_post == false || $real_estate_manager_related_post_mob == false) {
    $real_estate_manager_tp_theme_css .= '.related-post-block { display: none; }';
}
$real_estate_manager_tp_theme_css .= '}';

//return to header mobile				
$real_estate_manager_return_to_header_mob = get_theme_mod('real_estate_manager_return_to_header_mob', true);
$real_estate_manager_return_to_header = get_theme_mod('real_estate_manager_return_to_header', true);
$real_estate_manager_tp_theme_css .= '.return-to-header{';
if ($real_estate_manager_return_to_header == false) {
    $real_estate_manager_tp_theme_css .= 'display: none;';
}
$real_estate_manager_tp_theme_css .= '}';
$real_estate_manager_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_manager_return_to_header == false || $real_estate_manager_return_to_header_mob == false) {
    $real_estate_manager_tp_theme_css .= '.return-to-header{ display: none; }';
}
$real_estate_manager_tp_theme_css .= '}';


//footer image
$real_estate_manager_footer_widget_image = get_theme_mod('real_estate_manager_footer_widget_image');
if($real_estate_manager_footer_widget_image != false){
$real_estate_manager_tp_theme_css .='#footer{';
	$real_estate_manager_tp_theme_css .='background: url('.esc_attr($real_estate_manager_footer_widget_image).');';
$real_estate_manager_tp_theme_css .='}';
}

// related product
$real_estate_manager_related_product = get_theme_mod('real_estate_manager_related_product',true);
if($real_estate_manager_related_product == false){
$real_estate_manager_tp_theme_css .='.related.products{';
	$real_estate_manager_tp_theme_css .='display: none;';
$real_estate_manager_tp_theme_css .='}';
}

//menu font size
$real_estate_manager_menu_font_size = get_theme_mod('real_estate_manager_menu_font_size', '');{
$real_estate_manager_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_menu_font_size).'px;';
$real_estate_manager_tp_theme_css .='}';
}

// menu text tranform
$real_estate_manager_menu_text_tranform = get_theme_mod( 'real_estate_manager_menu_text_tranform','');
if($real_estate_manager_menu_text_tranform == 'Uppercase'){
$real_estate_manager_tp_theme_css .='.main-navigation a {';
	$real_estate_manager_tp_theme_css .='text-transform: uppercase;';
$real_estate_manager_tp_theme_css .='}';
}else if($real_estate_manager_menu_text_tranform == 'Lowercase'){
$real_estate_manager_tp_theme_css .='.main-navigation a {';
	$real_estate_manager_tp_theme_css .='text-transform: lowercase;';
$real_estate_manager_tp_theme_css .='}';
}
else if($real_estate_manager_menu_text_tranform == 'Capitalize'){
$real_estate_manager_tp_theme_css .='.main-navigation a {';
	$real_estate_manager_tp_theme_css .='text-transform: capitalize;';
$real_estate_manager_tp_theme_css .='}';
}

// patient
// Retrieve the customer review setting from the theme customization options.
$real_estate_manager_customer_review = get_theme_mod('real_estate_manager_customer_review', '');

// Check if the customer review is empty.
if (empty($real_estate_manager_customer_review)) {
    // Initialize the CSS variable if not already done.
    if (!isset($real_estate_manager_tp_theme_css)) {
        $real_estate_manager_tp_theme_css = '';
    }
    
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $real_estate_manager_tp_theme_css .= '.customzer-rating {';
    $real_estate_manager_tp_theme_css .= 'padding: 0; border: 0; border-radius: 0;';
    $real_estate_manager_tp_theme_css .= '}';
    // Append the necessary CSS to remove padding, border, and border-radius when the review is empty.
    $real_estate_manager_tp_theme_css .= '.half-width-border-top::before{';
    $real_estate_manager_tp_theme_css .= 'right:0; top:-40px;';
    $real_estate_manager_tp_theme_css .= '}';
}

/*------------- Blog Page------------------*/
	$real_estate_manager_post_image_round = get_theme_mod('real_estate_manager_post_image_round', 0);
	if($real_estate_manager_post_image_round != false){
		$real_estate_manager_tp_theme_css .='.blog .box-image img{';
			$real_estate_manager_tp_theme_css .='border-radius: '.esc_attr($real_estate_manager_post_image_round).'px;';
		$real_estate_manager_tp_theme_css .='}';
	}

	$real_estate_manager_post_image_width = get_theme_mod('real_estate_manager_post_image_width', '');
	if($real_estate_manager_post_image_width != false){
		$real_estate_manager_tp_theme_css .='.blog .box-image img{';
			$real_estate_manager_tp_theme_css .='Width: '.esc_attr($real_estate_manager_post_image_width).'px;';
		$real_estate_manager_tp_theme_css .='}';
	}

	$real_estate_manager_post_image_length = get_theme_mod('real_estate_manager_post_image_length', '');
	if($real_estate_manager_post_image_length != false){
		$real_estate_manager_tp_theme_css .='.blog .box-image img{';
			$real_estate_manager_tp_theme_css .='height: '.esc_attr($real_estate_manager_post_image_length).'px;';
		$real_estate_manager_tp_theme_css .='}';
	}

// footer widget title font size
	$real_estate_manager_footer_widget_title_font_size = get_theme_mod('real_estate_manager_footer_widget_title_font_size', '');{
	$real_estate_manager_tp_theme_css .='#footer h3{';
		$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_footer_widget_title_font_size).'px;';
	$real_estate_manager_tp_theme_css .='}';
	}

	// Copyright text font size
	$real_estate_manager_footer_copyright_font_size = get_theme_mod('real_estate_manager_footer_copyright_font_size', '');{
	$real_estate_manager_tp_theme_css .='#footer .site-info p{';
		$real_estate_manager_tp_theme_css .='font-size: '.esc_attr($real_estate_manager_footer_copyright_font_size).'px;';
	$real_estate_manager_tp_theme_css .='}';
	}

	// copyright padding
	$real_estate_manager_footer_copyright_top_bottom_padding = get_theme_mod('real_estate_manager_footer_copyright_top_bottom_padding', '');
	if ($real_estate_manager_footer_copyright_top_bottom_padding !== '') { 
	    $real_estate_manager_tp_theme_css .= '.site-info {';
	    $real_estate_manager_tp_theme_css .= 'padding-top: ' . esc_attr($real_estate_manager_footer_copyright_top_bottom_padding) . 'px;';
	    $real_estate_manager_tp_theme_css .= 'padding-bottom: ' . esc_attr($real_estate_manager_footer_copyright_top_bottom_padding) . 'px;';
	    $real_estate_manager_tp_theme_css .= '}';
	}
