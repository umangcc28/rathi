<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php 
 if (is_product_category()) { ?>
<div class="combo-category container">
<div class="left-col">
		<div class="filter-btn">
			<img src="/rathi/wp-content/uploads/2025/01/filter.png">
			<h5>Filter</h5>
		</div>
	<div class="filter-inner">
		
<?php echo do_shortcode('[br_filters_group group_id=1315]');?>
 </div>
 <?php } ?>
</div> 
<?php 
 if (is_product_category()) { ?>
<div class="right-col">
   
 <?php }else{?>
<div class="container">
 <?php } ?>
	


<ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
