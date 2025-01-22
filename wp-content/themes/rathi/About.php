<?php
/* Template Name: about */
?>
<?php get_header(); ?>

<!-- Start Banner Section  -->
<?php
$desktop_image = get_field('desktop_image');
$tablet_image = get_field('tablet_image');
$mobile_image = get_field('mobile_image');
$banner_head = get_field('banner_title');

if ($desktop_image || $tablet_image || $mobile_image || $banner_head): ?>
    <section class="banner-sec about-banner">

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
        </div>
    </section>
<?php endif; ?> 
<!-- End Banner Section  -->

<!-- Start Legacy Section  -->

<?php 
    
    $l_image = get_field('legacy_image');
    $l_title = get_field('legacy_heading');
    $l_para = get_field('legacy_description');

 if($l_image && $l_title && $l_para):
?>

<section class="legacy">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="legasy-wrap">

                    <div class="legasy-img-wrap">
                        <?php if($l_image): ?>    
                            <img src="<?php echo $l_image; ?>">
                        <?php endif; ?>
                    </div>

                    <div class="legasy-text">
                        <?php if($l_title): ?>
                            <h1><?php echo $l_title; ?></h1>
                        <?php endif; ?>
                        <?php if($l_para): ?>
                            <p><?php echo $l_para; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/cumins.png'; ?>">
    </div>
    <div class="shape2">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/blackpappers.png'; ?>">
    </div>
</section>
<?php endif; ?>
<!-- Start Legacy Section  -->


<!-- Statrt rathi journey slider section -->



<?php 
 
   $rj_head = get_field('journey_heading');
   if($rj_head && have_rows('journey_slider_section')):
 
?>


<section class="rathi-journey">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="bottom-shape-clone">
                    <?php if($rj_head): ?><h1><?php echo $rj_head; ?></h1><?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <div class="time-line appearIntro">
        <div class="swiper swiper-timeline">

            <?php while(have_rows('journey_slider_section')): the_row(); 

                $rjs_date = get_sub_field('date');
                $rjs_title = get_sub_field('title');
                $rjs_para = get_sub_field('journey_para');

            ?>

            <div class="swiper-slide">
                <div class="timestamp">
                   <?php if($rjs_date): ?> <span class="date"><?php echo $rjs_date; ?></span> <?php endif; ?>
                </div>
                <div class="info-status">
                <?php if($rjs_title && $rjs_para): ?>
                <span>

                        <h5><?php echo $rjs_title; ?></h5>
                        <?php echo $rjs_para; ?>    
                    </span>
                <?php endif; ?>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/clove.png    '; ?>">

    </div>
</section>
<?php endif; ?>

<!-- Statrt rathi journey slider section -->

<?php 
$section_data = get_field('line_design_section');
if ($section_data && !empty($section_data['design_items'])):
?>
<section class="line-design">
    <div class="bg-cloves">
        <div class="container">
            <div class="bottom-shape5">
                <h1><?php echo esc_html($section_data['heading']); ?></h1>
            </div>
            <div class="shape-relative">

                <div class="anmation-destop">
                    <img class="wave-img-1" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/wave.png'); ?>">
                </div>

                <?php foreach ($section_data['design_items'] as $item): 
                    $circle_image = $item['circle_image']; 
                    $bold_text = $item['bold_text'];
                    $light_text = $item['light_text'];
                    $alignment = $item['alignment'];
                ?>

                <div class="design-flex">
                    <?php if ($alignment === 'left'): ?>
                        <div class="text-box">
                            <div class="left">
                                <?php if ($bold_text): ?>
                                    <p class="bold-para"><?php echo $bold_text; ?></p>
                                <?php endif; ?>
                                <?php if ($light_text): ?>
                                    <p class="light-para"><?php echo $light_text; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($circle_image): ?>
                            <div class="circle-img-wrapper">
                                <img src="<?php echo $circle_image; ?>" alt="">
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ($circle_image): ?>
                            <div class="circle-img-wrapper">
                                <img src="<?php echo $circle_image; ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <div class="text-box">
                            <div class="right">
                                <?php if ($bold_text): ?>
                                    <p class="bold-para"><?php echo $bold_text; ?></p>
                                <?php endif; ?>
                                <?php if ($light_text): ?>
                                    <p class="light-para"><?php echo $light_text; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- End rathi journey slider section -->

<!-- Start accordioan section -->

<?php 
 
$d_image = get_field('diffrence_image');
$d_title = get_field('diffrence_heading');
if( $d_image && $d_title):
?>

<section class="qlt-accordian">
    <div class="container ctr">
        <div class="row">
            <div class="col-12">
                <div class="toggle-acc-wrapper">
                    <div class="qlt-acc d-none-resp">
                      <?php if($d_image):?> 
                         <h1> <?php echo $d_title; ?></h1>
                      <?php endif; ?>
                    </div>

                    <!-- The image that will change based on the opened accordion -->
                    <div class="acc-img">
                        <img id="accordion-img"
                            src="<?php echo $d_image; ?>"  alt="Accordion Image">
                    </div>
                    <div class="qlt-acc optional-rsp">
                         <?php if($d_image):?> 
                            <h1>
                                <?php echo $d_title; ?>
                            </h1>
                        <?php endif; ?>


                        <?php 

                        if(have_rows('accordion')):
                        while(have_rows('accordion')): the_row();

                        $acc_image = get_sub_field('accordion_image');
                        $acc_title = get_sub_field('accordion_heading');
                        $acc_para = get_sub_field('accordion_text');
                        ?>


                        <div class="qlt-acc-item" data-image="<?php echo $acc_image; ?>">
                            <?php if($acc_title): ?>
                            <div class="qlt-acc-header"><?php echo $acc_title; ?>
                                <div class="toggle-img">
                                    <img class="toggle-plus"
                                        src="<?php echo get_template_directory_uri() . '/assets/images/toggle-plus.png'; ?>">
                                    <img class="toggle-minus"
                                        src="<?php echo get_template_directory_uri() . '/assets/images/toggle-minus.png'; ?>">
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="qlt-acc-content">
                                <?php if($acc_para): ?>
                                <p><?php echo $acc_para; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>">
    </div>
</section>
<?php endif; ?>
<!-- End accordioan section -->


<section class="masterminds">


    <div class="marquee a-section-marquee-box comp-team">
    <?php if(have_rows('marquee_list')):
          while(have_rows('marquee_list')): the_row();

           $m_image = get_sub_field('marquee_image');
           $m_text = get_sub_field('marquee_text');
    ?>
        <div class="mrc2-text" aria-hidden="true">
            <?php if($m_text): ?>
                <div class="bsl-tect"><?php echo $m_text; ?></div>
            <?php endif; ?>
            
            <span>
                <?php if($m_text): ?><img src="<?php echo $m_image; ?>"> <?php endif; ?>
            </span>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>
   

    <!-- <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class="rathi-experts">


                <?php if(have_rows('expert_list')):
                      while(have_rows('expert_list')): the_row();

                      $e_image = get_sub_field('expert_image');
                      $e_name = get_sub_field('expert_name');
                      $e_position = get_sub_field('expert_designation');
                ?>

                    <div class="expert-wrap">
                        <div class="exp-img-wrap">
                            <?php if($e_image): ?>
                            <img
                                src="<?php echo $e_image; ?>">
                            <?php endif; ?>
                            </span>
                        </div>
                        <?php if($e_name): ?> 
                            <h3><?php echo $e_name; ?></h3>
                        <?php endif; ?>
                        <?php if($e_position): ?>
                            <p><?php echo $e_position; ?></p> 
                        <?php endif; ?>
                    </div>
                
                <?php endwhile; 
                      endif;
                ?>

                </div>
            </div>
        </div>
    </div> -->

    <div class="container ctr">
        <div class="row">
            <div class="col-12">

                <div class=" team-member">


                <?php if(have_rows('team_section')):
                      while(have_rows('team_section')): the_row();

                    //   $e_image = get_sub_field('expert_image');
                      $e_name = get_sub_field('expert_name');
                      $e_position = get_sub_field('expert_designation');
                ?>

                    <div class="expert-wrap">
                        <!-- <div class="exp-img-wrap">
                            <?php if($e_image): ?>
                            <img
                                src="<?php echo $e_image; ?>">
                            <?php endif; ?>
                            </span>
                        </div> -->
                        <?php if($e_name): ?> 
                            <h3><?php echo $e_name; ?></h3>
                        <?php endif; ?>
                        <?php if($e_position): ?>
                            <p><?php echo $e_position; ?></p> 
                        <?php endif; ?>
                    </div>
                
                <?php endwhile; 
                      endif;
                ?>

                </div>
            </div>
        </div>
    </div>


    <div class="shape1">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/clove.png'; ?>">
    </div>

</section>


<?php get_footer(); ?>