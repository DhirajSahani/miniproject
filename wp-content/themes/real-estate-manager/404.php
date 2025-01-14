<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

get_header(); ?>

<div class="container">
	<main id="tp_content" role="main">
		<div id="primary" class="content-area">
			<section class="error-404 not-found">
				<h1 class="page-title text-center pt-3"><?php echo esc_html(get_theme_mod('real_estate_manager_edit_404_title',__('Oops! That page can&rsquo;t be found.','real-estate-manager')));?></h1>
				<div class="page-content text-center">
					<p class="py-3"><?php echo esc_html(get_theme_mod('real_estate_manager_edit_404_text',__('It looks like nothing was found at this location. Maybe try a search?','real-estate-manager')));?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</div>
	</main>
</div>

<?php get_footer();