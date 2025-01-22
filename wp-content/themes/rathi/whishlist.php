 
 <?php
/* Template Name: Whishlist */
?>
<?php get_header(); ?>

<div class="container whishlist-template">
<header class="woocommerce-products-header whishlist-heading">
			<h1 class="woocommerce-products-header__title page-title">Whishlist</h1>
	
	</header>
<?php  
echo do_shortcode('[yith_wcwl_wishlist]');
?>
</div>
 
 
 <?php get_footer(); ?>

