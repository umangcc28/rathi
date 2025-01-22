<?php
/* Template Name: category-page */
?>
<?php get_header(); ?>



<section class="banner-sec about-banner cat-banner-cp">
    <div class="ctr-bg"> <!-- <div class="home-banner">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/cat-banner.png'; ?>" class="desktop-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/cat-banner.png'; ?>" class="tablet-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/cat-banner-mobile.png'; ?>"
            class="mobile-img">
    </div> -->
        <div class="banner-h1">
            <h1>
                Click on your favourites
            </h1>
        </div>


        <ul class="rsp-tab-links cat-tab-links">
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => true,
                
            ));
            $i = 1;
            if (!is_wp_error($categories)) {
                // Filter out the "combos" category by slug
                $categories = array_filter($categories, function($category) {
                    return $category->slug !== 'combos';
                });
            foreach ($categories as $category) {
                $active_class = ($i == 1) ? 'active' : ''; // Set the first tab as active

                $cat_image = wp_get_attachment_url(get_term_meta($category->term_id, 'cat_img', true));
                $cat_name = get_term_meta($category->term_id, 'cat_name', true);
                
                ?>

                <li class="<?php echo $active_class; ?>">
                    <a href="javascript:void(0);" rel="tab<?php echo $i; ?>">
                    <?php if ($cat_image): ?>
                        <img src="<?php echo $cat_image; ?>" alt="<?php echo esc_attr($category->name); ?>"> 
                    <?php endif; ?>
                        <p><?php echo esc_html($cat_name ? $cat_name : $category->name); ?></p>
                    </a>
                </li>
                <?php
                $i++; 
            }
        }
            ?>
        </ul>


    </div>
</section>



<section class="category-secion">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="recipe-tabs cat-tabs">
                    <!-- <ul class="rsp-tab-links">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => true,
                        ));
                        $i = 1;
                        $categories = array_filter($categories, function($category) {
                            return $category->slug !== 'combos';
                        });
                        foreach ($categories as $category) {
                            $active_class = ($i == 1) ? 'active' : '';
                            echo '<li class="' . $active_class . '"><a href="#tab' . $i . '">' . esc_html($category->name) . '</a></li>';
                            $i++;
                        }
                        ?>
                    </ul> -->

                    <div class="recipe-tab-content cat-tab-content">
                        <?php
                        $i = 1;
                        $categories = array_filter($categories, function($category) {
                            return $category->slug !== 'combos';
                        });
                        foreach ($categories as $category) {
                            $active_class = ($i == 1) ? 'active' : ''; // Set the first tab as active
                            ?>
                            <div id="tab<?php echo $i; ?>" class="recipe-tab cat-tab <?php echo $active_class; 
                            
                            $cat_explore_name = get_term_meta($category->term_id, 'explore_title', true);
                               
                            ?>">
                                <div class="tab-view-contaier cat-view-contaier">
                                    <!-- Display Category Title and Description -->

                                    <div class="category-info">
                                        <div class="bottom-shape">
                                            <h1><?php echo esc_html($cat_explore_name ? $cat_explore_name : $category->name); ?></h1>
                                        </div>
                                        <p><?php echo esc_html($category->description); ?></p>
                                    </div>

                                    <div class="subcat-wrapper">

                                        <?php
                                        // Query for products in this category
                                        $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field' => 'term_id',
                                                    'terms' => $category->term_id,
                                                ),
                                            ),
                                        );
                                        $products = new WP_Query($args);

                                        if ($products->have_posts()) {
                                            while ($products->have_posts()) {
                                                $products->the_post();

                                                $hover_image = get_field('product_hover_image');
                                               
                                                ?>
                                                <div class="rec-img-wrapper cat-img-wrapper">
                                                    <div class="imwp">
                                                        <?php woocommerce_show_product_sale_flash(); ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php // woocommerce_template_loop_product_thumbnail(); ?>
                                                            <div class="alter-hov">
                                                                <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                                                            </div>
                                                         
                                                            <img class="hov-cat-img" src="<?php echo $hover_image; ?>"> 
                                                          
                                                        </a>
                                                    </div>
                                                    <h3><?php the_title(); ?></h3>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <button class="addtocart-btn"> shop now</button>
                                                    </a>
                                                 
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo '<p>No products found in this category.</p>';
                                        }
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/clove.png'; ?>">
    </div>
    <div class="shape2">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/blc-pr.png'; ?>">
    </div>
    <div class="shape3">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>">
    </div>
    <div class="shape4">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/mirchies.png'; ?>">
    </div>
</section>


<?php 
   
   $cta_title = get_field('cta_title');
   $cta_para = get_field('cta_para');
   $cta_image = get_field('cta_image');
   $cta_btn_link = get_field('cta_button_link');

   if($cta_title && $cta_para && $cta_image && $cta_btn_link):

?>

<section class="offrings">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="pink-box">
                    <div class="l-content">
                        <?php if('$cta_title'): ?>
                            <h1><?php echo $cta_title; ?></h1>
                        <?php endif; ?>
                        <?php if('cta_para'): ?>
                        <p><?php echo $cta_para; ?></p>
                        <?php endif; ?>
                        <div class="btns-wrapper">
                            <a href="<?php echo $cta_btn_link; ?>"> <button class="know-more-btn">Let’s Explore</button>
                            </a>
                        </div>
                    </div>
                    <div class="r-img">
                        <img src="<?php echo $cta_image; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>