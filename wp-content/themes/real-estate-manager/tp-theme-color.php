<?php

$real_estate_manager_tp_theme_css = '';

$real_estate_manager_tp_color_option = get_theme_mod('real_estate_manager_tp_color_option');

if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='button[type="submit"], .center1 .ring::before, .center2 .ring::before, .main-navigation .current_page_item a, .top-main, .topbar, .header-details i, .search-bar i, .inner_searchbox button[type="submit"], .main-navigation ul ul, .main-navigation ul.sub-menu li a, .main-navigation .menu > ul > li.highlight, .readmore-btn a, #slider .slider-btn1, .main-tab .tablinks.active, .slider-contact-form button, .for-sale-label, .bottom-icons a:hover, .share-icon i.share-box:hover, .share-options i:hover, .woocommerce ul.products li.product .button,
a.checkout-button.button.alt.wc-forward, .woocommerce ul.products li.product .onsale,.woocommerce span.onsale, .wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button, .page-numbers, .prev.page-numbers,
.next.page-numbers, span.meta-nav, .error-404 [type="submit"], #theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, #theme-sidebar button[type="submit"],
#footer button[type="submit"], #comments input[type="submit"], .site-info, .toggle-nav button, .toggle-nav i{';
$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='.wc-block-components-product-badge{';
$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_color_option).'!important;';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='a,a:hover, #theme-sidebar .textwidget a,
#footer .textwidget a,
.comment-body a,
.entry-content a,
.entry-summary a,#main-content p a, .content-area a, .logo h1 a:hover, .logo p a:hover, .header-details i:hover, .main-navigation a:hover, .box-info i, #slider .inner_carousel h1 a:hover, #slider .slider-btn1:hover, #slider .owl-nav button.owl-prev i:hover,
#slider .owl-nav button.owl-next i:hover, .main-tab .tablinks, .slider-contact-form button:hover, .mainserv-content h3 a, .home-location i, span.main-date, .home_fartures i, .cours-price, .prev.page-numbers:focus,
.prev.page-numbers:hover,
.next.page-numbers:focus,
.next.page-numbers:hover, .wp-block-search .wp-block-search__label,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #footer li a:hover, #theme-sidebar a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer li a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$real_estate_manager_tp_theme_css .='color: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='.center1, .center2, #about h2:before{';
$real_estate_manager_tp_theme_css .='border-top-color: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='.page-box, #cat-list .serv-description::after, .singlepage-main, #theme-sidebar section{';
$real_estate_manager_tp_theme_css .='border-bottom-color: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='.center1, .center2, .page-box, .singlepage-main, #theme-sidebar section{';
$real_estate_manager_tp_theme_css .='border-left-color: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_color_option != false){
$real_estate_manager_tp_theme_css .='.wp-block-tag-cloud a:hover, #theme-sidebar .tagcloud a:hover,#sidebar p.wp-block-tag-cloud a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
$real_estate_manager_tp_theme_css .='border-color: '.esc_attr($real_estate_manager_tp_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}

//preloader
$real_estate_manager_tp_preloader_color1_option = get_theme_mod('real_estate_manager_tp_preloader_color1_option');
$real_estate_manager_tp_preloader_color2_option = get_theme_mod('real_estate_manager_tp_preloader_color2_option');
$real_estate_manager_tp_preloader_bg_color_option = get_theme_mod('real_estate_manager_tp_preloader_bg_color_option');

if($real_estate_manager_tp_preloader_color1_option != false){
$real_estate_manager_tp_theme_css .='.center1{';
	$real_estate_manager_tp_theme_css .='border-color: '.esc_attr($real_estate_manager_tp_preloader_color1_option).' !important;';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_preloader_color1_option != false){
$real_estate_manager_tp_theme_css .='.center1 .ring::before{';
	$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_preloader_color1_option).' !important;';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_preloader_color2_option != false){
$real_estate_manager_tp_theme_css .='.center2{';
	$real_estate_manager_tp_theme_css .='border-color: '.esc_attr($real_estate_manager_tp_preloader_color2_option).' !important;';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_preloader_color2_option != false){
$real_estate_manager_tp_theme_css .='.center2 .ring::before{';
	$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_preloader_color2_option).' !important;';
$real_estate_manager_tp_theme_css .='}';
}
if($real_estate_manager_tp_preloader_bg_color_option != false){
$real_estate_manager_tp_theme_css .='.loader{';
	$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_preloader_bg_color_option).';';
$real_estate_manager_tp_theme_css .='}';
}

// footer-bg-color
$real_estate_manager_tp_footer_bg_color_option = get_theme_mod('real_estate_manager_tp_footer_bg_color_option');

if($real_estate_manager_tp_footer_bg_color_option != false){
$real_estate_manager_tp_theme_css .='#footer{';
	$real_estate_manager_tp_theme_css .='background: '.esc_attr($real_estate_manager_tp_footer_bg_color_option).' !important;';
$real_estate_manager_tp_theme_css .='}';
}

// logo tagline color
$real_estate_manager_site_tagline_color = get_theme_mod('real_estate_manager_site_tagline_color');

if($real_estate_manager_site_tagline_color != false){
$real_estate_manager_tp_theme_css .='.logo h1 a, .logo p a{';
$real_estate_manager_tp_theme_css .='color: '.esc_attr($real_estate_manager_site_tagline_color).';';
$real_estate_manager_tp_theme_css .='}';
}

$real_estate_manager_logo_tagline_color = get_theme_mod('real_estate_manager_logo_tagline_color');
if($real_estate_manager_logo_tagline_color != false){
$real_estate_manager_tp_theme_css .='p.site-description{';
$real_estate_manager_tp_theme_css .='color: '.esc_attr($real_estate_manager_logo_tagline_color).';';
$real_estate_manager_tp_theme_css .='}';
}

// footer widget title color
$real_estate_manager_footer_widget_title_color = get_theme_mod('real_estate_manager_footer_widget_title_color');
if($real_estate_manager_footer_widget_title_color != false){
$real_estate_manager_tp_theme_css .='#footer h3{';
$real_estate_manager_tp_theme_css .='color: '.esc_attr($real_estate_manager_footer_widget_title_color).';';
$real_estate_manager_tp_theme_css .='}';
}

// copyright text color
$real_estate_manager_footer_copyright_text_color = get_theme_mod('real_estate_manager_footer_copyright_text_color');
if($real_estate_manager_footer_copyright_text_color != false){
$real_estate_manager_tp_theme_css .='#footer .site-info p, #footer .site-info p a {';
$real_estate_manager_tp_theme_css .='color: '.esc_attr($real_estate_manager_footer_copyright_text_color).';';
$real_estate_manager_tp_theme_css .='}';
}