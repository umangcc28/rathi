<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>

<?php

// Remove unwanted elements
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>


<?php while (have_posts()): ?>
	<?php the_post(); ?>
	<section class="product-detail-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="product-<?php the_ID(); ?>" <?php wc_product_class('custom-product-container', $product); ?>>

						<!-- Product Image Slider -->
						<div class="custom-product-image-slider">
							<?php
							/**
							 * woocommerce_before_single_product_summary hook.
							 *
							 * @hooked woocommerce_show_product_sale_flash - 10
							 * @hooked woocommerce_show_product_images - 20
							 */
							do_action('woocommerce_before_single_product_summary');
							?>
						</div>

						<!-- Product Summary -->
						<div class="summary entry-summary custom-product-summary">
							<!-- Product Details -->
							<div class="custom-product-details">
								<!-- Product Title -->
								<div class="custom-product-title">
									<h1><?php the_title(); ?></h1>
								</div>

								<!-- Product Price -->
								 <div class="custom-product-price">
									<?php
									// Display the product price
									woocommerce_template_single_price();
									?>
								</div> 

						

								<!-- Product Description -->
							    <div class="custom-product-description">
									<?php
									/**
									 * Display the product short description.
									 */
									the_excerpt();
									?>
								</div> 
								<!-- Select Amount -->


								<!-- Add to Cart Button -->
								 <div class="custom-product-add-to-cart">
									<?php
									// Display the add-to-cart button
									woocommerce_template_single_add_to_cart();
									?>
									 
								</div>  

						

							</div>



							<!-- Additional Product Attributes -->
							<div class="custom-product-meta">
								<?php
								/**
								 * woocommerce_product_meta_start and woocommerce_product_meta_end hooks.
								 *
								 * @hooked woocommerce_template_single_meta - 40
								 */
								do_action('woocommerce_product_meta_start');
								do_action('woocommerce_product_meta_end');
								?>
							</div>

							<div class="good-quality-wrapper">
								<div class="good-quality">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/care-icn.png'; ?>">
									Made with Care
								</div>
								<div class="good-quality">
									<img
										src="<?php echo get_template_directory_uri() . '/assets/images/recipe-icn.png'; ?>">
									True-to-Roots Recipe
								</div>
								<div class="good-quality">
									<img
										src="<?php echo get_template_directory_uri() . '/assets/images/groundnut-icn.png'; ?>">
									Fried in Ground Nut Oil
								</div>
							</div>

							

							<div class="custom-product-accodian">
								
								<?php if(have_rows('accordion_section')):
									  while(have_rows('accordion_section')): the_row();	

									$acc_title = get_sub_field('title');
									$acc_text = get_sub_field('content');
									$acc_image = get_sub_field('icon');
									
								?>
						
								<div class="prod-acc-item">

									<div class="prod-acc-header">
										<div class="img-title-wrap">
											<?php if($acc_image && $acc_title): ?>
												<img src="<?php echo $acc_image; ?>"><?php echo $acc_title; ?>
											<?php endif; ?>
										</div>
										<div class="toggle-img">
											<img class="toggle-plus" src="<?php echo get_template_directory_uri() . '/assets/images/toggle-plus-black.png'; ?>">
											<img class="toggle-minus" src="<?php echo get_template_directory_uri() . '/assets/images/toggle-minus.png'; ?>">
										</div>
									</div>

									<div class="prod-acc-content">
										<?php if($acc_text): ?>
											<p><?php echo $acc_text; ?></p>
										<?php endif; ?>
									</div>

								</div>

								<?php endwhile; ?>
								<?php endif; ?>		

							</div>

						</div>
					</div><!-- #product-<?php the_ID(); ?> -->

				</div>
			</div>
		</div>
		<div class="shape1">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/clove-grp.png'; ?>" alt=""></span>
		</div>
	</section>


	<?php 
   

		$recipe_section = get_field('recipe_section');
		$product_name_loop = $recipe_section['product_name_loop'];
		$product_image = $recipe_section['image'];
		$product_title = $recipe_section['title'];
		$product_text = $recipe_section['recipe_content'];
		if($recipe_section):
      
	?>
	<section class="inner-product-sec">
	
		<div class="marquee a-section-marquee-box">
			
			<?php 
				foreach ($product_name_loop as $product_item):
				$product_name = $product_item['product_name'];
			?>
			
					<div class="mrc-text" aria-hidden="true"><?php echo $product_name; ?><span> 
						<img src="<?php echo get_template_directory_uri() . '/assets/images/vct.png'; ?>" alt=""></span>
					</div>
			<?php endforeach; ?>

		</div>

		<div class="container">
			<div class="inner-product-recipe">
				<div class="inner-recipe-img">
					<img src="<?php echo $product_image; ?>">
				</div>
				<div class="inner-product-cp">


					<h1><?php echo $product_title; ?></h1>
					<?php echo $product_text; ?>
					
				</div>
			</div>
		</div>
		
		<div class="shape1">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/chilly.png'; ?>" alt=""></span>
    </div>
	</section>
	<?php endif; ?>

	
	<?php if(have_rows('combo_section')): ?>
	<section class="crave-combo">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="combo-head">
						<div class="bottom-shape">
							<h1>Why Crave for One?</h1>
						</div>
						<a href="" class="know-more-btn desktop-slides-btn">
							View all
						</a>
					</div>

					<div class="combo-slider">

                      
					      <?php  while(have_rows('combo_section')): the_row();
                          
							  $cp_image = get_sub_field('product_image');
							  $cp_hover_image = get_sub_field('product_image_hover');
							  $cp_title = get_sub_field('product_name');
							  $cp_link = get_sub_field('button_link');

							  print_r($combo_section); 

						?>
                
						<div class="combo-slide">
							<div class="category-products">
								<div>
									<div class="sev-product hvr-close">

										<a href="<?php echo $cp_link; ?>" >
									  	
											<div class="img-div">
											<?php if($cp_image && $cp_hover_image): ?>
												<img class="default-img" src="<?php echo $cp_image; ?>" alt="">
												<img class="hover-img" src="<?php echo $cp_hover_image; ?>"  alt="">
											<?php endif; ?>
											</div>
										

										<?php if($cp_title): ?>
											<h4 class="prod-title"><?php echo $cp_title; ?></h4>
										<?php endif; ?>
										</a>	
										<a href="<?php echo $cp_link; ?>" class="acc-btn">Grab the Combo </a>
									</div>
								</div>
							</div>
						</div>

						<?php endwhile; ?>
						

					</div>
					<a href="" class="know-more-btn after-slides-btn">
							View all
						</a>
				</div>
			</div>
		</div>
		<div class="shape1">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/bl-ppr.png'; ?>" alt=""></span>
    </div>
	<div class="shape2">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>" alt=""></span>
    </div>

	</section>
	<?php endif; ?>								

	<section class="top-recommendations">
    <div class="container ctr-home">
        <div class="bottom-shape-category slider-bts">
            <h1>Our Top Recommendations</h1>
            <div class="custom-arrows-lr">
                <button class="custom-prev1"></button> 
                <button class="custom-next1"></button> 
            </div>
        </div>

        <div class="category-slider-wrapper">

            <div class="recommendations-slider">
                <?php
                // Query to get related products
                $related_products = wc_get_related_products(get_the_ID(), 5); // Fetch 5 related products

                if (!empty($related_products)) {
                    foreach ($related_products as $product_id) {
                        $product = wc_get_product($product_id);
                        if ($product) :
                            $product_title = $product->get_name();
                            $product_url = get_permalink($product_id); // Get the product URL
                            $product_image = wp_get_attachment_image_url($product->get_image_id(), 'full');
                            
                            // Get hover image from ACF field
                            $product_hover_image = get_field('product_hover_image', $product_id); // ACF field for hover image
                            
                            $add_to_cart_url = '?add-to-cart=' . $product_id; // WooCommerce Add to Cart URL
                ?>
                            <div class="combo-slide">
                                <div class="category-products">
                                    <div class="sev-product hvr-close">
                                        <!-- Wrap image and title in anchor tag to link to the product page -->
                                        <a href="<?php echo esc_url($product_url); ?>" class="product-link">
                                            <div class="img-div">
                                                <img class="default-img" src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                <?php if ($product_hover_image) : ?>
                                                    <img class="hover-img" src="<?php echo esc_url($product_hover_image); ?>" alt="<?php echo esc_attr($product_title); ?>">
                                                <?php endif; ?>
                                            </div>

                                            <h4 class="prod-title"><?php echo esc_html($product_title); ?></h4>
                                        </a>

                                        <a href="<?php echo esc_url($product_url); ?>" class="acc-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                <?php
                        endif;
                    }
                }
                ?>
            </div>

            <div class="custom-arrows-lr1">
                <button class="custom-prev1"></button> 
                <button class="custom-next1"></button> 
            </div>

        </div>
    </div>
</section>




<?php endwhile; // end of the loop. ?>

<?php
/**
 * woocommerce_after_single_product_summary hook.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
//do_action('woocommerce_after_single_product_summary');
?>



<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar'); ?>


<?php 
get_footer('shop'); 

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>