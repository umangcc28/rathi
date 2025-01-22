<?php
/* Template Name: recipe*/
?>
<?php get_header(); ?>



<section class="banner-sec resp-banner">
    <div class="home-banner ">
        <?php $banner_desktop_view_image = get_field('banner_desktop_view_image');
        $banner_tablet_view_image = get_field('banner_tablet_view_image');
        $banner_mobile_view_image = get_field('banner_mobile_view_image');
        ?>
        <img src="<?php echo $banner_desktop_view_image['url']; ?>"
            alt="<?php echo $banner_desktop_view_image['alt']; ?>"
            title="<?php echo $banner_desktop_view_image['title']; ?>" class="desktop-img">
        <img src="<?php echo $banner_tablet_view_image['url']; ?>" alt="<?php echo $banner_tablet_view_image['alt']; ?>"
            title="<?php echo $banner_tablet_view_image['title']; ?>" class="tablet-img">
        <img src="<?php echo $banner_mobile_view_image['url']; ?>" alt="<?php echo $banner_mobile_view_image['alt']; ?>"
            title="<?php echo $banner_mobile_view_image['title']; ?>" class="mobile-img">
    </div>
    <div class="banner-h1">
        <?php $banner_head = get_field('banner_title'); 
              if($banner_head): ?>
              <h1><?php echo $banner_head; ?></h1> 
        <?php endif; ?>
        <?php $banner_subtitle = get_field('banner_subtitle'); 
               if($banner_subtitle): ?>
            <p><?php echo $banner_subtitle; ?></p>
        <?php endif; ?>
    </div>
</section>

<section class="recipe-secion">
    <div class="container">
        <div class="recipe-tab-block">
            <div class="recipe-tab-list">
                <?php
                    $args = array(
                        'post_type' => 'recipe',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        $terms = get_terms(array(
                            'taxonomy' => 'recipe-category',
                            'hide_empty' => false,
                        ))
                    );
                ?>
                <ul class="product-tabs">
                    <?php if (!empty($terms) && !is_wp_error($terms)) {
                        
                        $counter = 1;
                        foreach ($terms as $term) {
                                $active_class = ($counter === 1) ? 'active' : '';
                            echo '<li class="' . $active_class . '" rel="' . $term->slug . '"> <span>' . $term->name . ' </span> </li>';
                            $counter++; // Increment the counter for the next iteration.
                        }
                    } else {
                        echo 'No categories found.';
                    } ?>
                </ul>
            </div>

            <div class="recipe-tab-container">
                <?php if (!empty($terms) && !is_wp_error($terms)) {
                    $counter = 1;
                    foreach ($terms as $term) {
                        $active_class = ($counter === 1) ? ' active' : ''; 
                ?>  
                    <!-- Tab-box  -->
                    <div class="<?php echo esc_attr($active_class); ?> accordion-title" rel="<?php echo $term->slug; ?>"><?php echo $term->name; ?></div>
                    <div id="<?php echo esc_attr($term->slug); ?>" class="recipe_content<?php echo esc_attr($active_class); ?>">
                        <div class="recipe-grid-box">
                            <?php
                                $category_id = $term->term_id;
                                $product_data = array(
                                    'post_type' => 'recipe',
                                    'order' => 'ASC',
                                    'orderby' => 'post_date',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'recipe-category',
                                            'terms'    => $category_id,
                                        ),
                                    ),
                                );
                                $product_posts = get_posts($product_data);

                                if (!empty($product_posts)) { ?>
                                    <div class="row">
                                        <?php foreach ($product_posts as $pro_data) {
                                            $post_id = $pro_data->ID;
                                            $post_label = get_the_title($post_id);
                                            $thumbnail_small_img = get_field('small_image', $post_id);
                                            $thumbnail_img = get_the_post_thumbnail($post_id, 'full'); 
                                        ?>
                                        <div class="col-4">
                                            <div class="recipe-box" data-post-id="<?php echo $post_id; ?>">
                                                <div class="recip-inner-img">
                                                    <?php if (!empty($thumbnail_small_img)) { ?> 
                                                        <img src=" <?php echo $thumbnail_small_img ?>" alt="Small Image">
                                                    <?php }else { ?>
                                                          <?php echo $thumbnail_img ?>
                                                   <?php } ?>
                                                </div>
                                                <div class="recip-lable">
                                                    <?php echo esc_html($post_label); ?>
                                                </div>
                                                <div class="recip-view-more">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redirect.png">
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                <?php } else {
                                    echo '<p>No products found in this category.</p>';
                                }
                            ?>
                        </div>
                    </div>
                <?php
                    $counter++;
                    }
                } ?>
            </div>
        </div>
    </div>
</section>

<div class="recipe-popup">
    <div id="loader" style="display:none;"><span></span></div>
    <div class="recipe-popup-body">
        <div class="row">
            <div class="col-6">
                <div class="recipe-popup-information">
                    <div class="popup-close">x</div>
                    <div class="post-title"></div>
                    <div class="information"></div>
                </div>
            </div>
            <div class="col-6">
                <div class="recipe-feature-image">
                    <img src="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

