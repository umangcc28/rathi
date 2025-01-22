<?php
/* Template Name: business */
?>
<?php get_header(); ?>



<!-- <section class="banner-sec">
    <div class="home-banner">
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/business-banner.png'; ?>"
                class="desktop-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/business-banner.png'; ?>"
                class="tablet-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/business-banner-mobile.png'; ?>"
                class="mobile-img">
        </a>
    </div>
</section> -->

<?php
$desktop_image = get_field('desktop_image');
$tablet_image = get_field('tablet_image');
$mobile_image = get_field('mobile_image');
$banner_head = get_field('banner_title');

if ($desktop_image || $tablet_image || $mobile_image || $banner_head): ?>
    <section class="banner-sec resp-banner">

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
        <?php if($banner_head) : ?>   
            <h1><?php echo $banner_head; ?></h1> 
        <?php endif; ?>
        </div>
    </section>
<?php endif; ?>


<section class="career-grow business">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class="bottom-shape-clone">
                    <?php $business_heading = get_field('business_title');
                    if ($business_heading):
                        ?>
                        <h1>
                            <?php echo $business_heading; ?>
                        </h1>
                    <?php endif; ?>

                    <?php $business_info = get_field('business_description');
                    if ($business_info): ?>
                        <p class="cookup-para">
                            <?php echo $business_info; ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="hover-boxes in-business">

                    <?php if (have_rows('business_data')):
                        while (have_rows('business_data')):
                            the_row();
                            ?>

                            <div class="hov-box  <?php the_sub_field('hover_color'); ?>">
                                <div class="icon-contain">
                                    <img src="<?php echo the_sub_field('image'); ?>">
                                </div>
                                <h4><?php echo the_sub_field('title'); ?></h4>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>">
    </div>
    <div class="shape5">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/beans.png'; ?>">
    </div>

</section>

<!-- <section class="acc-tab">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <?php $location_heading = get_field('location_heading');
                if ($location_heading) { ?>
                    <div class="geographical-presence">
                        <h1><?php echo $location_heading; ?></h1>
                    </div>
                <?php } ?>
                <div class="store-locator">
                    <div class="accordion-store">
                        <?php $location_subheading = get_field('location_subheading');
                        if ($location_subheading) { ?>
                            <div class="str-location-head"><?php echo $location_subheading; ?></div>
                        <?php } ?>

                        <?php if (have_rows('location_list')):
                            $i == 1;
                            while (have_rows('location_list')):
                                the_row();
                                $location_name = get_sub_field('location_name');
                                ?>
                                <div class="accordion-store-item">
                                    <div class="accordion-store-header"><?php echo $location_name; ?></div>
                                    <div class="accordion-store-content">
                                        <div class="store-tabs">
                                            <ul class="store-tab-links">
                                                <?php if (have_rows('map_list')):
                                                    $j == 1;
                                                    while (have_rows('map_list')):
                                                        the_row();
                                                        $location_name = get_sub_field('location_name');
                                                        $map_url = get_sub_field('map_url');
                                                        ?>
                                                        <li <?php if ($i == 1 && $j == 1) { ?> class="active" <?php } ?>>
                                                            <a href="#store-tab-<?php echo $location_name; ?>"
                                                                data-iframe="<?php echo $map_url; ?>">
                                                                <?php echo $location_name; ?>
                                                            </a>
                                                        </li>
                                                        <?php $j++; endwhile;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; endwhile;
                        endif; ?>
                    </div>

                    <div class="map-display">
                        <iframe id="store-map" width="600" height="500" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/crdmn.png'; ?>">
    </div>
</section> -->


<section class="acc-tab">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <?php $location_heading = get_field('location_heading');
                if ($location_heading) { ?>
                    <div class="geographical-presence">
                        <h1><?php echo $location_heading; ?></h1>
                    </div>
                <?php } ?>
                <div class="store-locator">
                    <div class="accordion-store">
                        <?php $location_subheading = get_field('location_subheading');
                        if ($location_subheading) { ?>
                            <div class="str-location-head"><?php echo $location_subheading; ?></div>
                        <?php } ?>

                        <?php if (have_rows('location_list')):
                            $i == 1;
                            while (have_rows('location_list')):
                                the_row();
                                $location_name = get_sub_field('location_name');
                                ?>
                                <div class="accordion-store-item">
                                    <div class="accordion-store-header"><?php echo $location_name; ?></div>
                                    <div class="accordion-store-content">
                                        <div class="store-tabs">
                                            <ul class="store-tab-links">
                                                <?php if (have_rows('map_list')):
                                                    $j == 1;
                                                    while (have_rows('map_list')):
                                                        the_row();
                                                        $location_name = get_sub_field('location_name');
                                                        $map_url = get_sub_field('map_url');
                                                        ?>
                                                        <li <?php if ($i == 1 && $j == 1) { ?> class="active" <?php } ?>>
                                                            <a href="#store-tab-<?php echo $location_name; ?>"
                                                                data-iframe="<?php echo $map_url; ?>">
                                                                <?php echo $location_name; ?>
                                                            </a>
                                                        </li>
                                                        <?php $j++; endwhile;
                                                endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; endwhile;
                        endif; ?>
                    </div>

                    <div class="map-display">
                        <iframe id="store-map" width="600" height="500" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/crdmn.png'; ?>">
    </div>
</section>

<section class="partner-section">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="bottom-shape3">
                    <?php $form_title = get_field('form_heading');
                    if ($form_title): ?>
                        <h1><?php echo $form_title; ?></h1>
                    <?php endif; ?>
                </div>
                <?php $form_code = get_field('form_shortcode');
                if ($form_code): ?>
                    <div class="form-design fd-2">
                        <?php echo do_shortcode($form_code); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Partner Section -->

<?php get_footer(); ?>