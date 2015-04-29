<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Accent
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php echo do_shortcode('[searchandfilter fields="search,category"  post_types="product"]'); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->