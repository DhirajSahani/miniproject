<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$real_estate_manager_number_of_footer_columns = get_theme_mod('real_estate_manager_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$real_estate_manager_col_lg_footer_class = 'col-lg-' . (12 / $real_estate_manager_number_of_footer_columns);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$real_estate_manager_col_md_footer_class = 'col-md-' . (12 / $real_estate_manager_number_of_footer_columns);
?>
<div class="container">
    <aside class="widget-area row" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'real-estate-manager' ); ?>">
        <div class="<?php echo esc_attr($real_estate_manager_col_lg_footer_class); ?> <?php echo esc_attr($real_estate_manager_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($real_estate_manager_i = 2; $real_estate_manager_i <= $real_estate_manager_number_of_footer_columns; $real_estate_manager_i++) :
            if ($real_estate_manager_i <= $real_estate_manager_number_of_footer_columns) :
                ?>
               <div class="col-12 <?php echo esc_attr($real_estate_manager_col_lg_footer_class); ?> <?php echo esc_attr($real_estate_manager_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $real_estate_manager_i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>