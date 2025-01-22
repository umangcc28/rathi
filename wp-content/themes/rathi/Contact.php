<?php
/* Template Name: contact-us */
?>
    
<?php get_header(); ?>


        <section class="map-section">
            <?php 
            $google_map_url = get_field('google_map_url');
            if ($google_map_url) : ?>
                <iframe src="<?php echo $google_map_url; ?>" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <?php endif; ?>
        </section>

        <section class="contact-details">

            <div class="shape1">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/cumins.png'; ?>">
            </div>
            <div class="shape2">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/mini-black-pps.png'; ?>">
            </div>
            <div class="container ctr">
                <div class="row start-align">

                            <div class="col-4">
                                <div class="contact-left-boxes">

                                    <?php if( have_rows('contact_data') ): ?>
                                        <?php while( have_rows('contact_data') ): the_row(); ?>

                                            <div class="leftbox <?php echo the_sub_field('background_color'); ?>">

                                                <div class="icon-wrapper">
                                                    <img src="<?php echo the_sub_field('icon'); ?>">
                                                </div>
                                                <div class="contact-content">
                                                    <p class="concern-head">
                                                        <?php echo the_sub_field('heading'); ?>
                                                    </p>
                                                    <p class="details">
                                                        <?php echo the_sub_field('info'); ?>
                                                    </p>

                                                </div>

                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="col-8">
                                <div class="contact-us-form">
                                    <?php 
                                    $form_title = get_field('form_heading'); 
                                    if ($form_title): ?>
                                        <h2><?php echo $form_title; ?></h2>
                                    <?php endif; ?>
                                    <?php 
                                    $form_code = get_field('form_shortcode');
                                    if ($form_code) : ?>
                                        <div class="form-design">
                                                <?php echo do_shortcode($form_code); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                </div>
            </div>

        </section>



<?php get_footer(); ?>