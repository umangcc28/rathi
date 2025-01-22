<?php
/* Template Name: homepage */
?>
<?php get_header(); ?>

<!-- banner section start -->
<!-- banner section start -->
<section class="home2-banner">
    <div class="banner-slider"> <!-- Slick slider wrapper -->

        <?php if (have_rows('banner_slides')):
            while (have_rows('banner_slides')):
                the_row();

                $d_image = get_sub_field('desktop_image');
                $t_image = get_sub_field('tablet_image');
                $m_image = get_sub_field('mobile_image');
                $white_title = get_sub_field('white_heading');
                $white_style = get_sub_field('white_head_style');
                $color_title = get_sub_field('colored_heading');
                $color_option = get_sub_field('color_head_option');
                $add_white_title = get_sub_field('additional_white_heading');
                $banner_btn = get_sub_field('button_text');
                $btn_link = get_sub_field('button_link');
                $btn_class = get_sub_field('button_redbrown');
                $center_class = get_sub_field('class_center');

                if ($d_image || $t_image || $m_image || $white_title || $color_title || $add_white_title || $banner_btn || $btn_link || $center_class):
                    ?>

                    <div class="banner-slide">

                        <?php if ($d_image): ?>
                            <img class="mobile-img" src="<?php echo $m_image; ?>" alt="">
                        <?php endif; ?>

                        <?php if ($t_image): ?>
                            <img class="tablet-img" src="<?php echo $t_image; ?>" alt="">
                        <?php endif; ?>

                        <?php if ($m_image): ?>
                            <img class="desktop-img" src="<?php echo $d_image; ?>" alt="">
                        <?php endif; ?>


                        <div class="abs-tab">
                            <div class="container">
                                <div class="col-6">
                                    <div class="ts-move <?php echo $center_class; ?>">
                                        <?php if ($white_title): ?>
                                            <div class="<?php echo $white_style; ?>"><?php echo $white_title; ?></div>
                                        <?php endif; ?>
                                        <?php if ($color_title): ?>
                                            <div class="<?php echo $color_option; ?>"><?php echo $color_title; ?></div>
                                        <?php endif; ?>
                                        <?php if ($add_white_title): ?>
                                            <div class="white-head-Blocklyn"><?php echo $add_white_title; ?></div>
                                        <?php endif; ?>
                                        <?php if ($banner_btn && $btn_link): ?>
                                            <a href="<?php echo esc_url($btn_link); ?>">
                                                <button class="<?php echo $btn_class; ?>"><?php echo esc_html($banner_btn); ?></button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div> <!-- End of slider wrapper -->
</section>
<!-- banner section end -->

<!-- Best Seller Section Strat  -->
<section class="best-seller">

    <?php $bestseller_items = get_field('best_seller_section');

    if ($bestseller_items):
        $best_seller_title = $bestseller_items['bestseller_heading'];
        $best_seller_product_slides = $bestseller_items['best_seller_product_slides'];
        $best_seller_marqee = $bestseller_items['marquee_section'];
        $best_clove_img = $bestseller_items['side_background_clove_image'];
        $best_blackpaper_img = $bestseller_items['side_blackpaper_image'];

        ?>

        <div class="bottom-shape">
            <?Php if ($best_seller_title): ?>
                <h1><?php echo $best_seller_title; ?></h1>
            <?php endif; ?>
        </div>

        <div class="bs-slider">

            <?php foreach ($best_seller_product_slides as $best_seller_pro):

                $bs_image = $best_seller_pro['image'];
                $bs_hover_image = $best_seller_pro['image_hover'];
                $bs_title = $best_seller_pro['title'];
                $bs_btn = $best_seller_pro['button_text'];
                $bs_btn_link = $best_seller_pro['button_link'];
                ?>

                <div class="bs-slide">
                    <div class="bs-products">
                        <div class="sev-product">
                            <div class="img-div">
                                <?php if ($bs_image): ?><img class="default-img" src="<?php echo $bs_image; ?>"
                                        alt=""><?php endif; ?>
                                <?php if ($bs_hover_image): ?><img class="hover-img" src="<?php echo $bs_hover_image; ?>"
                                        alt=""><?php endif; ?>
                            </div>
                            <?php if ($bs_title): ?>
                                <h2 class="prod-title"><?php echo $bs_title; ?></h2><?php endif; ?>
                            <?php if ($bs_btn_link && $bs_btn): ?>
                                <a href="<?php echo $bs_btn_link; ?>"><button
                                        class="know-more-btn"><?php echo $bs_btn; ?></button></a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <div class="marquee a-section-marquee-box mrc-product">

            <?php foreach ($best_seller_marqee as $best_seller_marq):

                $marq_img = $best_seller_marq['marq_image'];
                $marq_heading = $best_seller_marq['marq_title'];
                ?>

                <div class="mrc2-text" aria-hidden="true">

                    <?php if ($marq_heading): ?>
                        <div class="bsl-tect"><?php echo $marq_heading; ?></div><?php endif; ?>
                    <span>
                        <?php if ($marq_img): ?><img src="<?php echo $marq_img; ?>" alt=""><?php endif; ?>
                    </span>
                </div>

            <?php endforeach; ?>

        </div>

        <div class="shape1">
            <?php if ($best_clove_img): ?><img src="<?php echo $best_clove_img; ?>" alt=""><?php endif; ?>
        </div>
        <div class="shape2">
            <?php if ($best_blackpaper_img): ?><img src="<?php echo $best_blackpaper_img; ?>" alt=""><?php endif; ?>
        </div>
    <?php endif; ?>

</section>
<!-- Best Seller Section End  -->

<!-- Cat Slider Section Strat  -->
<section class="dynamic-category">

    <?php $bestseller_items = get_field('best_seller_section');

    if ($bestseller_items):
        $best_seller_title = $bestseller_items['bestseller_heading'];
        $best_seller_product_slides = $bestseller_items['best_seller_product_slides'];
        $best_seller_marqee = $bestseller_items['marquee_section'];
        $best_clove_img = $bestseller_items['side_background_clove_image'];
        $best_blackpaper_img = $bestseller_items['side_blackpaper_image'];

        ?>
        <div class="container ctr-home">
            <div class="bottom-shape-category">
                <?Php if ($best_seller_title): ?>
                    <h1>CHOOSE YOUR <span>NAMKEEN</span></h1>
                <?php endif; ?>
            </div>

            <div class="category-slider-wrapper">

                <div class="category-slider">

                    <?php
                    // Get all product categories
                    $categories = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => true, // Hide empty categories
                    ));

                    if (!empty($categories) && !is_wp_error($categories)) {
                        if (!is_wp_error($categories)) {
                            // Filter out the "combos" category by slug
                            $categories = array_filter($categories, function($category) {
                                return $category->slug !== 'combos';
                            });
                        foreach ($categories as $category) {
                            // Get the category link
                            $category_link = get_term_link($category);
                            // Get the category image
                            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                            $image_url = wp_get_attachment_url($thumbnail_id);
                            // Get ACF hover banner image
                            $hover_banner_image = get_field('hover_banner_image', 'product_cat_' . $category->term_id);
                            $page_link = get_field('page_link', 'product_cat_' . $category->term_id);
                            ?>

                            <div class="category-slide">
                                <div class="category-products">
                                    <div>
                                        <a href="<?php echo $page_link; ?>" class="sev-product">
                                            <div class="img-div">
                                                <img class="default-img" src="<?php echo $image_url; ?>" alt="">
                                                <img class="hover-img" src="<?php echo $hover_banner_image; ?>" alt="">
                                            </div>

                                            <h2 class="prod-title"><?php echo $category->name; ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } }
                    } ?>
                </div>
                <div class="slider-nav-wrapper">

                    <div class="slider-progress-bar">
                        <div class="progress"></div> <!-- This will be the actual progress bar -->
                    </div>
                    <button class="custom-prev"></button> <!-- Custom previous button -->
                    <button class="custom-next"></button> <!-- Custom previous button -->
                </div>

            </div>
        </div>


        <div class="shape1">
            <?php if ($best_clove_img): ?><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/chily.png'; ?>" alt=""><?php endif; ?>
        </div>
        <div class="shape2">
            <?php if ($best_blackpaper_img): ?><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/clove.png'; ?>" alt=""><?php endif; ?>
        </div>

    <?php endif; ?>

</section>
<!-- Best Seller Section End  -->

<!-- Lets Give Try Slider Start -->
<section class="lets-give-try"> 
    <?php 
        $lets_try_data = get_field('lets_give_a_try_meaning_slider');
        // print_r($lets_try_data);
    ?>
    <div class="swiper horizontal_scroll_swiper">
        <div class="swiper-wrapper">
            <?php
                foreach ($lets_try_data as $lets_try_datas) {
                    $desktop_image = $lets_try_datas['desktop_image'];
                    $mobile_image = $lets_try_datas['mobile_image'];
                    $banner_icon = $lets_try_datas['banner_icon'];
            ?>
                <div class="lgt-slide swiper-slide">
                    <div class="img-text">
                       <?php if (!empty($desktop_image)) { ?>
                            <img class="desktop-img" src="<?php echo $desktop_image; ?>" alt="">
                        <?php } ?>
                       <?php if (!empty($desktop_image)) { ?>
                            <img class="tablet-img" src="<?php echo $desktop_image; ?>" alt="">
                        <?php } ?>
                       <?php if (!empty($mobile_image)) { ?>
                            <img class="mobile-img" src="<?php echo $mobile_image; ?>" alt="">
                        <?php } ?>
                        <?php if (!empty($banner_icon)) { ?>
                            <div class="gt-inner-text">
                                <div class="wrap-with-btn">
                                    <img src="<?php echo $banner_icon; ?>"alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Lets Give Try Slider Start -->

<!-- Rathi about info section Start -->
<section class="abt-info">
    <div class="container ctr-home">
        <div class="row">
            <?php $about_heading = get_field('about_heading');
            $about_left_image = get_field('about_left_image');
            $about_right_image = get_field('about_right_image');
            $about_content = get_field('about_content');
            $about_button_text = get_field('about_button_text');
            $about_button_url = get_field('about_button_url'); ?>
            <div class="col-6 fst-col">
                <div class="bottom-shape4">
                    <?php if ($about_heading) { ?>
                        <h1><?php echo $about_heading; ?></h1><?php } ?>
                </div>
                <div class="brr-wrap">
                    <img src="<?php echo $about_left_image['url']; ?>" alt="<?php echo $about_left_image['alt']; ?>"
                        title="<?php echo $about_left_image['title']; ?>">

                </div>
                <p><?php echo $about_content; ?></p>
                <div class="second-img">
                    <img src="<?php echo $about_right_image['url']; ?>" alt="<?php echo $about_right_image['alt']; ?>"
                        title="<?php echo $about_right_image['title']; ?>">
                </div>
                <?php if ($about_button_text) { ?><a href="<?php echo $about_button_url; ?>"><button
                            class="know-more-btn">
                            <?php echo $about_button_text; ?> </button></a><?php } ?>
            </div>
            <div class="col-6 sec-col">
                <div class="bottom-shape4">
                    <?php if ($about_heading) { ?>
                        <h1><?php echo $about_heading; ?></h1><?php } ?>
                </div>
                <div class="second-img">
                    <img src="<?php echo $about_right_image['url']; ?>" alt="<?php echo $about_right_image['alt']; ?>"
                        title="<?php echo $about_right_image['title']; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/mini-balls.png'; ?>" alt="">
    </div>
    <div class="shape2"> <img src="<?php echo get_template_directory_uri() . '/assets/images/stics.png'; ?>" alt="">
    </div>
</section>
<!-- Rathi about info section End -->

<section class="promise">
    <div class="bg-dark-brown">
        <div class="container ctr-home">
            <div class="row">
                <!-- <div class="col-4 resp-d-col">
                    <div class="pr-head">
                        OUR PROMISE
                    </div>
                </div> -->
                <div class="col-4">
                    <div class="flex-items">
                        <?php if (have_rows('promise_left_side_list')):
                            while (have_rows('promise_left_side_list')):
                                the_row();
                                $left_side_image = get_sub_field('left_side_image');
                                $left_side_heading = get_sub_field('left_side_heading'); ?>
                                <div class="pr-items">
                                    <div class="promise-icon">
                                        <img src="<?php echo $left_side_image['url']; ?>"
                                            alt="<?php echo $left_side_image['alt']; ?>"
                                            title="<?php echo $left_side_image['title']; ?>">
                                    </div>
                                    <p class="pr-text"><?php echo $left_side_heading; ?></p>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
                <?php $promise_heading = get_field('promise_heading');
                if ($promise_heading) { ?>
                    <div class="col-4 resp-col">
                        <div class="pr-head"><?php echo $promise_heading; ?></div>
                    </div>
                <?php } ?>
                <div class="col-4">
                    <div class="flex-items">
                        <?php if (have_rows('promise_right_side_list')):
                            while (have_rows('promise_right_side_list')):
                                the_row();
                                $right_side_image = get_sub_field('right_side_image');
                                $right_side_heading = get_sub_field('right_side_heading'); ?>
                                <div class="pr-items">
                                    <div class="promise-icon">
                                        <img src="<?php echo $right_side_image['url']; ?>"
                                            alt="<?php echo $right_side_image['alt']; ?>"
                                            title="<?php echo $right_side_image['title']; ?>">
                                    </div>
                                    <p class="pr-text"><?php echo $right_side_heading; ?></p>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offrings">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="yellow-box">
                    <div class="l-content">
                        <?php $offer_heading = get_field('offer_heading');
                        $offer_content = get_field('offer_content');
                        $offer_button_one_text = get_field('offer_button_one_text');
                        $offer_button_one_url = get_field('offer_button_one_url');
                        $offer_button_two_text = get_field('offer_button_two_text');
                        $offer_button_two_url = get_field('offer_button_two_url');
                        $offer_image = get_field('offer_image'); ?>
                        <h1> <?php echo $offer_heading; ?> </h1>
                        <p><?php echo $offer_content; ?></p>
                        <div class="btns-wrapper">
                            <?php if ($offer_button_one_text) { ?>
                                <!-- <a href="<?php echo $offer_button_one_url; ?>"> -->
                                <button class="know-more-btn popmake-537">
                                    <?php echo $offer_button_one_text; ?></button>
                                <!-- </a> -->
                            <?php } ?>
                            <?php if ($offer_button_two_text) { ?><a href="<?php echo $offer_button_two_url; ?>"><button
                                        class="lm-blue-btn"><?php echo $offer_button_two_text; ?></button></a><?php } ?>
                        </div>
                    </div>
                    <?php if ($offer_image) { ?>
                        <div class="r-img">
                            <img src="<?php echo $offer_image['url']; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/beans.png'; ?>" alt="">
    </div>
</section>

<section class="green-slider">
    <div class="marquee a-section-marquee-box">
        <?php if (have_rows('cookbook_marquee')):
            while (have_rows('cookbook_marquee')):
                the_row();
                $marquee_text = get_sub_field('marquee_text');
                $marquee_image = get_sub_field('marquee_image'); ?>
                <div class="mrc-text" aria-hidden="true"> <?php echo $marquee_text; ?> <span> <img
                            src="<?php echo $marquee_image['url']; ?>" alt="<?php echo $marquee_image['alt']; ?>"
                            title="<?php echo $marquee_image['title']; ?>"></span>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="product-slider">
                    <?php if (have_rows('product_slider')):
                        while (have_rows('product_slider')):
                            the_row();
                            $slider_image = get_sub_field('slider_image');
                            $product_title = get_sub_field('product_title');
                            $ingredients_heading = get_sub_field('ingredients_heading');
                            $read_more_button_text = get_sub_field('read_more_button_text');
                            $read_more_button_url = get_sub_field('read_more_button_url');
                            $explore_button_text = get_sub_field('explore_button_text');
                            $explore_button_url = get_sub_field('explore_button_url'); ?>
                            <div class="product-slide">
                                <div class="prd-diaplay">
                                    <img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"
                                        title="<?php echo $slider_image['title']; ?>">
                                </div>
                                <div class="inner-popup no-popup">
                                    <h1><?php echo $product_title; ?></h1>
                                    <h3><?php echo $ingredients_heading; ?></h3>
                                    <ul>
                                        <?php if (have_rows('ingredients_list')):
                                            while (have_rows('ingredients_list')):
                                                the_row();
                                                $list_text = get_sub_field('list_text'); ?>
                                                <li><?php echo $list_text; ?></li>
                                            <?php endwhile;
                                        endif; ?>
                                    </ul>
                                    <div class="readmore-arrow popmake-49"><?php echo $read_more_button_text; ?></div>
                                    <!-- href="<?php echo $read_more_button_url; ?>" -->
                                    <div class="btns-wrapper">
                                        <a href="<?php echo $explore_button_url; ?>"><button
                                                class="know-more-btn"><?php echo $explore_button_text; ?></button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/chilly.png'; ?>" alt="">
    </div>
</section>

<section class="social-network">
    <?php $social_heading = get_field('social_heading'); ?>
    <h1><?php echo $social_heading; ?></h1>
    <div class="social-slider">
        <?php if (have_rows('social_images')):
            while (have_rows('social_images')):
                the_row();
                $images = get_sub_field('images'); ?>
                <div class="social-slide">
                    <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>">
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>                                                                          