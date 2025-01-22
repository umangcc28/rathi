<?php
/* Template Name: career */
?>
<?php get_header(); ?>




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


<section class="career-grow">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class="bottom-shape">
                    <?php
                    $career_heading = get_field('career_title');
                    if ($career_heading):
                        ?>
                        <h1>
                            <?php echo $career_heading; ?>
                        </h1>
                    <?php endif; ?>
                    <?php
                    $career_info = get_field('career_description');
                    if ($career_info):
                        ?>
                        <p class="cookup-para">
                            <?php echo $career_info; ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="hover-boxes">

                    <?php if (have_rows('career_data')):
                        while (have_rows('career_data')):
                            the_row();
                            ?>

                            <div class="hov-box  <?php the_sub_field('hover_color'); ?>">

                                <div class="icon-contain">
                                    <img src="<?php echo the_sub_field('image'); ?>">
                                </div>

                                <h3>
                                    <?php echo the_sub_field('title'); ?>
                                </h3>

                                <p><?php echo the_sub_field('info'); ?></p>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/clove.png'; ?>">
    </div>
    <div class="shape5">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>">
    </div>

</section>

<section class="hiring-section">

    <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class="bottom-shape2">
                    <?php
                    $h_heading = get_field('hiring_heading');
                    if ($h_heading):
                        ?>
                        <h1><?php echo $h_heading; ?></h1>
                    <?php endif; ?>
                </div>

                <div class="hiring-accordion">

                    <?php if (have_rows('hiring_accordion')):
                        while (have_rows('hiring_accordion')):
                            the_row();

                            ?>

                            <?php
                            $accordion_title = get_sub_field('accordion_title');
                            $experience = get_sub_field('experience');
                            $apply_now_button = get_sub_field('apply_now_button');
                            $location = get_sub_field('location');
                            $has_job_para = have_rows('job_para');

                            if ($accordion_title || $experience || $apply_now_button || $location || $has_job_para):
                                ?>
                                <div class="hiring-accordion-item">

                                    <div class="hiring-accordion-header">
                                        <div class="acc-header-flex">
                                            <div class="display-icon">
                                                <div class="plus-icon">+</div>
                                                <div class="minus-icon">-</div>
                                            </div>
                                            <div class="title-acc">

                                                <div class="acc-banner-title">

                                                    <?php if ($accordion_title): ?>
                                                        <div><?php echo $accordion_title; ?></div>
                                                    <?php endif; ?>

                                                    <?php if ($experience): ?>
                                                        <p class="acc-head">
                                                            <strong>Experience :</strong>
                                                            <span><?php echo $experience; ?></span>
                                                        </p>
                                                    <?php endif; ?>

                                                </div>

                                                <?php if ($apply_now_button): ?>
                                                    <button class="acc-btn apply-btn popmake-346">
                                                        <?php echo $apply_now_button; ?>
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hiring-accordion-content">
                                        <p>
                                            <?php if ($location): ?>
                                                <strong>Location : </strong>
                                                <span><?php echo $location ?></span>
                                            <?php endif; ?>
                                        </p>


                                        <?php if ($has_job_para):
                                            while (have_rows('job_para')):
                                                the_row(); ?>

                                                <div class="job-para">
                                                    <p><strong><?php echo the_sub_field('title'); ?></strong></p>
                                                    <p><?php echo the_sub_field('info'); ?></strong></p>
                                                </div>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>