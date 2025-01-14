<?php
/**
 * Template for displaying search forms in Real Estate Manager
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */
?>

<?php $real_estate_manager_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" id="<?php echo esc_attr( $real_estate_manager_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'real-estate-manager' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'real-estate-manager' ); ?></button>
</form>