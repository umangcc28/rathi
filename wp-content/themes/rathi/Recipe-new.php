<?php
/* Template Name: recipe old */
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
    <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class="recipe-tabs">
                    <ul class="rsp-tab-links">
                        <?php if (have_rows('recipe_list')):
                            $i = 1;
                            while (have_rows('recipe_list')):
                                the_row();
                                // Get sub-field values
                                $tab_heading = get_sub_field('tab_heading'); ?>
                                <li <?php if ($i == 1) { ?> class="active" <?php } ?>><a
                                        href="#tab<?php echo $i; ?>"><?php echo $tab_heading; ?></a></li>
                                <?php $i++; endwhile;
                        endif; ?>
                    </ul>

                    <div class="recipe-tab-content">

                        <?php if (have_rows('recipe_list')):
                            $i = 1;
                            while (have_rows('recipe_list')):
                                the_row();
                                ?>
                                <div id="tab<?php echo $i; ?>" class="recipe-tab <?php if ($i == 1) { ?>  active <?php } ?>">

                                    <div class="tab-view-contaier">
                                        <?php
                                        if (have_rows('tab_content_list')):
                                            while (have_rows('tab_content_list')):
                                                the_row();
                                                // Get sub-field values
                                                $tab_content_image = get_sub_field('tab_content_image');
                                                $tab_content_heading = get_sub_field('tab_content_heading');
                                                $tab_content_popup_class = get_sub_field('tab_content_popup_class');
                                                ?>
                                                <div class="rec-img-wrapper rcp-popup ">
                                                    <div class="imwp">
                                                        <img src="<?php echo $tab_content_image['url']; ?>" class="<?php echo $tab_content_popup_class; ?>"
                                                            alt="<?php echo $tab_content_image['alt']; ?>"
                                                            title="<?php echo $tab_content_image['title']; ?>">
                                                    </div>
                                                    <h3 class="<?php echo $tab_content_popup_class; ?>"><?php echo $tab_content_heading; ?></h3>
                                                    <img
                                                    src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="<?php echo $tab_content_popup_class; ?>">
                                                </div>
                                            <?php endwhile;
                                        endif; ?>

                                    </div>
                                </div>
                                <?php $i++; endwhile;
                        endif; ?>
                    </div>
                </div>

                <div class="slider-accodian">

                    <div class="sld-accordion">
                        <div class="sld-accordion-item">
                            <div class="sld-accordion-header">
                                <h3>Sev</h3>
                            </div>
                            <div class="sld-accordion-content">
                                <div class="recipe-slider">
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sld-accordion-item">
                            <div class="sld-accordion-header">
                                <h3>Gathiya</h3>
                            </div>
                            <div class="sld-accordion-content">
                                <div class="recipe-slider">
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sld-accordion-item">
                            <div class="sld-accordion-header">
                                <h3>Mixtures</h3>
                            </div>
                            <div class="sld-accordion-content">
                                <div class="recipe-slider">
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sld-accordion-item">
                            <div class="sld-accordion-header">
                                <h3>Farali</h3>
                            </div>
                            <div class="sld-accordion-content">
                                <div class="recipe-slider">
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sld-accordion-item">
                            <div class="sld-accordion-header">
                                <h3>Tasty Bites</h3>
                            </div>
                            <div class="sld-accordion-content">
                                <div class="recipe-slider">
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                    <div class="rec-img-wrapper">
                                        <div class="imwp">
                                            <img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/sev.png'; ?>" class="popmake-49" >
                                        </div>
                                        <h3 class="<?php echo $tab_content_popup_class; ?> " class="popmake-49">Rajasthani Sev Tamatar </h3>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/redirect.png'; ?>" class="popmake-49">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</section>



<?php get_footer(); ?>

