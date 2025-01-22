<?php
/* Template Name: Combo Page */
?>
<?php get_header(); ?>



<!-- Start Banner Section  -->

<?php

$desktop_image = get_field('desktop_image');
$tablet_image = get_field('tablet_image');
$mobile_image = get_field('mobile_image');
$banner_head = get_field('banner_title');
$banner_subhead = get_field('sub_text');

if(!is_search()){ 
if ($desktop_image || $tablet_image || $mobile_image || $banner_head): ?>
    <section class="banner-sec about-banner combo-banner">

        <div class="home-banner">
            <?php if ($desktop_image): ?>
                <img src="<?php echo $desktop_image; ?>" class="desktop-img">
            <?php endif; ?>
            <?php if ($tablet_image): ?>
                <img src="<?php echo $tablet_image; ?>" class="tablet-img">
            <?php endif; ?>
            <?php if ($mobile_image): ?>
                <img src="<?php echo $mobile_image; ?>" class="mobile-img">
            <?php endif; ?>
        </div>
        <div class="banner-h1">
        <?php if($banner_head): ?>   
            <h1><?php echo $banner_head; ?></h1> 
        <?php endif; ?>

        <?php if($banner_subhead): ?>   
            <p><?php echo $banner_subhead; ?></p> 
        <?php endif; ?>

        </div>
    </section>
<?php endif; }?> 
<!-- End Banner Section  -->


<div class="container combo-products-div">
<div class="left-col">
 <?php echo do_shortcode('[br_filters_group group_id=1315]');?>
 
</div>
<div class="right-col">
<?php
// Define the category slug you want to filter by
$category_slug = 'combos'; // Replace with your category slug

// Get the current page number
$paged = max(1, get_query_var('paged'));

// Modify the query to filter by category
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 3,
    'paged'          => $paged, // Enable pagination
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $category_slug,
            'operator' => 'IN',
        ),
    ),
);

// Query the products based on the modified args
$query = new WP_Query($args);

// Get the total number of products for the category
$total_products = $query->found_posts;

// Set the total for wc_get_loop_prop
wc_set_loop_prop('total', $total_products);

// Loop through the products
if ($total_products > 0) {
    while ($query->have_posts()) {
        $query->the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        wc_get_template_part('content', 'product');
    }

    // Add pagination
    echo '<div class="pagination">';
    echo paginate_links(array(
        'total'   => $query->max_num_pages,
        'current' => $paged,
        'format'  => '?paged=%#%',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
    ));
    echo '</div>';
} else {
    // Optionally handle the case where there are no products in the category
    echo 'No products found in this category.';
}

// Reset post data
wp_reset_postdata();
?>
</div>

</div>

<!-- Hamper section start  -->


<div class="shop-bottom-sec">
	<div class="container">
		<h1>
		Make Your Own Premium Hamper
		</h1>
		<p>Rathi Gold understands the importance of catering to your specific needs, especially when it comes to large or bulk orders. Whether it's for gifting or simply stocking up for indulgent moments, Rathi Gold has you covered.</p>
		<div class="boxes-shop">
			<div class="row">
				<?php if( have_rows('hamper_boxes') ): ?>
					<?php while( have_rows('hamper_boxes') ): the_row(); 
					
						$image = get_sub_field('image'); // Get the image URL
						$title = get_sub_field('title'); // Get the title text
					?>
						<div class="column">
							<div class="boxes">
								<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								<div class="title"><?php echo esc_html($title); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- Hamper section end  -->
<script>
const minRange = document.getElementById('minRange');
const maxRange = document.getElementById('maxRange');
const minValueDisplay = document.getElementById('minValue');
const maxValueDisplay = document.getElementById('maxValue');

minRange.addEventListener('input', () => {
  if (parseInt(minRange.value) > parseInt(maxRange.value)) {
    minRange.value = maxRange.value;
  }
  minValueDisplay.textContent = minRange.value;
  updateSliderTrack();
});

maxRange.addEventListener('input', () => {
  if (parseInt(maxRange.value) < parseInt(minRange.value)) {
    maxRange.value = minRange.value;
  }
  maxValueDisplay.textContent = maxRange.value;
  updateSliderTrack();
});

function updateSliderTrack() {
  const percentMin = (minRange.value / maxRange.max) * 100;
  const percentMax = (maxRange.value / maxRange.max) * 100;
  
  minRange.style.background = `linear-gradient(to right, #ddd ${percentMin}%, #4CAF50 ${percentMin}%, #4CAF50 ${percentMax}%, #ddd ${percentMax}%)`;
  maxRange.style.background = minRange.style.background;
}

updateSliderTrack();


</script>
<?php get_footer(); ?>
