<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div>
		<?php do_action('real_estate_manager_before_slider'); ?>
		<?php get_template_part('template-parts/home/slider'); ?>
		<?php do_action('real_estate_manager_after_slider'); ?>
	</div>
	<div>
		<?php get_template_part('template-parts/home/services'); ?>
		<?php do_action('real_estate_manager_after_services'); ?>
		<?php get_template_part('template-parts/home/home-content'); ?>
		<?php do_action('real_estate_manager_after_home_content'); ?>
	</div>
</main>

<?php get_footer(); ?>